<?php
namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {
	
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	private $koszt;

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
	public function process(){
		
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
		$this->generateView();
}
		
		
	public function generateView(){
		//nie trzeba już tworzyć Smarty i przekazywać mu konfiguracji i messages
		// - wszystko załatwia funkcja getSmarty()
		
		getSmarty()->assign('page_title','php_04');
		getSmarty()->assign('page_description','Kolejne rozszerzenia dla aplikacja z jednym "punktem wejścia". Do nowej struktury dołożono automatyczne ładowanie klas wykorzystując w strukturze przestrzenie nazw.');
		getSmarty()->assign('page_header','Kontroler główny');
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		getSmarty()->assign('koszt',$this->koszt);
		
		getSmarty()->display('CalcView.html'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
	}
}