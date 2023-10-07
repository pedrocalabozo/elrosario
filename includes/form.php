
<style type="text/css">
.border{
border: solid 1px #d7d4d4;
padding: 10px;
border-radius: 10px;
}
</style>
<div class="abs-center" style="min-height: 44vh;background-repeat: round;background-image:url('http://localhost/mvc-alumnos/img/x.jpg')">



   <div class="border  form" style="background: #ffffffbf;">
   <strong> <p style="text-align: justify;">
 Descarga aquí tus constancias estudiantiles en línea, <br>solo tienes que introducir la cédula y seleccionar <br> el tipo de constancia que necesitas
  </p></strong>
       <div class="form-group">
         <label for="email">Cédula</label>
         <input type="number" name="cedula"   id="cedula" class="form-control">
       </div>
       <div class="form-group">
         <label for="password">Tipo de constancia</label>
        
         <select  name="documento" id="tipo_d"  class="form-control">
 
           <option value="estudio">CONSTANCIA DE ESTUDIOS</option>
           <option value="inscripcion">CONSTANCIA DE INSCRIPCIÓN</option>
           <option value="conducta">CONSTANCIA DE BUENA CONDUCTA </option>
         </select>
       </div>
       <button onclick="cargarJson()" class="btn btn-primary">Generar Constancia</button>
    
       <div id="estatus" class="col"></div>
 
</div>
</div>


 
 </div>
 
<div class="container">
<?php include 'includes/contenido_acercade.php'; ?>
</div>
