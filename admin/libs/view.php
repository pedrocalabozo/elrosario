<?php

class View{

    function __construct(){
        //echo "<p>Vista principal</p>";
    }

    function render($nombre){
   


        session_start();
       if($nombre != "login/index" && !isset($_SESSION['Admin'])){
      

       header('location: '.constant('URL')."login");

    }
     require 'views/'.$nombre.'.php';
    

}
}

?>