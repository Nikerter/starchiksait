<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
   <link rel="stylesheet" href="../css/bootstrap.css">
   <script language="JavaScript" type="text/javascript">
   function changeurl(){eval(self.location="../pages/tariff.html");}
   window.setTimeout("changeurl();",3000);
   </script>
</head>
<body style="background: #1B1A1C; overflow-x: hidden;">
   <div class="row">
      <div class="col-md-12 text-center">
         <?php
               if(!empty($_POST['tel'])){
                  $tel = trim(strip_tags($_POST['tel']));
                  mail('butovonet@mail.ru', 'Заявка от с тарифного плана (модальное окно)', 
                  'Телефон: '.$tel);
                  echo "<h1 style='color: azure; margin-top: 300px;'>Спасибо за отправленную заявку!</h1>";
                  echo "<br>";
                  echo "<h2 style='color: azure;'>Сейчас откроется предудщая страница!</h2>";
                  exit;
               } 
               else {
                  echo "<h1 style='color: azure; margin-top: 300px;'>Для отправки сообщения заполните все поля!</h1>";
                  echo "<br>";
                  echo "<h2 style='color: azure;'>Сейчас откроется предудщая страница!</h2>";
                  exit;
               }
          ?>
      </div>
   </div>
</body>
</html>