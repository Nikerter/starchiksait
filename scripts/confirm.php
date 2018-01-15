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

//function cas($tariffcost)
//{
    switch ($_POST['tarifftype']/*$tariffcost*/) {
    case '300':
      $hc = 0;
      $tariffcost = 300;
      $tariffname = '30 Мбит/с';
      $tariffecho = "300 руб";
      break;

    case '400':
      $hc = 0;
      //$tariff = 400;
      $tariffcost = 250;
      $tariffname = '70 Мбит/с';
      $tariffecho = "Первые 3 месяца 250 рублей/месяц  Далее 400 рублей/месяц";
      break;

    case '450':
      $hc = 0;
      //$tariff = 450;
      $tariffcost = 300;
      $tariffname = '100 Мбит/с';
      $tariffecho = "Первые 3 месяца 300 рублей/месяц  Далее 450 рублей/месяц";
      break;

    case '550':
      $hc = 0;
      //$tariff = 550;
      $tariffcost = 400;
      $tariffname = '150 Мбит/с';
      $tariffecho = "Первые 3 месяца 400 рублей/месяц  Далее 550 рублей/месяц";
      break;

    case '650':
      $hc = 0;
      //$tariff = 650;
      $tariffcost = 500;
      $tariffname = '200 Мбит/с';
      $tariffecho = "Первые 3 месяца 500 рублей/месяц Далее 650 рублей/месяц";
      break;
    
    default:
      $hc = 1;
      break;
  }

//return $hc;
//}

if ($_POST['usluga1'] == "on") {
  $uslugcost1 = $_POST['uslugcost1'];
  $sumusl = $sumusl + $uslugcost1;

  $usarr[] = $_POST['usluganame1'];
  $usarr[$_POST['usluganame1']] = $_POST['uslugcost1'];
  $ust1 = 1;
}

if ($_POST['usluga2'] == "on") {
  $uslugcost2 = $_POST['uslugcost2'];
  $sumusl = $sumusl + $uslugcost2;
  $usarr[] = $_POST['usluganame2'];
  $usarr[$_POST['usluganame2']] = $_POST['uslugcost2'];
  $ust2 = 1;
}

if ($_POST['usluga3'] == "on") {
  $uslugcost3 = $_POST['uslugcost3'];
  $sumusl = $sumusl + $uslugcost3;
  $usarr[] = $_POST['usluganame3'];
  $usarr[$_POST['usluganame3']] = $_POST['uslugcost3'];
  $ust3 = 1;
}

function cost ($tariffcost, $sumusl) {
  echo $tariffcost + $sumusl;
}


//var_dump($_POST);

// echo $_POST['usluganame1'];
// echo $_POST['usluganame2'];
// echo $_POST['usluganame3'];

//cas($_POST['tariffcost']);

//$tariffcost = $_POST['tariffcost'];


//$mail = $_POST['mail'];




if ($_POST['mail'] == "") {
  $mail = "Почта не указана";
  //echo "<br> Почта не вписана";
} else {
  $mail = $_POST['mail'];
  //echo "<br> Почта - {$_POST['mail']}";
};

// foreach ($usarr as $value) {
//   echo "<br>Услуги подключены: {$value}";
// }

if ((isset($_POST['tel'])) && (isset($_POST['adres'])) && (isset($_POST['tariffcost'])) && ($hc == 0)) {
    echo "
      телефон:{$_POST['tel']}
      <br>
      адрес: {$_POST['adres']}
      <br>      
      эл. почта: {$mail}
      <br>
      Тариф: {$tariffname}
      <br>
      Стоимость: {$tariffecho}
      <br>
      <br>";
      
    echo "Доп услуги:";
  //$key = 0;
  if (($usttrigger1 == 1) && ($usttrigger2 == 1) && ($usttrigger3 == 1)) {
    echo "Дополнительные услуги не выбраны";
  } else {
            
            if ($_POST['usluga1'] == "on") {
             echo "<br>", $_POST['usluganame1'], " - ", $_POST['uslugcost1'], " рублей";
             echo "<input hidden='hidden' type='text' name='usluga1' id='usluga1' value='{$_POST['usluganame1']}'>";
            }

            if ($_POST['usluga2'] == "on") {
             echo "<br>", $_POST['usluganame2'], " - ", $_POST['uslugcost2'], " рублей";
             echo "<input hidden='hidden' type='text' name='usluga2' id='usluga2' value='{$_POST['usluganame2']}'>";
            }

            if ($_POST['usluga3'] == "on") {
             echo "<br>", $_POST['usluganame3'], " - ", $_POST['uslugcost3'], " рублей";
             echo "<input hidden='hidden' type='text' name='usluga3' id='usluga3' value='{$_POST['usluganame3']}'>";
            }
         //  foreach ($usarr as  $value) {
         //    //++$key;
         //    echo " - ", $value;

         //    //echo "<input  type='text' name='usluga{$key}' id='usluga{$key}' value='{$value}'>";
         //    // echo "<pre>";
         //    // echo print_r($usarr2);
         //    // echo "</pre>";
         //    //echo "<input type='text' name='{$value}' id='{$value}' value='{$value}'>";
         // }
            // if ($_POST['usluga1'] == "on") {
            //  echo "<input hidden='hidden' type='text' name='usluga1' id='usluga1' value='{$_POST['usluganame1']}'>";
            // }

            // if ($_POST['usluga2'] == "on") {
            //  echo "<input hidden='hidden' type='text' name='usluga2' id='usluga2' value='{$_POST['usluganame2']}'>";
            // }

            // if ($_POST['usluga3'] == "on") {
            //  echo "<input hidden='hidden' type='text' name='usluga3' id='usluga3' value='{$_POST['usluganame3']}'>";
            // }
       // echo "<pre>";
       // echo print_r($usarr);
       // echo "</pre>";
    }

  echo "<br>Общая сумма заявки:", cost($tariffcost, $sumusl) , " рублей";
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