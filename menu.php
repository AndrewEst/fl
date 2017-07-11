<div class="container-fluid" id="menu1">
    <!-- Second navbar for categories -->
    <nav class="navbar navbar-fixed-top" id="menu">
     
      <div class="container" id="brand">
       
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" id="brand">
         
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar" id="button3"></span>
            <span class="icon-bar" id="button3"></span>
            <span class="icon-bar" id="button3"></span>
          </button>
          <a class="navbar-brand" href="../index.php" id="brand">FreeLance</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1" >
          <ul class="nav navbar-nav navbar-right" id="brand">
            <li>
              <a class="btn btn-outline btn-circle"  data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="nav-collapse1" id="button">Найти работу</a>
            </li>
            <ul class="collapse nav navbar-nav nav-collapse" id="collapse1">
            <li><a href="#" id="button2">IT</a></li>
            <li><a href="#" id="button2">Дизайн</a></li>
            <li><a href="#" id="button2">Графика</a></li>
            <li><a href="#" id="button2">Текст</a></li>
            
          </ul>
            <li><a href="#" id="button">Предложить работу</a></li>
            <li><a href="#" id="button">Поиск</a></li>
            <?php
                if ((empty($_COOKIE["id"]) or empty($_COOKIE["pass"]))){
            ?>
            
            <li class="dropdown" id="log">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="button"> Войти</a>
                
				<div class="dropdown-menu" id="log2">
				<center>
				<form class="form-vertical"  method="post" action="../scripts/login.php" accept-charset="UTF-8" >
				  <input  class="form-control login" type="text" name="uname" placeholder="Логин"  id="loginText"/>
				  <input  class="form-control login" type="password" name="upass" placeholder="Пароль" id="loginText"/>
				  <input class="btn btn-primary" type="submit" name="submit" value="Войти" id="buttonLogin"/>
				</form>
				</center>
				</div>   
			</li>   
                                                                
                                                
            <li><a href="../pages/registration.php" id="button">Регистрация</a></li>
            <?php 
                }   
                else{
            ?>
            <ul class="nav navbar-nav navbar-right">
             <li class="dropdown" id="log">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="button">Личный кабинет</a>
                <div class="dropdown-menu" id="log2">
                    <center>
                        <li><a href="../pages/mypage.php?id=<?=$_COOKIE["id"]?>">Личная информация</a></li>
                        <li><a href="../pages/msg.php?id=<?=$_COOKIE["id"]?>">Сообщения</a></li>
                        <li><a href="../pages/myoffers.php?id=<?=$_COOKIE["id"]?>">Мои объявления</a></li>
                        <form action="finishcookie.php" method="post"><input type='submit' name='exit' value='Выйти'/></form>
                    </center>
                </div>
            </li> 
            
            <li class="nav navbar-nav navbar-right">
                <img class="img-circle" src="https://www.kv.by/sites/default/files/6gjpihg2sx8.jpg" width="50px">
            </li>  
              </ul>
            <?php 
                 }
            ?>
            
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
</div>
    
    