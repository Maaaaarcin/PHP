<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;
use PDOException;

class CalcCtrl {
	
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	private $koszt;
	private $records;

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
public function getParams(){
		$this->form->paliwo = getFromRequest('paliwo');
		$this->form->cena = getFromRequest('cena');
		$this->form->kilometry = getFromRequest('kilometry');
	}

public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->paliwo ) && isset ( $this->form->cena ) && isset ( $this->form->kilometry ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false;
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->paliwo == "") {
			getMessages()->addError('Nie podano paliwa');
		}
		if ($this->form->cena == "") {
			getMessages()->addError('Nie podano ceny');
		}
		if ($this->form->kilometry == "") {
			getMessages()->addError('Nie podano kilometrow');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->paliwo )) {
				getMessages()->addError('paliwo nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->cena )) {
				getMessages()->addError('cena nie jest liczbą całkowitą');
			}
			if (! is_numeric ( $this->form->kilometry)) {
				getMessages()->addError('kilometry nie jest liczbą całkowitą');
			}
		}
		
		return ! getMessages()->isError();
	}

	public function validateEdit() {
        $this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
        return ! getMessages()->isError();
    }

	public function action_calcCompute(){
		
		$this->getParams();
		
		if ($this->validate()) {
			
			$this->form->paliwo = floatval($this->form->paliwo);
			$this->form->cena = floatval($this->form->cena);
			$this->form->kilometry = floatval($this->form->kilometry);
			getMessages()->addInfo('Parametry poprawne.');

			$this->result->result = round($this->form->paliwo/$this->form->kilometry*100,2);
			$this->result->koszt = round($this->form->paliwo*$this->form->cena,2);
		
			getMessages()->addInfo('Wykonano obliczenia.');
		}	
		$this->action_wynikSave();
	}

	public function action_wynikSave(){
        
		if (!getMessages()->isError()) {
                getDB()->insert("wynik", [
                    "paliwo" => $this->form->paliwo,
                    "cena" => $this->form->cena,
                    "kilometry" => $this->form->kilometry,
                    "result" => $this->result->result,
                    "koszt" => $this->result->koszt
                ]);
		}
		$this->action_wynikList();
	}

	public function action_wynikList(){
		try{
			$this->records = getDB()->select("wynik", [
				"id",
				"paliwo",
				"cena",
				"kilometry",
				"result",
                "koszt"
			]);
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
        }
        $this->generateView();
	}

	public function action_wynikDelete(){
		if($this->validateEdit()){
			try{
				getDB()->delete("wynik",[
					"id" => $this->form->id
				]);
				getMessages()->addInfo('Pomyślnie usunięto rekord');
			} catch (PDOException $e){
				getMessages()->addError('Wystąpił błąd podczas usuwania rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());
			}
		}	
        header("Location: ".getConf()->app_url."/#kalkulator");
	}

	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->action_wynikList();
	}

	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));

		getSmarty()->assign('page_title','php_07');
		getSmarty()->assign('page_description','Baza danych');
		getSmarty()->assign('page_header','tabelka');
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		getSmarty()->assign('koszt',$this->koszt);
		getSmarty()->assign('records',$this->records);
		
		getSmarty()->display('CalcView.html');
	}
}