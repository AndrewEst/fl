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
          <a class="navbar-brand" href="#" id="brand">FreeLance</a>
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
            <li class="dropdown">
                <a href="#" class="dropdown-toggle"  data-toggle="dropdown" id="button">Войти<span class="caret"></span></a>
                    <ul id="login" class="dropdown-menu" >
                        <li>
                            <div class="row" >
                                <div class="col-xs-12" >
                                     <form class="form" method="post"  action="scripts/login.php" accept-charset="UTF-8" >
                                         <div class="form-group" >
                                             <label class="sr-only" for="text" >Логин</label>
                                             <input type="text"  class="form-control" name="login" id="loginText" placeholder="Логин" required>
                                        </div>
                                        <div class="form-group" >
                                             <label class="sr-only" for="exampleInputPassword2">Пароль</label>
                                             <input type="text" class="form-control" id="loginText" name="pass" id="exampleInputPassword2" placeholder="Пароль" required>
                                             <div class="help-block text-center" >
                                                 <a href="#">забыл пароль?</a>
                                             </div>
                                        </div>
                                        <div class="form-group">
                                             <center><button type="submit" id="buttonLogin" class="btn btn-primary btn-block">Войти</button></center>
                                        </div>
                                    </form>
                                </div>
                             </div>
                        </li>
                    </ul>
                                                
            <li><a href="#" id="button">Регистрация</a></li>
            
          </ul>
          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
</div>
    
    