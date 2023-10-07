<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'views/head.php'; ?>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="main">
        <div><?php echo $this->mensaje; ?></div>
        <h4 class="center">Sección de estudios de <i><u><?php echo $this->alumnos[0]->nombre." ".$this->alumnos[0]->apellido;
   ?></u></i></h4>

<hr>

        <table class="table-striped table" width="100%" id="tabla">
            <thead>
                <tr>
                       <th>Id</th>
                
                    <th>GRADO</th>
                    <th>AÑO</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody id="tbody-alumnos">
            
        <?php
            include_once 'models/alumno.php';

$x="";
  foreach ($this->alumnos as $row) {
 $alumno = new Alumno();
 $alumno = $row;
 if ($alumno->id!='x') {
  $x=$alumno->grado."<hr>";
 }




     }
     echo $x;
            foreach ($this->alumnos as $row) {
                $alumno = new Alumno();
                $alumno = $row;
        ?> 

  <tr id="">

        <?php
            if ($alumno->id =='x') {
               ?>
              <form action="<?php echo constant('URL'); ?>nuevo/gnuev_a_escolar" method="POST">

                    <td>  
                     <input style="display: none;"  type="text" name="cedula" value="<?php echo $this->alumnos[0]->cedula;?>"/>
                   </td>
                    
                 
                    <td>
                       <?php echo $alumno->grado; ?> <input style="display: none;" type="text" name="grado" value="<?php echo $alumno->grado; ?>"/>
                    </td>
                    <td>


 <select name="a_escolar" class="form-control">
     <option> </option>
            <?php for ($i=2022; $i >= 1932; $i--) { ?>

             <option value=" <?php echo $i; ?>"> <?php echo $i; ?></option>
               <?php
                } ?>
              
               
             
          
           </select>








                    </td>
           
            
                    <td>  <input class="btn btn-success" type="submit" value="Crear nuevo año"></td>


</form>
               <?php
}else{ 


    ?>



    <td><?php echo $alumno->id; ?></td>
    
 
    <td><?php echo $alumno->grado; ?></td>
    <td><?php echo $alumno->anno; ?></td>

   <td><a class="btn btn-danger" href="<?php echo constant('URL') . 'consulta/eliminarestudio/'.$alumno->grado.'/'.$alumno->id."/".$alumno->cedula ?>">Eliminar</a></td>



    
<?php 


 }

?>
</tr>     

<?php } ?>
</tbody>
</table>
</div>

<?php require 'views/footer.php'; ?>
<script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>
</body>
</html>