<?php

 require_once "../scripts/bd.php"; 
date_default_timezone_set('UTC');

$login = $_POST['login'];
$password = $_POST['pass'];
$password2 = $_POST['repass'];
$name = $_POST['name'];
$lastname = $_POST['surname'];
$birthdate = $_POST['birth'];
$regdate = date('Y-m-d');
$about = $_POST['about'];
$skype = $_POST['skype'];
$telnr = $_POST['tel'];
$city = $_POST['city'];
$email = $_POST['email'];

$newDate = date("Y-m-d", strtotime($birthdate));
 

 
 
mysql_select_db($db);

if($password == $password2){
 
 
$result = mysql_query("INSERT INTO `users` (login, password, name, lastname, birthdate, rdate, about, skype, telnr, email, city) 
VALUES('$login', '$password', '$name', '$lastname', '$newDate', '$regdate', '$about', '$skype', '$telnr', '$email', '$city')");
 
 
if ($result== 'true') 
{echo "$newDate";}
else{echo "Ваши данные не добавлены";}
 
 
 
}
else{echo "paroli raznye";}
 
      
?>