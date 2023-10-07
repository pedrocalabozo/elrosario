<!DOCTYPE html>
<html lang="en">
<head>

    <?php  
    require_once 'includes/HEAD.PHP';
    ?>
  
 
    <title>Colegio Rosario Calabozo</title>
  

</head>
<body>
<?php
require_once 'includes/header.php';
?>

<div class="container">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block" style="width:100%" src="img/fondo2.jpg" alt="First slide">
       <div class="carousel-caption ">
      <h1>Bienvenidos al Sitio web del Colegio Rosario</h1>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block" style="width:100%" src="img/fondo3.jpg" alt="Second slide">
        <div class="carousel-caption">
    
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block" style="width:100%" src="img/fondo4.jpg" alt="Third slide">
       <div class="carousel-caption ">
    
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block" style="width:100%" src="img/fondo5.jpg" alt="Third slide">
       <div class="carousel-caption ">

    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>



<div class="container">
<?php include 'includes/contenido_acercade.php'; ?>
</div>




<?php require_once 'includes/contenido_contacto.php'; ?>


<?php require_once 'includes/footer.php'; ?>
  

   

</body>





</html>