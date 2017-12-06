<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	


<?php 

//var_dump($_POST);

$tel = $_POST['tel'];
$adres = $_POST['adres'];
$mail = $_POST['mail'];

$usluga1 = $_POST['usluga1'];
$usluga2 = $_POST['usluga2'];
$usluga3 = $_POST['usluga3'];

echo "<br>Телефон - {$tel}";
echo "<br>Адрес - {$adres}";

if ($mail == "") {
	echo "<br> Почта не вписана";
} else {
	echo "<br> Почта - {$mail}";
}

if ($usluga1 == "on") {
	echo "<br> Запрошена услуга 1";
}

if ($usluga2 == "on") {
	echo "<br> Запрошена услуга 2";
}

if ($usluga3 == "on") {
	echo "<br> Запрошена услуга 3";
}

?>



</body>
</html>