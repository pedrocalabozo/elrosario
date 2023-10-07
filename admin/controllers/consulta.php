<?php
class Consulta extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
    }



public function descargaconstancia($param = null){
     if($this->model->comprobar_apro_de_descarga_model($param[0]) > 0){
      
     $DATA=$this->model->b_cod_soli($param[0]);
// print_r($DATA[0]);
 $this->view->mensaje = $this->jsonconstancias($DATA[0]->cedula,$DATA[0]->tipo);
   $this->view->render('consulta/index_jpdf');

     }
        


    
}



public function solicitud(){
    $alumnos = $this->view->datos = $this->model->lista_solicitudes();
        $this->view->alumnos = $alumnos;
    $this->view->render('consulta/solicitudes');
}



  function jsonconstancias($cedula,$tipo){

 

 if ($this->model->exist_cedula($cedula) > '0') {
 $alumno_data = $this->model->getById($cedula);


$data[]= array('consulta'=>$this->model->exist_cedula($cedula),'tipo_constan'=>$tipo,'datos'=>$alumno_data,'grado'=>$this->model->estudios($cedula));
//$grad=array();
//$array=array_merge($data,$grad);





return json_encode($data);


    }else{
$array[] = array('consulta'=>$this->model->exist_cedula($cedula));
return json_encode($array);
    }
}


  function listaselect($param = null){
       $grado = $param[0];
        $alumnos = $this->model->b_por_grado($grado);
        $this->view->alumnos = $alumnos;
       



        $this->view->render('consulta/index');
    }
 function lista_cedula(){
       $cedula=$_POST['cedula'];
   
        $alumnos = $this->model->b_por_cedula($cedula);
        $this->view->alumnos = $alumnos;
       



        $this->view->render('consulta/index');
    }


    function render(){
        $alumnos = $this->view->datos = $this->model->get();
        $this->view->alumnos = $alumnos;
       



        $this->view->render('consulta/index');
    }



function estudios($param = null){
$cedula = $param[0];
$nivel_i = $this->view->datos = $this->model->getestudio_grado('i_nivel_inicial',$cedula);
$nivel_ii = $this->view->datos = $this->model->getestudio_grado('ii_nivel_inicial',$cedula);

$grado1ro = $this->view->datos = $this->model->getestudio_grado('1er_grado',$cedula);
$grado2do = $this->view->datos = $this->model->getestudio_grado('2do_grado',$cedula);
 $grado3ro = $this->view->datos = $this->model->getestudio_grado('3er_grado',$cedula);
  $grado4to = $this->view->datos = $this->model->getestudio_grado('4to_grado',$cedula);
   $grado5to = $this->view->datos = $this->model->getestudio_grado('5to_grado',$cedula);
$grado6to = $this->view->datos = $this->model->getestudio_grado('6to_grado',$cedula);


$union_01=array_merge($nivel_i,$nivel_ii);


$union_1=array_merge($grado1ro,$grado2do);
$union_2=array_merge($union_1,$grado3ro);
$union_3=array_merge($union_2,$grado4to);
$union_4=array_merge($union_3,$grado5to);
$union_5=array_merge($union_4,$grado6to);

$union_6=array_merge($union_01,$union_5);


$this->view->alumnos = $union_6;
$this->view->render('consulta/estudios');
    }

//tetorna el grado que estudia el estudiante


 




    function verAlumno($param = null){
        $cedula = $param[0];
        $alumno = $this->model->getById($cedula);

      //  session_start();
        $_SESSION["ci_verAlumno"] = $alumno->cedula;

        $this->view->alumno = $alumno;
        $this->view->render('consulta/detalle');
    }

    function actualizarAlumno(){
        //session_start();

//$CEDULA = $_SESSION["ci_verAlumno"];
$nombre    = $_POST['nombre'];
$apellido  = $_POST['apellido'];
$nacionalidad  = $_POST['nacionalidad'];
$CEDULA = $_POST["cedula"];
$tipocedula    = $_POST['tipocedula'];
$activo  = $_POST['activo'];
$nombre_r  = $_POST['nombre_r'];
$telefono  = $_POST['telefono'];
$id=$_POST['id'];



 if($this->model->update([
    'cedula' => $CEDULA,'nombre' => $nombre,'apellido' => $apellido,'nacionalidad' => $nacionalidad,'tipocedula' => $tipocedula,'activo' => $activo,'nombre_r' => $nombre_r,'telefono' => $telefono,'id' => $id])){
     
    

  $alumno = $this->model->getById($CEDULA);

    

            $alumno = new Alumno();


$alumno = $this->model->getById($CEDULA);
        $this->view->alumno = $alumno;
       

          
            $this->view->mensaje = "Alumno actualizado correctamente";
            //$this->view->render('consulta/detalle');
            echo "<script type='text/javascript'> window.location.href = '".constant('URL')."consulta/verAlumno/".$CEDULA."' </script>";
        }else{
            $this->view->mensaje = "No se pudo actualizar al alumno";


    
       
     
             $this->view->render('consulta/detalle');
        }
     //   $this->view->render('consulta/detalle');
    }



    function eliminarAlumno($param = null){
        $matricula = $param[0];

        if($this->model->delete($matricula)){
            $mensaje ="Alumno eliminado correctamente";
            //$this->view->mensaje = "Alumno eliminado correctamente";
        }else{
            $mensaje = "No se pudo eliminar al alumno";
            //$this->view->mensaje = "No se pudo eliminar al alumno";
        }

        //$this->render();

        echo $mensaje;
    }
function eliminarestudio($param = null){
        $grado = $param[0];
        $id_grado=$param[1];
        $cedula=$param[2];

        if($this->model->deletegrado($grado,$id_grado)){
         //  $mensaje ="Alumno eliminado correctamente";




  echo "<script type='text/javascript'> window.location.href = '".constant('URL')."consulta/estudios/".$cedula."' </script>";
        }else{
            $mensaje = "No se pudo eliminar al alumno";
            //$this->view->mensaje = "No se pudo eliminar al alumno";
        }

        //$this->render();

        echo $mensaje;
    }
    
}





?>


