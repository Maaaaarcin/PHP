<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$paliwo = $_REQUEST ['paliwo'];
$cena = $_REQUEST ['cena'];
$kilometry = $_REQUEST ['kilometry'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($paliwo) && isset($cena) && isset($kilometry))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
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
if (empty( $messages )) {
	
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
}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$paliwo = floatval($paliwo);
	$cena = floatval($cena);
	$kilometry = intval($kilometry);
	
	$result = round($paliwo/$kilometry*100,2);
	$koszt = round($result*$cena,2);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';