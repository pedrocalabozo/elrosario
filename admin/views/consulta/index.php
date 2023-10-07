<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'views/head.php'; ?>
</head>
<body>

    <?php require 'views/header.php'; ?>


    <div id="main">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Registros Actuales</h1>

        <table class="table table-bordered" width="100%" id="tabla">
            <thead>
                <tr>
            <th></th>
                    <th>Cedula</th>
                    <th>Nombre</th>
                      <th>Apellido</th>
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
        ?>
                <tr id="">
                    
            <td><i class="fa fa-user-circle-o" aria-hidden="true"></i></td>
                    <td><?php echo $alumno->cedula; ?></td>
                    <td><?php echo $alumno->nombre; ?></td>
                    <td><?php echo $alumno->apellido; ?></td>
                      <td><?php echo $alumno->grado; ?></td>
                    <td><a class="btn btn-primary" href="<?php echo constant('URL') . 'consulta/estudios/' . $alumno->cedula; ?>">Estudios</a></td>
                    <td><a class="btn btn-info" href="<?php echo constant('URL') . 'consulta/verAlumno/' . $alumno->cedula; ?>">Editar</a></td>
                   
                </tr>
        <?php } ?>
            </tbody>
        </table>
    </div>

    <?php require 'views/footer.php'; ?>
    <script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>
</body>
</html>