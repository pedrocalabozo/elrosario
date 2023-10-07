<?php

class Nuevo extends Controller{


    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
        
    }

     function aprobar_soli($param = null){
     $id=$param[0];
if($this->model->aprobar_soli_model($id)){


   
}

     }

function aceptar_soli($param = null){
       $cedula=$param[0];
       $constancia=$param[1];
       $pagomovil=$param[2];
       $email=$param[3];
          // $this->view->mensaje="Alumno ".$nombre." Registrado";
if ($this->model->exist_cedula($cedula)>0){
if ($this->model->exist_solicitud($cedula,$constancia)=='0') {
 if($this->model->solicitud(['cedula' => $cedula, 'constancia' =>$constancia,'pagomovil'=>$pagomovil,'email'=>$email])){

   
echo json_encode(['status'=>'datos guardados']);
 }else{
echo json_encode(['status'=>'error de db']);
 }

}else{
    echo json_encode(['status'=>'ya tienes una solicitud pendiente']);
   
}

}else{

   echo json_encode(['status'=>'Esta cedula no pertenece al instituto'.$param[0].' '.$this->model->exist_cedula($cedula)]); 
}


    }



    function render(){
     
        $this->view->render('nuevo/index');
    }


     function alumnoRegistrado($param = null){
       $nombre=$param[0];
          $this->view->mensaje="Alumno ".$nombre." Registrado";
        $this->view->render('nuevo/index');
    }

    function crear(){
    
       
        $cedula = $_POST['cedula'];
      

if ($this->model->exist_cedula($cedula)=='0') {
    # code...
        $nombre    = $_POST['nombre'];
        $apellido  = $_POST['apellido'];
    
        $nacionalidad=$_POST['nacionalidad'];
        $tipocedula=$_POST['tipocedula'];
        $nombre_reprecentante=$_POST['nombre_r'];
        $telefono=$_POST['telefono_r'];
        $activo=$_POST['activo'];



      if($this->model->insert(['nombre' => $nombre, 
        'apellido' =>$apellido,
        'cedula'=>$cedula,
        'nacionalidad'=>$nacionalidad,
        'tipocedula'=>$tipocedula,
        'activo'=>$activo,
         'nombre_reprecentante'=>$nombre_reprecentante,
        'telefono'=>$telefono
    ])){

              
 echo "<script type='text/javascript'> window.location.href = '".constant('URL')."nuevo/alumnoRegistrado/ ".$nombre."'; </script>";
          
            $this->view->mensaje ="Alumno creado correctamente";
            $this->view->render('nuevo/index');

        

            
        }else{
            $this->view->mensaje = "error";
            $this->view->render('nuevo/index');
        }


}else{


$this->view->mensaje = "La matrícula ya está registrada";
            $this->view->render('nuevo/index');


}
    }



function gnuev_a_escolar(){

   
$cedula = $_POST['cedula'];
      



        $ano   = $_POST['a_escolar'];
        $grado  = $_POST['grado'];
    

      

if ($this->model->data_estudio(['cedula'=>$cedula,'grado'=>$grado,'ano'=>$ano])){

$this->view->mensaje ="nuevo año creado correctamente";
        
        
 echo "<script type='text/javascript'> window.location.href = '".constant('URL')."consulta/estudios/".$cedula."' </script>";

}else{
       $this->view->mensaje = "error444";
            $this->view->render('nuevo/anadir-nuev-an');
}
          

    
        
}




}

?>