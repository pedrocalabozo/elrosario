<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'views/head.php'; ?>
</head>
<body>

    <?php require 'views/header.php'; ?>

   

    <div id="main">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Registrar Nuevo Alumno</h1>

        <form style="border: 1px solid red; padding: 15px; border-radius: 10px;" class="form-inline" action="<?php echo constant('URL'); ?>nuevo/crear" method="POST">

     <div class="form-group">

            <label for="">Nombre</label><br>
            <input required  class="form-control" type="text" name="nombre" id=""><br>

</div>
<br>
  <div class="form-group">
            <label for="">Apellido</label><br>
            <input required  class="form-control" type="text" name="apellido" id="">
        </div>
<br><br>

         <div class="form-group">
 <label for="">Cedula</label>
 


 

             <select  class="form-control" name="nacionalidad" id="nacionalidad">
                 <option value="V">V</option>
                 <option value="E">E</option>
             </select>
             <input required  class="form-control" type="number" name="cedula" id=""> 
         </div>



           <div class="form-group">
             <select  class="form-control" name="tipocedula" id="nacionalidad">
                 <option value="C.I">C.I</option>
                 <option value="C.E">C.E</option>
             </select>
             </div>
           
<br>

     <div class="form-group">


        
              <label for="">Estudia Actualmente</label>
           <select class="form-control" name="activo" id="activo">
                 <option value="si">SI</option>
                 <option value="no">NO</option>
             </select></div>
             <br>

<BR><br>

     <div class="form-group">

     <label for="">Nombre de Representante</label><br>
            <input required class="form-control" type="text" name="nombre_r" id="">
        </div>
        <br>
             <div class="form-group">
            <label for="">Telefono</label><br>
            <input class="form-control" type="text" name="telefono_r" id=""><br>
        </div>
<BR>
<BR>
            <input class="btn btn-success" type="submit" value="Crear nuevo alumno">
        
        </form>
    </div>

    <?php require 'views/footer.php'; ?>
    
</body>
</html>