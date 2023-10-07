<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'views/head.php'; ?>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="main">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Actualizar <?php echo $this->alumno->cedula; ?></h1>

        <form action="<?php echo constant('URL'); ?>consulta/actualizarAlumno/" method="POST">
          
<!--







-->
      <label for="">Nombre</label><br>
            <input type="text" value="<?php echo $this->alumno->nombre; ?>" name="nombre" id=""><br>
            <label for="">Apellido</label><br>
            <input type="text" value="<?php echo $this->alumno->apellido; ?>" name="apellido" id=""><br>
 <label for="">Cedula</label>
 <br>
             <select name="nacionalidad" id="nacionalidad">
                 <option value="<?php echo $this->alumno->nacionalidad; ?>"><?php echo $this->alumno->nacionalidad; ?></option>
                 <option value="V">V</option>
                 <option value="E">E</option>
             </select>
             <input type="number" value="<?php echo $this->alumno->cedula; ?>" name="cedula" id=""> 
             <select name="tipocedula" id="nacionalidad">
                  <option value="<?php echo $this->alumno->tipo_ci; ?>"><?php echo $this->alumno->tipo_ci; ?></option>
                 <option value="C.I">C.I</option>
                 <option value="C.E">C.E</option>
             </select>
             <br> <br> <br>
              <label for="">Estudia Actualmente en el colegio</label>
           <select name="activo" id="activo">
            <option value="<?php echo $this->alumno->activo; ?>"><?php echo $this->alumno->activo; ?></option>
                 <option value="si">SI</option>
                 <option value="no">NO</option>
             </select>

<BR><br>
     <label for="">Nombre de Reprecentante</label><br>
            <input type="text" value="<?php echo $this->alumno->reprecentante; ?>" name="nombre_r" id=""><br>
            <label for="">Telefono</label><br>
            <input type="number" value="<?php echo $this->alumno->telefono; ?>" name="telefono" id=""><br>
<BR>
 <input style="display: none;" type="text" value="<?php echo $this->alumno->id; ?>" name="id" id=""
<BR>
            <input type="submit" value="Editar datos de alumno">
















        </form>
    </div>

    <?php require 'views/footer.php'; ?>
    
</body>
</html>