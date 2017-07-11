<!DOCTYPE html>
<html>
    <?php
        $title = "MYPage";
        require_once "../head.php";
    ?>
<body>
<div class="index">
 <?php 
    require_once "../menu.php";
    require_once "../scripts/bd.php"; 
    mysql_select_db($db);
    
    if (!((empty($_COOKIE["id"]) or empty($_COOKIE["pass"])))){
        $cookieID = $_COOKIE["id"];
        $result = mysql_query("SELECT * FROM users WHERE id=2") or die(mysql_error());
        $myrow = mysql_fetch_array($result);
        
        $id = $_GET[id];
        $login = $myrow['login'];;
        $name = $myrow['name'];
        $lastname = $myrow['lastname'];
        $birthdate = $myrow['birthdate'];
        $regdate = $myrow['rdate'];
        $about = $myrow['about'];
        $skype = $myrow['skype'];
        $telnr = $myrow['telnr'];
        $city = $myrow['city'];
        $email = $myrow['email'];
        
    ?>

    <ul>
        <li>ID: <?=$id?></li>
        <li>Логин: <?=$login?></li>
        <li>Имя: <?=$name?></li>
        <li>Фамилия: <?=$lastname?></li>
        <li>Дата рождения: <?=$birthdate?></li>
        <li>Дата регистрации: <?=$regdate?></li>
        <li>Обо мне: <?=$about?></li>
        <li>Номер телефона: <?=$telnr?></li>
        <li>Город: <?=$city?></li>
        <li>Email: <?=$email?></li>
        <li>Skype: <?=$skype?></li>
    </ul>

<?php 
    }   
    else{
?>
            //dlja drugih
<?php 
     }
?>
    </div>
</body>
</html>