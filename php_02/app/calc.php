<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.
//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';
// 1. pobranie parametrów

function getParams(&$paliwo,&$cena,&$kilometry){
	$paliwo = isset($_REQUEST['paliwo']) ? $_REQUEST['paliwo'] : null;
	$cena = isset($_REQUEST['cena']) ? $_REQUEST['cena'] : null;
	$kilometry = isset($_REQUEST['kilometry']) ? $_REQUEST['kilometry'] : null;	
}

//$paliwo = $_REQUEST ['paliwo'];
//$cena = $_REQUEST ['cena'];
//$kilometry = $_REQUEST ['kilometry'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$paliwo,&$cena,&$kilometry,&$messages){
// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($paliwo) && isset($cena) && isset($kilometry))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	//$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
	return false;
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $paliwo == "") {
	$messages [] = 'Nie podano paliwa';
}
if ( $cena == "") {
	$messages [] = 'Nie podano ceny';
}
if ( $kilometry == "") {
	$messages [] = 'Nie podano kilometrow';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $paliwo )) {
		$messages [] = 'wartość paliwa nie jest liczbą ';
	}
	
	if (! is_numeric( $cena )) {
		$messages [] = 'wartość ceny nie jest liczbą ';
	}	
	if (! is_numeric( $kilometry)) {
		$messages [] = 'wartosc kilometrow nie jest liczbą ';
	}	
	if (count ( $messages ) != 0) return false;
	else return true;
}


// 3. wykonaj zadanie jeśli wszystko w porządku

function process(&$paliwo,&$cena,&$kilometry,&$messages,&$result,&$koszt){
	global $role;
	
	//konwersja parametrów na int
	$paliwo = floatval($paliwo);
	$cena = floatval($cena);
	$kilometry = intval($kilometry);
	
	//wykonanie operacji
	$result = round($paliwo/$kilometry*100,2);
	$koszt = round($result*$cena,2);
}

//definicja zmiennych kontrolera
$koszt = null;
$operation = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($paliwo,$cena,$kilometry);
if ( validate($paliwo,$cena,$kilometry,$messages) ) { // gdy brak błędów
	process($paliwo,$cena,$kilometry,$messages,$result,$koszt);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';



