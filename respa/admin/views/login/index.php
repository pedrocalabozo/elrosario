<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'views/head.php'; ?>
</head>
<body>

    <?php //require 'views/header.php'; ?>
     <div id="main">
<div class="container" style="padding-top: 50px;">
   
      <div class="row">
        
        <div class="col-md-5 card my-4">
          <h3 style="text-align:center;">
 <img src="<?php echo constant('URL')?>public/logo.jpg">
         </h3>   
 <h3 style="text-align:center;">
  Sistema administrativo </h3>



          <div class='card-body'>

            <form action='<?php echo constant('URL').
            'login/validate'?>' method='post'>
              <div class="form-group">
                <input type="text" name="userLogin" 
                placeholder="Admin User" 
                class="form-control" required><br>
                
                <input type="password" name="passLogin" 
                placeholder="Password" 
                class="form-control" required><br>
                
                <input type="submit" name='sendLogin' 
                value="Entrar"
                class="btn btn-primary btn-block">
              </div>
            </form>
          

    <div><?php echo $this->mensaje; ?></div>
          
          </div>
        </div>
        
      </div>
    </div></div>
</body>
</html>