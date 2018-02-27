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
//var_dump($_POST);

    switch ($_POST['tvcost']) {
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
    echo "<form action='confirmtv.php' method='post'>";
    echo "<div class='row text-center'>
      <h3>Ваш телефон: <strong>{$_POST['tel']}</strong></h3>
      <input hidden='hidden' type='text' name='tel' id='tel' value='{$_POST['tel']}'>
      <h3>Ваш адрес: <strong>{$_POST['adres']}</strong></h3>
      <input hidden='hidden' type='text' name='adres' id='adres' value='{$_POST['adres']}'>
      <h3>Ваша эл. почта: <strong>{$mail}</strong></h3>
      <input hidden='hidden' type='text' name='mail' id='mail' value='{$_POST['mail']}'>
      <hr>
      <h3>Пакет: <strong>{$tvname}</strong></h3>
      <h3>Стоимость: <strong>{$tvecho}</strong></h3>
      <input hidden='hidden' type='text' name='tvname' id='tvname' value='{$tvname}'>
      <input hidden='hidden' type='text' name='tvecho' id='tvecho' value='{$tvecho}'>
      <input hidden='hidden' type='text' name='tvcost' id='tvcost' value='{$_POST['tvcost']}'>";
  echo "</strong></h3>
    </div>
    <hr>";

  echo "<div class='row'>
        <h2 class='text-center'>Сумма заявки: <strong>", $_POST['tvcost'] , "</strong> рублей</h2>'
        </div>";
  echo "<div class='row'>
      <div class='col-md-4'></div>
      <div class='col-md-2'>
        <input class='btn btn-lg btn-success center-block' type='submit' value='Подтвердить'>
      </div>
      <div class='col-md-2'>
        <a href='../pages/tv.html'>
          <input class='btn btn-lg btn-danger center-block' value='Вернуться'>
        </a>
      </div>
    </div>";
  echo "</form>";
} else {
	echo "<div class='row'>
    <div class='col-md-2'></div>
    <div class='col-md-8 text-center'>
        <h1>К сожалению вы зашли на эту страницу, пердварительно не выбрав пакет</h1>
        <br>
        <h2>Сначала выберите пакет</h2>
        <br>
        <a href='../pages/tv.html'>
            <button class='btn btn-primary btn-lg sltbg'>Выбрать пакет</button>
        </a>
    </div>        
</div>";
}
?>
</body>
</html>