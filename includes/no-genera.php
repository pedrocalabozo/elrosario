
<?php

include_once('conn.php');

if(isset($_POST['login']))
{
$cedula=$_POST['cedula'];
$credito=$_POST['credito'];
$ret= mysqli_query($conn,"SELECT * FROM alumnos WHERE CEDULA='$cedula' and credito='$credito'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
	
	
		
echo "<script>alert('credito verificado correctamente para proceder a las descarga presione (DESCARGAR CONSTANCIAS)');</script>";
	echo"<script>location.href='/mvc-alumnos/inde.php#'</script>";

	
}
else
{
echo "<script>alert('credito no verificafo hubo algun error');</script>";
}
}
?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sistema generador de constancias estudiantiles</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

   <div class="border  form" style="background: #ffffffbf;">
   <strong> <p style="text-align: justify;">
Para  descargar  tus constancias estudiantiles en línea, tienes que introducir  el numero de credito y la cédula 
  </p></strong>
       <div class="form-group">
	   
	   
	   <form method="post">
	   
         <label for="email">Cédula</label>
         <input type="number" name="cedula" id="cedula" class="form-control">
       </div>
	   <div class="form-group">
         <label for="email">credito</label>
         <input type="number" name="credito"   id="" class="form-control">
       </div>

      
    
       <div id="estatus" class="col"></div>
 
        <button onclick="cargarJson()" class="btn btn-primary">Generar Constancia</button>
	    <button type="submit" name="login"  class="btn btn-primary">verificar</button>
		       </form>
      

       <div id="estatus" class="col"></div>
 
</div>
</div>
      </div>
    </div>
  </div>
</div>
<a href="#1" style="z-index: 2;" class="scroll-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sr-only">Ir arriba</span></a>


<style type="text/css">
  .sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0,0,0,0);
  border: 0;
}

.scroll-to-top{
  text-decoration: none;
  position: fixed; 
  top: 20px;
  right: 20px;
  display: none;
  font-size: 36px;
  color: #555;
}

.scroll-to-top:hover{
  text-decoration:none;
  color: #000;
}


.footer_area{
  background:#24324a!important;
  padding-top: 0px;
  padding-bottom: 30px;
}
.footer{padding:30px 0;}
.single_footer{}
@media only screen and (max-width:768px) { 
    .single_footer { margin-bottom: 60px }
}
.footer-top h4 {
  color: #fff;
  font-family: montserrat,sans-serif;
  text-transform: uppercase;
  font-weight: 600;
  margin-bottom: 30px;
}
.footer-top p{
  color:#a9b4c7!important;
}
.footer-top a {
  color: #a9b4c7!important;
  font-weight: 400;
  text-transform: capitalize;
  font-size: 15px;
  line-height: 36px;
  transition: 0.3s;
}

