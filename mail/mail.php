<?php

  
$var_date = date("Y-m-d H:i:s");
$name = trim($_POST["name"]);
$phone = trim($_POST["phone_number"]);
$email = trim($_POST["email"]);

$sitename = "limestone.com.ua";


$recepient = "martseniuk.anton@gmail.com" . ", " ; //обратите внимание на запятую
$recepient .= "193681@ukr.net";



$pagetitle = "Уведомление с сайта \"$sitename\"";
//-----------------------------------------------message text
$message = "
<html>
	<head>$var_date</head>
	<p><strong>Имя: </strong>$name  </p>
	<p><strong>Телефон:</strong> $phone </p>
	<p><strong>e-mail:</strong> $email </p>
</body>
</html>
";

mail($recepient, $pagetitle, $message, "Content-type: text/html; charset=\"utf-8\"\n From: $recepient");

?>