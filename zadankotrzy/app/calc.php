<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/smarty/libs/Smarty.class.php';

function getParams(&$form){
	$form['paliwo'] = isset($_REQUEST['paliwo']) ? $_REQUEST['paliwo'] : null;
	$form['cena'] = isset($_REQUEST['cena']) ? $_REQUEST['cena'] : null;
	$form['kilometry'] = isset($_REQUEST['kilometry']) ? $_REQUEST['kilometry'] : null;	
}

function validate(&$form, &$messages){

	if ( ! (isset ($form['paliwo']) && isset($form['cena']) && isset($form['kilometry']))) {
		return false;
	}
	if ( $form['paliwo'] == "") {
		$messages [] = 'Nie podano paliwa';
	}
	if ( $form['cena'] == "") {
		$messages [] = 'Nie podano ceny';
	}
	if ( $form['kilometry'] == "") {
		$messages [] = 'Nie podano kilometrow';
	}


	if (empty( $messages )) {

		if (! is_numeric( $form['paliwo'] )) {
			$messages [] = 'paliwo nie jest liczbą';
		}
		
		if (! is_numeric( $form['cena'] )) {
			$messages [] = 'Cena nie jest liczbą';
		}
		
		if (! is_numeric( $form['kilometry'] )) {
			$messages [] = 'Kilometry nie jest liczbą';
		}	

		if(count($messages) != 0) return false;
		else return true;
	}
}

function process(&$form,&$result,&$koszt){
	$form['paliwo'] = floatval($form['paliwo']);
	$form['cena'] = floatval($form['cena']);
	$form['kilometry'] = floatval($form['kilometry']);

	$result = round($form['paliwo']/$form['kilometry']*100,2);
	$koszt = round($form['paliwo']*$form['cena'],2);
	
}
$form = null;
$result = null;
$koszt = null;
$messages = array();

getParams($form);
if(validate($form, $messages)) {
	process($form,$result,$koszt);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Obliczanie Drogi');
$smarty->assign('page_description','"Profesjonalne" szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty zastosowane w kalkulatorze');

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('koszt',$koszt);
$smarty->assign('messages',$messages);

$smarty->display(_ROOT_PATH.'/app/index.html');