<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
   <link rel="stylesheet" href="../css/bootstrap.css">
   <script language="JavaScript" type="text/javascript">
   function changeurl(){eval(self.location="../main.html");}
   window.setTimeout("changeurl();",3000);
   </script>
</head>
<body style="background: #1B1A1C; overflow: hidden;">
   <div class="row">
      <div class="col-md-12 text-center">
         <?php
   // $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
 
   if(!empty($_POST['label']) and !empty($_POST['adres']) and !empty($_POST['tel'])){
      $label = trim(strip_tags($_POST['label']));
      $adres = trim(strip_tags($_POST['adres']));
      $tel = trim(strip_tags($_POST['tel']));
      $mail = trim(strip_tags($_POST['mail']));
 
      mail('butovonet@mail.ru', 'Заявка от пользователя с главной', 
      'ФИО: '.$label.' 
      Адрес: '.$adres.' 
      Телефон: '.$tel.' 
      Почта: '.$mail,"Content-type:text/html;charset=utf-8");
 
      echo "<h1 style='color: azure; margin-top: 300px;'>Спасибо за отправленную заявку!</h1>";
      echo "<br>";
      echo "<h2 style='color: azure;'>Сейчас откроется предудщая страница!</h2>";
 
      exit;
   } 
   else {
      echo "<h1 style='color: azure; margin-top: 300px;'>Для отправки сообщения заполните все поля!</h1>";
      echo "<h2 style='color: azure;'>Сейчас откроется предудщая страница!</h2>";
      //echo "<h2 style='color:>Сейчас откроется предудщая страница!</h2>";
      exit;
   }
?>
      </div>
   </div>
</body>
</html>