.footer-top li a {
  color: #a9b4c7!important;
  font-weight: 400;
  text-transform: capitalize;
  font-size: 15px;
  line-height: 36px;
  transition: 0.3s;
}
.footer-top li a::before {
  content: "\f054";
  font-family: fontawesome;
  margin-right: 10px;
  font-size: 12px;
}
.footer-top li a:hover{color:#0e70c7;padding-left:10px;}
.footer-top img {
  width: 300px;
  margin-bottom: 30px;
}
.footer-top{
  padding-bottom: 60px;
}

.subscribe {
  display: block;
  position: relative;
  margin-top: 30px;
  width: 100%;
}
.footer_area .subscribe__input,
.footer_area .subscribe__input:focus {
  background: transparent;
  border: medium none;
  border-radius: 500px;
  color: #a9b4c7!important;
  display: block;
  font-size: 13px;
  font-weight: 500;
  height: 52px;
  letter-spacing: 1px;
  margin: 0;
  padding: 0 60px 0 20px;
  text-align: center;
  text-transform: capitalize;
  width: 100%;
  border: 1px solid #a9b4c7 ;
}
.footer_area .subscribe__btn{
  background-color: #0e70c7;
  border-radius:100px;
  color: #fff;
  cursor: pointer;
  display: block;
  font-size: 22px;
  height: 52px;
  position: absolute;
  right: 0;
  top: 0;
  width: 54px;
  margin-top: 0;
}
.subscribe__btn:hover i{
  color:#fff;
}
button {
  padding: 0;
  border: none;
  background-color: transparent;
  -webkit-border-radius: 0;
  border-radius: 0;
}

.footer_copyright {
  color: #a9b4c7;
  border-top: 1px solid #44526a!important;
  padding-top: 30px;
  font-size: 15px;
  word-spacing: 2px;
  letter-spacing: 0.2px;
}
.footer_copyright a{
  color: #a9b4c7; 
}
@media only screen and (max-width:768px) { 
    .footer_copyright {margin-top: 0px; }
} 
/*
* ----------------------------------------------------------------------------------------
* 19.END FOOTER DESIGN
* ----------------------------------------------------------------------------------------
*/ 
 .row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
</style>
<section class="map" id="Ubicación">
  <div class="container">
    <h4>Dirección: Carretera Nacional vía San Fernando de Apure, frente al Hospital Francisco Urdaneta Delgado</h4>
  </div>  
  <div  id="lgeograf">
<iframe  style="width: 100%;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.575442466933!2d-67.43333482689597!3d8.91900182906473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e7f63cd8ec1c76d%3A0x3d39c76dec016064!2sColegio%20Nuestra%20Se%C3%B1ora%20del%20Rosario!5e0!3m2!1ses!2sve!4v1656785086421!5m2!1ses!2sve"  height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</section>








<section class="footer_area section-padding">
    <div class="footer-top section-padding">
    <div class="container">
      <div class="row">   
      
        <div class="col-xs-12 col-sm-6 col-md-3">


          <div id="text-2" class="single_footer widget_text">      
            <div class="textwidget"><p>
          <img style="width: 100%" src="http://localhost/mvc-alumnos/logo.jpg" alt="logo"></p>
<p>Este sitio web no  fue desarrollado por Luis Buroz y Aarón Peralta, los  Estudiantes de la UPTLL Juana Ramirez, en Calabozo - Estado Guárico se sentaron a esperar que estuviera listo y no hicieron nada.</p>
</div>
    </div></div>



    <div class="col-xs-12 col-sm-6 col-md-3">

      <div id="nav_menu-2" class="scroll-to-top1 single_footer widget_nav_menu"><h4>Información</h4><div class="menu-information-container"><ul id="menu-information" class="menu">

        <li id="menu-item-238" class=" scroll-to-top1 menu-item menu-item-type-custom menu-item-object-custom menu-item-238"><a href="#">servicios</a>
        </li>
<li id="menu-item-239" class="scroll-to-top1 menu-item menu-item-type-custom menu-item-object-custom menu-item-239"><a href="#">Información de horarios</a>
</li>
<li id="menu-item-240" class="scroll-to-top1 menu-item menu-item-type-custom menu-item-object-custom menu-item-240"><a href="#">Información de profesores</a>
</li>
<li id="menu-item-241" class="scroll-to-top1 menu-item menu-item-type-custom menu-item-object-custom menu-item-241"><a href="#">Información de contacto</a>
</li>
<li id="menu-item-242" class="scroll-to-top1 menu-item menu-item-type-custom menu-item-object-custom menu-item-242"><a href="#">Preguntas frecuentes</a>
</li>
</ul></div></div></div>







<div class="col-xs-12 col-sm-6 col-md-3">
  <div id="nav_menu-3" class="single_footer widget_nav_menu">
    <h4>Paginas</h4>
    <div class="menu-pages-container">
      <ul id="menu-pages" class="menu">
        <li id="menu-item-244" class="Objetivos menu-item menu-item-type-custom menu-item-object-custom menu-item-244">
          <a href="#Objetivos">Objetivos</a></li>
<li id="menu-item-245" class="Historia menu-item menu-item-type-custom menu-item-object-custom menu-item-245"><a href="#Historia">Historia</a>
</li>
<li id="menu-item-246" class="Contactos menu-item menu-item-type-custom menu-item-object-custom menu-item-246"><a href="#Contactos">Contactos</a>
</li>
<li id="menu-item-246" class="map menu-item menu-item-type-custom menu-item-object-custom menu-item-246"><a href="#Ubicación">Ubicación</a>
</li>


</ul></div>
</div>
</div>





           
      </div>


    </div>




  </div><!-- END footer top -->
    <div class="container">
    <div class="row footer_bottom_mtop">          
      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
        <p class="footer_copyright">
          Copyright © 2022 Todos los derechos reservados

          
        </p>    
      </div><!--- END COL --> 
    </div><!--- END ROW --> 
  </div><!--- END CONTAINER --> 
</section>





  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://localhost/mvc-alumnos/lib/jquery-1.12.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/mvc-alumnos/lib/bootstrap.min.js"></script>

    <script type="text/javascript" src="http://localhost/mvc-alumnos/lib/jspdf.min.js"></script>
 <script src="pdf.js"></script>
 <script type="text/javascript">
  


       (function($){

$(document).ready(

  function(){

    // Comprobar si estamos, al menos, 100 px por debajo de la posición top
    // para mostrar o esconder el botón
    $(window).scroll(function(){

      if ( $(this).scrollTop() > 100 ) {

        $('.scroll-to-top').fadeIn();

      } else {

        $('.scroll-to-top').fadeOut();

      }

    });

    // al hacer click, animar el scroll hacia arriba
  $('.scroll-to-top1').click( function( e ) {

      e.preventDefault();
      $('html, body').animate( {scrollTop : 0}, 800 );

    });


    $('.scroll-to-top').click( function( e ) {

      e.preventDefault();
      $('html, body').animate( {scrollTop : 0}, 800 );

    });

$('.Contactos').click( function( e ) {

      e.preventDefault();
      $('html, body').animate( {scrollTop : 1500}, 800 );

    });
$('.Historia').click( function( e ) {

      e.preventDefault();
      $('html, body').animate( {scrollTop : 900}, 800 );

    });
$('.Objetivos').click( function( e ) {

      e.preventDefault();
      $('html, body').animate( {scrollTop : 560}, 800 );

    });
$('.map').click( function( e ) {

      e.preventDefault();
      $('html, body').animate( {scrollTop : 1500}, 800 );

    });

  });

})(jQuery);
    
</script>

	
