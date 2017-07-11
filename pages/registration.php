<!DOCTYPE html>
<html>
    <?php
        
        $title = "Registration";
        require_once "../head.php";
    ?>
<body>
 <?php require_once "../menu.php" ?>
  
   <div class="index">
       <div class="container" style="auto;">
        <center><h1 >Регистрация</h1></center>
	        <div class="col-lg-12">
	            <div class="row">
				    <form method="post" action="../scripts/reg.php">
					    <div class="col-sm-12">
						    <div class="row">
							    <div class="col-sm-6 form-group">
								    <label>Логин</label><text style="color:red; font-size:18px;">*</text>
								    <input type="text" name="login" placeholder="Enter First Name Here.." class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label>Пароль</label><text style="color:red; font-size:18px;">*</text>
                                    <input type="password" name="pass" placeholder="Enter Last Name Here.." class="form-control">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Пароль</label><text style="color:red; font-size:18px;">*</text>
                                    <input type="password" name="repass" placeholder="Enter Last Name Here.." class="form-control">
                                </div>
                            </div>
                            
                            <hr>
                            
                            <div class="row">
                                <div class="col-sm-3 form-group">
                                    <label>Имя</label>
                                    <input type="text" name="name" placeholder="Enter First Name Here.." class="form-control">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Фамилия</label>
                                    <input type="text" name="surname" placeholder="Enter Last Name Here.." class="form-control">
                                </div>
                                <div class="col-sm-5 form-group">
                                    <label>Дата рождения</label>
                                   <input type="text" name="birth" class="form-control" id="datepicker" placeholder="Enter Birth Date Here..">                                
                                </div>
                            </div>					
                            <div class="form-group">
                                <label>О себе</label>
                                <textarea placeholder="Enter Address Here.." name="about" rows="3" class="form-control"></textarea>
                            </div>	
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Город</label>
                                    <input type="text" name="city" placeholder="Enter City Name Here.." class="form-control">
                                </div>	
                                <div class="col-sm-6 form-group">
                                    <label>Номер телефона</label>
                                    <input type="text" name="tel" placeholder="Enter State Name Here.." class="form-control">
                                </div>	

                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" placeholder="Enter City Name Here.." class="form-control">
                                </div>	
                                <div class="col-sm-6 form-group">
                                    <label>Skype</label>
                                    <input type="text" name="skype" placeholder="Enter State Name Here.." class="form-control">
                                </div>	
                            </div>
					       <button type="RegButton" name="submit" id="RegButton"  class="btn btn-lg btn-info">Регистрация</button>					
					    </div>
                    </form> 
                </div>
            </div>
        </div>
   </div>
</body>
</html>