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

function cas($tariffcost)
{
  switch ($tariffcost) {
  case '300':
    $hc = 0;
    break;

  case '400':
    $hc = 0;
    break;

  case '450':
    $hc = 0;
    break;

  case '550':
    $hc = 0;
    break;

  case '650':
    $hc = 0;
    break;
  
  default:
    $hc = 1;
    break;
}

return $hc;
}

var_dump($_POST);

cas($_POST['tariffcost']);


$tel = $_POST['tel'];
$adres = $_POST['adres'];
$mail = $_POST['mail'];


echo "<br>Телефон - {$tel}";
echo "<br>Адрес - {$adres}";

if ($mail == "") {
  echo "<br> Почта не вписана";
} else {
  echo "<br> Почта - {$mail}";
}


if ($_POST['usluga1'] == "on") {
  //echo "<br> Запрошена услуга 1 <br>";
  $uslugcost1 = $_POST['uslugcost1'];
  //echo $uslugcost1;
  $sumusl = $sumusl + $uslugcost1;
}

if ($_POST['usluga2'] == "on") {
  //echo "<br> Запрошена услуга 2 <br>";
  $uslugcost2 = $_POST['uslugcost2'];
  //echo $uslugcost2;
  $sumusl = $sumusl + $uslugcost2;
}

if ($_POST['usluga3'] == "on") {
  //echo "<br> Запрошена услуга 3 ";
  $uslugcost3 = $_POST['uslugcost3'];
  //echo $uslugcost3;
  $sumusl = $sumusl + $uslugcost3;
}


if ((isset($_POST['tel'])) && (isset($_POST['adres'])) && (isset($_POST['tariffcost'])) && ($hc == 0)) {
	echo "<div class='row'>
        <h2 class='text-center'>Сумма подключенных вами услуг: ", $_POST['tariffcost'] + $sumusl, "</h2>'
        </div>";
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




?>

</body>
</html>