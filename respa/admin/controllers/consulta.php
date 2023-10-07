<?php
class Consulta extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
    }


  function jsonconstancias($param = null){

 $cedula = $param[0];
 if ($this->model->exist_cedula($cedula) > '0') {
 $alumno_data = $this->model->getById($cedula);


$data[]= array('consulta'=>$this->model->exist_cedula($cedula),'datos'=>$alumno_data,'grado'=>$this->model->estudios($cedula));
//$grad=array();
//$array=array_merge($data,$grad);





echo json_encode($data);


    }else{
$array[] = array('consulta'=>$this->model->exist_cedula($cedula));
echo json_encode($array);
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

$grado1 = $this->view->datos = $this->model->getestudio_grado('1er_grado',$cedula);
$grado2 = $this->view->datos = $this->model->getestudio_grado('2do_grado',$cedula);
 $grado3 = $this->view->datos = $this->model->getestudio_grado('3er_grado',$cedula);
  $grado4 = $this->view->datos = $this->model->getestudio_grado('4to_grado',$cedula);
   $grado5 = $this->view->datos = $this->model->getestudio_grado('5to_grado',$cedula);
$grado6 = $this->view->datos = $this->model->getestudio_grado('6to_grado',$cedula);




$grado7 = $this->view->datos = $this->model->getestudio_grado('1er_ano',$cedula);
$grado8 = $this->view->datos = $this->model->getestudio_grado('2do_ano',$cedula);
 $grado9 = $this->view->datos = $this->model->getestudio_grado('3er_ano',$cedula);
  $grado10 = $this->view->datos = $this->model->getestudio_grado('4to_ano',$cedula);
   $grado11 = $this->view->datos = $this->model->getestudio_grado('5to_ano',$cedula);
$grado12= $this->view->datos = $this->model->getestudio_grado('6to_anow',$cedula);



$union_01=array_merge($nivel_i,$nivel_ii);
$union_1=array_merge($grado1,$grado2);
$union_2=array_merge($union_1,$grado3);
$union_3=array_merge($union_2,$grado4);
$union_4=array_merge($union_3,$grado5);
$union_5=array_merge($union_4,$grado6);

$union_6=array_merge($union_5,$grado7);
$union_7=array_merge($union_6,$grado8);
$union_8=array_merge($union_7,$grado9);
$union_9=array_merge($union_8,$grado10);
$union_10=array_merge($union_9,$grado11);
$union_11=array_merge($union_10,$grado12);
$union_12=array_merge($union_01,$union_11);


$this->view->alumnos = $union_12;
$this->view->render('consulta/estudios');
    }

//tetorna el grado que estudia el estudiante

//
 
    function verAlumno1($param = null){
        $cedula = $param[0];
        $alumno = $this->model->getById($cedula);

      //  session_start();
        $_SESSION["ci_verAlumno"] = $alumno->cedula;

        $this->view->alumno = $alumno;
        $this->view->render('consulta/detalle1');
    }


//


//


    function actualizarAlumno1(){
        //session_start();

//$CEDULA = $_SESSION["ci_verAlumno"];

$telefono1  = $_POST['telefono1'];




 if($this->model->update1([
    'credito'=> $telefono1,'id' => $id])){
     
    

  $alumno = $this->model->getById($CEDULA);

    

            $alumno = new Alumno();


$alumno = $this->model->getById($CEDULA);
        $this->view->alumno = $alumno;
       

          
            $this->view->mensaje = "credito de Alumno actualizado correctamente";
            //$this->view->render('consulta/detalle');
            echo "<script type='text/javascript'> window.location.href = '".constant('URL')."consulta/verAlumno/".$CEDULA."' </script>";
        }else{
            $this->view->mensaje = "No se pudo actualizar al credito alumno";


    
       
     
             $this->view->render('consulta/detalle1');
        }
     //   $this->view->render('consulta/detalle');
    }





//

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
$telefono1  = $_POST['telefono1'];
$id=$_POST['id'];



 if($this->model->update([
    'cedula' => $CEDULA,'nombre' => $nombre,'apellido' => $apellido,'nacionalidad' => $nacionalidad,'tipocedula' => $tipocedula,'activo' => $activo,'nombre_r' => $nombre_r,'telefono1' => $telefono1,'telefono' => $telefono,'id' => $id])){
     
    

  $alumno = $this->model->getById($CEDULA);

    

            $alumno = new Alumno();


$alumno = $this->model->getById($CEDULA);
        $this->view->alumno = $alumno;
       

          
            $this->view->mensaje = "Alumno actualizado correctamente";
            //$this->view->render('consulta/detalle');
          
			echo "<script>alert('proceso realizado correctamente');</script>";
			  echo "<script type='text/javascript'> window.location.href = '".constant('URL')."consulta/verAlumno/".$CEDULA."' </script>";
        }else{
            $this->view->mensaje = "No se pudo actualizar al alumno";

echo "<script>alert(' hubo algun error en el proceso');</script>";
    
       
     
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


