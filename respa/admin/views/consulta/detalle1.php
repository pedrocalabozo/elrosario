<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'views/head.php'; ?>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="main">
            
		
    <div id="main">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Agregar credito <?php echo $this->alumno->cedula; ?></h1>

       

        <form action="<?php echo constant('URL'); ?>consulta/actualizarAlumno/" method="POST">
          
		  
		  <label for="">Nombre</label><br>
		  
		  
                <select  class="form-control form-control-sm rounded-0" name="nombre" id="" required>
             
                 
           <option value="<?php echo $this->alumno->nombre; ?>"><?php echo $this->alumno->nombre; ?></option>
                </select>
          
			 <label for="">Apellido</label><br>
                <select  class="form-control form-control-sm rounded-0" name="apellido" id="" required>
             
           <option value="<?php echo $this->alumno->apellido; ?>"><?php echo $this->alumno->apellido; ?></option>
		   
                </select>
				
            
 <label for="">Cedula</label>
 <br>
             <select name="nacionalidad" id="nacionalidad">
                 <option value="<?php echo $this->alumno->nacionalidad; ?>"><?php echo $this->alumno->nacionalidad; ?></option>
           
             </select>
			 
			 
			 
                <select  name="cedula" id="" required>
             
           <option value="<?php echo $this->alumno->cedula; ?>"><?php echo $this->alumno->cedula; ?></option>
		   
                </select>
		  
			
                <select  name="tipocedula" id="nacionalidad" required>
             
           <option value="<?php echo $this->alumno->tipo_ci; ?>"><?php echo $this->alumno->tipo_ci; ?></option>
		   
                </select>
		  

             <br> <br> <br>
              <label for="">Estudia Actualmente en el colegio</label>
           <select name="activo" id="activo">
            <option value="<?php echo $this->alumno->activo; ?>"><?php echo $this->alumno->activo; ?></option>
                
             </select>

<BR><br>
	 <label for="">nombre del representante</label><br>
                <select  class="form-control form-control-sm rounded-0" name="nombre_r" id="" required>
             
           <option value="<?php echo $this->alumno->reprecentante; ?>"><?php echo $this->alumno->reprecentante; ?></option>
		   
                </select>
				   
				   
			 <label for="">telefono</label><br>
                <select  class="form-control form-control-sm rounded-0" name="telefono" id="" required>
             
           <option value="<?php echo $this->alumno->telefono; ?>"><?php echo $this->alumno->telefono; ?></option>
		   
                </select>
				   
				   

                                </div>
		           
				   
		
     
          

     
<BR>
 <input style="display: none;" type="text" value="<?php echo $this->alumno->id; ?>" name="id" id=""
<BR>





     
        


     <label for="">agregar credito</label><br>
           
            <input type="number" value="<?php echo $this->alumno->telefono1; ?>" name="telefono1" id=""><br>
<BR>
 <input style="display: none;" type="text" value="<?php echo $this->alumno->id; ?>" name="id" id=""
<BR>
            <input type="submit" value=" agregar credito del alumno">
















        </form>
    </div>

    <?php require 'views/footer.php'; ?>
    
</body>
</html>