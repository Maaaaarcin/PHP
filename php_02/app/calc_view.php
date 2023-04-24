<?php 
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
<?php 
    if($role == 'admin'){
        echo '<a href='._APP_ROOT.'/app/inna_chroniona.php class="pure-button">Chroniona strona</a>';
    }
?>
	
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">
<div></div>
<form action="<?php print(_APP_ROOT);?>/app/calc.php" method="post">
	<label for="id_paliwo">Podaj spalone paliwo w litrach: </label>
	<input id="id_paliwo" type="text" name="paliwo" value="<?php if(isset($paliwo)){print($paliwo);} ?>" /><br />
	<label for="id_kilometry">Podaj ilość przejechanych kilometrów </label>
	<input id="id_kilometry" type="text" name="kilometry" value="<?php if(isset($kilometry)){print($kilometry);} ?>" /><br />
	<label for="id_cena">Cena litra paliwa: </label>
	<input id="id_cena" type="text" name="cena" value="<?php if(isset($cena)){print($cena);} ?>" /><br />
	<input type="submit" value="Oblicz" />
	<?php
	if($role=='admin'){
		echo '<a href='._APP_URL.'/app/calc.php><input class="button" type="button" value="Reset"/></a>';
	}
	?>
</form>	


<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
<?php echo 'Srednie zuzycie paliwa: '.$result.'<br/> koszt trasy wynosi: '.$koszt; ?>
</div>
<?php } ?>

</body>
</html>