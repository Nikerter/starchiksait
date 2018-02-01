<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php
   $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
 
   if(!empty($_POST['label']) and !empty($_POST['adres']) and !empty($_POST['tel']) 
   and !empty($_POST['mail'])){
      $label = trim(strip_tags($_POST['label']));
      $adres = trim(strip_tags($_POST['adres']));
      $tel = trim(strip_tags($_POST['tel']));
      $mail = trim(strip_tags($_POST['mail']));
 
      mail('nekit@gmail.com', 'Письмо с адрес_вашего_сайта', 
      'Вам написал: '.$label.'<br />Его номер: '.$phone.'<br />Его почта: '.$mail.'<br />
      Его сообщение: '.$message,"Content-type:text/html;charset=windows-1251");
 
      echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
      ближайшее время<Br> $back";
      echo "<br>";
      var_dump($_POST);
 
      exit;
   } 
   else {
      echo "Для отправки сообщения заполните все поля! $back";
      exit;
   }
?>

</body>
</html>

