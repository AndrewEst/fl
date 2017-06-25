<!DOCTYPE html>
<html>
    <?php
        
        $title = "Registration";
        require_once "../head.php" 
    ?>
<body>
 <?php require_once "../menu.php" ?>
  
   <div class="index">
       <div class="container">
        <h1 class="well">Регистрация</h1>
	        <div class="col-lg-12 well">
	            <div class="row">
				    <form>
					    <div class="col-sm-12">
						    <div class="row">
							    <div class="col-sm-6 form-group">
								    <label>Логин</label>
								    <input type="text" placeholder="Enter First Name Here.." class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label>Пароль</label>
                                    <input type="text" placeholder="Enter Last Name Here.." class="form-control">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Пароль</label>
                                    <input type="text" placeholder="Enter Last Name Here.." class="form-control">
                                </div>
                            </div>
                            
                            <hr>
                            
                            <div class="row">
                                <div class="col-sm-3 form-group">
                                    <label>Имя</label>
                                    <input type="text" placeholder="Enter First Name Here.." class="form-control">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Фамилия</label>
                                    <input type="text" placeholder="Enter Last Name Here.." class="form-control">
                                </div>
                                <div class="col-sm-5 form-group">
                                    <label>Дата рождения</label>
                                   <input type="text" class="form-control" id="datepicker" placeholder="Enter Birth Date Here..">                                
                                </div>
                            </div>					
                            <div class="form-group">
                                <label>О себе</label>
                                <textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
                            </div>	
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Город</label>
                                    <input type="text" placeholder="Enter City Name Here.." class="form-control">
                                </div>	
                                <div class="col-sm-6 form-group">
                                    <label>Номер телефона</label>
                                    <input type="text" placeholder="Enter State Name Here.." class="form-control">
                                </div>	

                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Email</label>
                                    <input type="text" placeholder="Enter City Name Here.." class="form-control">
                                </div>	
                                <div class="col-sm-6 form-group">
                                    <label>Skype</label>
                                    <input type="text" placeholder="Enter State Name Here.." class="form-control">
                                </div>	
                            </div>
					       <button type="RegButton" class="btn btn-lg btn-info">Регистрация</button>					
					    </div>
                    </form> 
                </div>
            </div>
        </div>
   </div>
</body>
</html>