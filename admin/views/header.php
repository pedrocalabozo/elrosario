<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class=""  href="#">
<img style="width: 33px;" src="<?php echo constant('URL'); ?>public/logo.jpg">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo constant('URL'); ?>index">Inicio <span class="sr-only">(current)</span></a></li>

        <li><a href="<?php echo constant('URL'); ?>nuevo">Nuevo Registro</a></li>

 <li><a href="<?php echo constant('URL'); ?>consulta">Registros</a></li>

 <li><a href="<?php echo constant('URL'); ?>consulta/solicitud">Solicitudes</a></li>
      </ul>
      <form action="<?php echo constant('URL'); ?>consulta/lista_cedula/" method="POST" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="cedula" class="form-control" placeholder="Cedula">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo constant('URL'); ?>salir">Salir</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div style="text-align:center">
<a class="btn btn-warning" href="<?php echo constant('URL'); ?>consulta/listaselect/i_nivel_inicial">I Nivel</a>
<a class="btn btn-info" href="<?php echo constant('URL'); ?>consulta/listaselect/ii_nivel_inicial">II Nivel</a>
<a class="btn btn-danger" href="<?php echo constant('URL'); ?>consulta/listaselect/1mer_grado">1er grado</a>
<a class="btn " style="background: #4e504e;color: #fff" href="<?php echo constant('URL'); ?>consulta/listaselect/2do_grado">2do grado</a>
<a class="btn btn-warning" href="<?php echo constant('URL'); ?>consulta/listaselect/3er_grado">3er grado</a>
<a class="btn btn-info" href="<?php echo constant('URL'); ?>consulta/listaselect/4to_grado">4to grado</a>
<a class="btn" style="background: #ffc905;" href="<?php echo constant('URL'); ?>consulta/listaselect/5to_grado">5to grado</a>
<a class="btn btn-success" href="<?php echo constant('URL'); ?>consulta/listaselect/6to_grado">6to grado</a>
</div>
  <script src="https://use.fontawesome.com/7248becb43.js"></script>  
<!---
<div id="header">
<ul>
	  <script src="https://use.fontawesome.com/7248becb43.js"></script>  
    <li><a href="<?php echo constant('URL'); ?>index">Inicio</a></li>
    <li><a href="<?php echo constant('URL'); ?>nuevo">Nuevo Registro</a></li>

    <li><a href="<?php echo constant('URL'); ?>consulta">Consulta</a></li>
    <li><a href="<?php echo constant('URL'); ?>salir">Salir</a></li>
</ul>

</div>    

-->