
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'views/head.php'; ?>
</head>
<body>

    <?php require 'views/header.php'; ?>


    <div id="main">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Solicitudes de Constamcias</h1>


 



        <table class="table table-bordered" width="100%" id="tabla">
            <thead>
                <tr>
            <th></th>
                    <th>Cedula</th>
                    <th>Constancia</th>
                      <th>Pago</th>
                    <th>Grado</th>

                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody id="tbody-alumnos">
            
        <?php


            include_once 'models/alumno.php';
            foreach ($this->alumnos as $row) {
                $alumno = new Alumno();
                $alumno = $row;
                $stado = ($alumno->estado=='0') ? "No Aprovado" :"Aprovado" ;
                   
        ?>
                <tr id="">
                    <?php echo $alumno->estado; ?>
            <td><i class="fa fa-user-circle-o" aria-hidden="true"></i></td>
                    <td><?php echo $alumno->cedula; ?></td>
                    <td><?php echo $alumno->constancia; ?></td>
                    <td><?php echo $alumno->pagomovil; ?></td>
                      <td><?php echo $stado; ?></td>


                    <td>

<?php  if ($stado== "No Aprovado") {
	?>
	<a class="btn btn-primary" href="<?php echo constant('URL') . 'nuevo/aprobar_soli/' . $alumno->id; ?>">Aprovar</a>


	<?php

	// code...
}else{ ?>

    <a class="btn btn-primary" href="<?php echo constant('URL') . '/consulta/descargaconstancia/' . $alumno->codigo; ?>/<?php echo $alumno->cedula; ?>">Descargar pdf</a>
<?php }  ?>
                    	



                    </td>
                    <td><a class="btn btn-info" href="<?php echo constant('URL') . 'consulta/verAlumno/' . $alumno->cedula; ?>">Eliminar</a></td>
                   
                </tr>
        <?php } ?>
            </tbody>
        </table>
    </div>

    <?php require 'views/footer.php'; ?>
    <script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>
</body>
</html>