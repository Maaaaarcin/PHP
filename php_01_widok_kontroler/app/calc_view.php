<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_paliwo">Podaj spalone paliwo w litrach: </label>
	<input id="id_paliwo" type="text" name="paliwo" value="<?php if(isset($paliwo)){print($paliwo);} ?>" /><br />
	<label for="id_kilometry">Podaj ilość przejechanych kilometrów </label>
	<input id="id_kilometry" type="text" name="kilometry" value="<?php if(isset($kilometry)){print($kilometry);} ?>" /><br />
	<label for="id_cena">Cena litra paliwa: </label>
	<input id="id_cena" type="text" name="cena" value="<?php if(isset($cena)){print($cena);} ?>" /><br />
	<input type="submit" value="Oblicz" />
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
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Srednie zuzycie paliwa: '.$result.'<br/> koszt trasy wynosi: '.$koszt; ?>
</div>
<?php } ?>

</body>
</html>