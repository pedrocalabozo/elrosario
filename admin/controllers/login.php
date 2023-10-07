<?php

class 	Login extends Controller{

    function __construct(){
        parent::__construct();
        
    }

function render(){
   $this->view->mensaje = "";
        $this->view->render('login/index');
    }


public function validate(){
    $user= $_POST['userLogin'];
    $pass= $_POST['passLogin'];
echo $user;
echo $pass;
    $this->verifyAdmin($user, $pass);
  }
  

     function verifyAdmin($user, $pass){
   $this->view->mensaje = "";

      
      if($user==constant('admin') && $pass==constant('pass')){
        session_start();
        $_SESSION["Admin"] = $user;
        header('location: '.constant('URL'));
        
      } else { 
 $this->view->mensaje = "Usuario o Clave Invalido";
        $this->view->render('login/index');
      }
      


    }
  
}
?>