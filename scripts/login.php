<?php
 require_once "../scripts/bd.php"; 
 mysql_select_db($db);

    if (isset($_POST['uname'])) { 
        $login = $_POST['uname']; 
        if ($login == '') { 
            unset($login);
        } 
    }

    if (isset($_POST['upass'])) {
        $password=$_POST['upass']; 
        if ($password ==''){ 
            unset($password);
        } 
    }

    if (empty($login) or empty($password)){
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
        }
   



    $result = mysql_query("SELECT * FROM users WHERE login='$login'");
    $myrow = mysql_fetch_array($result);

    
    
        if ($myrow['password']==$password){
            setcookie("id",$myrow['id'],time()+3600*24,"/");
            setcookie("pass", $myrow['password'], time()+3600*24,"/");
            header("Location: ".$_SERVER['HTTP_REFERER']); 
            exit();
        }
        else {
            exit ("Извините, введённый вами login или пароль неверный.");
            }
    
?>