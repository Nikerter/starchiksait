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

//echo $_POST['tel'], "<br>",$_POST['adres'];

//var_dump($_POST);

?>

<?php 

var_dump($_POST);

//function cas($tariffcost)
//{
    switch ($_POST['tvcost']/*$tariffcost*/) {
    case '99':
      $hc = 0;
      $tvname = '75 каналов';
      $tvecho = "99 рублей";
      break;

    case '249':
      $hc = 0;
      $tvname = '100 каналов';
      $tvecho = "249 рублей";
      break;

    case '399':
      $hc = 0;
      $tvname = '175 каналов';
      $tvecho = "399 рублей";
      break;

    case '1000':
      $hc = 0;
      $tvname = '188 каналов';
      $tvecho = "1000 рублей";
      break;
    
    default:
      $hc = 1;
      break;
  }

if ($_POST['mail'] == "") {
  $mail = "Почта не указана";

} else {
  $mail = $_POST['mail'];

};

if ((isset($_POST['tel'])) && (isset($_POST['adres'])) && (isset($_POST['tvcost'])) && ($hc == 0)) {
    echo "
      телефон:{$_POST['tel']}
      <br>
      адрес: {$_POST['adres']}
      <br>      
      эл. почта: {$mail}
      <br>
      Пакет: {$tvname}
      <br>
      Стоимость: {$_POST['tvcost']}
      <br>
      <br>";

  echo "<br>Общая сумма заявки:", $_POST['tvcost'] , " рублей";
} else {
  echo "<div class='row'>
    <div class='col-md-2'></div>
    <div class='col-md-8 text-center'>
        <h1>К сожалению вы зашли на эту страницу, пердварительно не выбрав тарифный план</h1>
        <br>
        <h2>Сначала выберите тарифный план</h2>
        <br>
        <a href='../pages/tv.html'>
            <button class='btn btn-primary btn-lg sltbg'>Выбрать тариф</button>
        </a>
    </div>        
</div>";
}




?>

</body>
</html>