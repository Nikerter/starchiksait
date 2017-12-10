<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Подтверждение подключения</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../js/bootstrap.js" type="text/javascript"></script>
    <script src="../js/jquery-3.2.1.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Marmelad" rel="stylesheet">
</head>
<body>
   <style>
       body{
           background: rgb(5, 165, 167);
background: -moz-linear-gradient(30deg, rgb(5, 165, 167) 30%, rgb(48, 186, 168) 70%);
background: -webkit-linear-gradient(30deg, rgb(5, 165, 167) 30%, rgb(48, 186, 168) 70%);
background: -o-linear-gradient(30deg, rgb(5, 165, 167) 30%, rgb(48, 186, 168) 70%);
background: -ms-linear-gradient(30deg, rgb(5, 165, 167) 30%, rgb(48, 186, 168) 70%);
background: linear-gradient(120deg, rgb(5, 165, 167) 30%, rgb(48, 186, 168) 70%);
       }
    </style>
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="#">StarLineTelecom</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="../index.html">Главная</a></li>
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Интернет <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="active"><a href="../pages/tariff.html">Подбор тарифного плана</a></li>
                <li class="divider"></li>
                <li><a href="../pages/services.html">Дополнительные услуги</a></li>
              </ul>
            </li>
            <li><a href="../pages/tv.html">Телевидение</a></li>
            <li><a href="../pages/business.html">Бизнес</a></li>
            <li><a href="../pages/payment.html">Оплата</a></li>
            <li><a href="../pages/contacts.html">Контакты</a></li>
            <li><a href="https://b.butovonet.ru/webroom/" target="_blank">Личный кабинет</a></li>
          </ul>       
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
<?php 

//var_dump($_POST);

if ((isset($_POST['tel'])) || (isset($_POST['adres']))) {
	echo "<h1>Спасибо за предоставленные данные!</h1>";
} else {
	echo "<div class='row'>
    <div class='col-md-2'></div>
    <div class='col-md-8 text-center'>
        <h1>К сожалению вы зашли на эту страницу, пердварительно не выбрав тарифный план</h1>
        <br>
        <h2>Сначала выберите тарифный план</h2>
        <br>
        <a href='../pages/tariff.html'>
            <button class='btn btn-primary btn-lg sltbg'>Выбрать тариф</button>
        </a>
    </div>        
</div>";
}


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