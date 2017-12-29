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

var_dump($_POST);

?>

</body>
</html>