


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
  <div><?php //echo  $x=$this->mensaje; ?></div>


  <?php



  ?>
<div id="estatus">nn</div>

    



   







<script type="text/javascript" src="<?php echo constant('URL'); ?>public/jspdf.min.js"></script>
 <script src="<?php echo constant('URL'); ?>public/pdf.js"></script>
<script type="text/javascript">
  var array=<?php echo  $x=$this->mensaje; ?>

console.log(array[0].tipo_constan)
console.log(array[0].datos.cedula)

jsonCargado(array,array[0].tipo_constan,'<?php echo constant('URL'); ?>');
</script>
</body>
</html>