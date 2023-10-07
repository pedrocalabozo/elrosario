<?php

require 'models/alumno.php';

class ConsultaModel extends Model{

    public function __construct(){
        parent::__construct();
    }









public function b_cod_soli($cod){

 $items = [];
        try{


          $query = $this->db->connect()->prepare('SELECT * FROM solicitud_constancia WHERE COD = :cd');

$query->execute(['cd' => $cod]);

            
            while($row = $query->fetch()){

    

                $item = new Alumno();
              //  $item->matricula = $row['matricula'];
                $item->tipo    = $row['TIPO'];
                  $item->estado    = $row['ESTADO'];
              $item->cedula    = $row['CEDULA'];
                array_push($items, $item);
            
          }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }






public function comprobar_apro_de_descarga_model($item){

 $query = $this->db->connect()->prepare('SELECT * FROM solicitud_constancia WHERE COD = :cd');
$query->execute(['cd' => $item]);           
$rows = $query->fetchAll();
$num_rows = count($rows);
return $num_rows;



}

     public function exist_cedula($cedula){
 $query = $this->db->connect()->prepare('SELECT * FROM alumnos WHERE CEDULA = :ci');
$query->execute(['ci' => $cedula]);           
$rows = $query->fetchAll();
$num_rows = count($rows);
return $num_rows;


    } 

 public function lista_solicitudes(){
        $items = [];
        try{

            $query = $this->db->connect()->query('SELECT * FROM solicitud_constancia');
            
            while($row = $query->fetch()){
                $item = new Alumno();
              //  $item->matricula = $row['matricula'];
                $item->cedula    = $row['CEDULA'];
                $item->constancia  = $row['TIPO'];
                $item->pagomovil  = $row['PAGOMOVIL'];
                  $item->fecha  = $row['FECHA'];
                  $item->estado  = $row['ESTADO'];
                  $item->id  = $row['id'];
                  $item->codigo  = $row['COD'];
 
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }









    public function get(){
        $items = [];
        try{

/*SELECT * FROM alumnos
            INNER JOIN categorias ON
             categorias.ID_NOTICIA = notices.ID'
*/


            $query = $this->db->connect()->query('SELECT * FROM alumnos');
            
            while($row = $query->fetch()){
                $item = new Alumno();
              //  $item->matricula = $row['matricula'];
                $item->nombre    = $row['NOMBRES'];
                $item->apellido  = $row['APELLIDOS'];
                $item->cedula  = $row['CEDULA'];
                  $item->id  = $row['ID'];
       $item->grado=$this->estudioactual_grado($row['CEDULA']);
      $item->anno=$this->estudioactual_anno($row['CEDULA']);
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }


//uso de json
function estudios($cedula){
 $item=[];
 $i_nivel=$this->getestudio_grado('i_nivel_inicial',$cedula);
 $ii_nivel=$this->getestudio_grado('ii_nivel_inicial',$cedula);


$grado1ro = $this->getestudio_grado('1er_grado',$cedula);
$grado2do = $this->getestudio_grado('2do_grado',$cedula);
 $grado3ro = $this->getestudio_grado('3er_grado',$cedula);
  $grado4to = $this->getestudio_grado('4to_grado',$cedula);
   $grado5to = $this->getestudio_grado('5to_grado',$cedula);
$grado6to = $this->getestudio_grado('6to_grado',$cedula);

$union_1=array_merge($grado1ro,$grado2do);
$union_2=array_merge($union_1,$grado3ro);
$union_3=array_merge($union_2,$grado4to);
$union_4=array_merge($union_3,$grado5to);
$union_5=array_merge($union_4,$grado6to);


$union_6=array_merge($i_nivel,$ii_nivel);

$union_7=array_merge($union_6,$union_5);


$a=[];

foreach ($union_7 as $row) {

 
 if ($row->id!='x') {
$item[$row->grado]=$row->anno;

 }




     }
    return $item;


 

    }

    //retorna elgrado
function estudioactual_grado($cedula){
   $i_nivel=$this->getestudio_grado('i_nivel_inicial',$cedula);
 $ii_nivel=$this->getestudio_grado('ii_nivel_inicial',$cedula);
$grado1ro = $this->getestudio_grado('1er_grado',$cedula);
$grado2do = $this->getestudio_grado('2do_grado',$cedula);
 $grado3ro = $this->getestudio_grado('3er_grado',$cedula);
  $grado4to = $this->getestudio_grado('4to_grado',$cedula);
   $grado5to = $this->getestudio_grado('5to_grado',$cedula);
$grado6to = $this->getestudio_grado('6to_grado',$cedula);

$union_1=array_merge($grado1ro,$grado2do);
$union_2=array_merge($union_1,$grado3ro);
$union_3=array_merge($union_2,$grado4to);
$union_4=array_merge($union_3,$grado5to);
$union_5=array_merge($union_4,$grado6to);


$union_6=array_merge($i_nivel,$ii_nivel);

$union_7=array_merge($union_6,$union_5);


$x="";
foreach ($union_7 as $row) {
 $alumno = new Alumno();
 $alumno = $row;
 if ($alumno->id!='x') {
  $x=$alumno->grado;
 }

     }
    return $x;

    }


    //retorna elgrado
function estudioactual_anno($cedula){
   $i_nivel=$this->getestudio_grado('i_nivel_inicial',$cedula);
 $ii_nivel=$this->getestudio_grado('ii_nivel_inicial',$cedula);
$grado1ro = $this->getestudio_grado('1er_grado',$cedula);
$grado2do = $this->getestudio_grado('2do_grado',$cedula);
 $grado3ro = $this->getestudio_grado('3er_grado',$cedula);
  $grado4to = $this->getestudio_grado('4to_grado',$cedula);
   $grado5to = $this->getestudio_grado('5to_grado',$cedula);
$grado6to = $this->getestudio_grado('6to_grado',$cedula);

$union_1=array_merge($grado1ro,$grado2do);
$union_2=array_merge($union_1,$grado3ro);
$union_3=array_merge($union_2,$grado4to);
$union_4=array_merge($union_3,$grado5to);
$union_5=array_merge($union_4,$grado6to);

$union_6=array_merge($i_nivel,$ii_nivel);

$union_7=array_merge($union_6,$union_5);

$x="";
foreach ($union_7 as $row) {
 $alumno = new Alumno();
 $alumno = $row;
 if ($alumno->id!='x') {
  $x=$alumno->anno;
 }




     }
    return $x;


 

    }










  public function getestudio_grado($grado,$cedula){

        $items = [];
        try{



$query = $this->db->connect()->prepare('SELECT  * FROM alumnos 
    INNER JOIN  '.$grado.'  ON alumnos.CEDULA= '.$grado.'.CEDULA  
    WHERE alumnos.CEDULA = :ci');
                 $query->execute(['ci' => $cedula]);
                  
$rows = $query->fetchAll();
$num_rows = count($rows);


$query2 = $this->db->connect()->prepare('SELECT  * FROM alumnos  WHERE alumnos.CEDULA = :ci');
                 $query2->execute(['ci' => $cedula]);
                    $row = $query2->fetch();              

                $item = new Alumno();
              //  $item->matricula = $row['matricula'];
                  $item->nombre    = $row['NOMBRES'];
                   $item->apellido    = $row['APELLIDOS'];
                     $item->cedula   = $row['CEDULA'];

if ($num_rows>0) {
    # code...



$query2 = $this->db->connect()->prepare('SELECT  * FROM alumnos 
    INNER JOIN  '.$grado.'  ON alumnos.CEDULA= '.$grado.'.CEDULA  
    WHERE alumnos.CEDULA = :ci');
                 $query2->execute(['ci' => $cedula]);
                    $row = $query2->fetch();

                                

              
            
                
                  
                  $item->grado  = $grado;
                 $siguient_an= intval($row['ANNO'])+1;
                  $item->anno  =  $row['ANNO'].'-'.$siguient_an;
                  $item->id    = $row['ID'];
                array_push($items, $item);
        


           
        
}else{
 
              
                 $item->anno  ='x';
                  $item->grado  =$grado;
                 
                  $item->id  = 'x';
                array_push($items, $item);


}

         return $items;
        }catch(PDOException $e){
            return [];
        }
    }












public function b_por_grado($grado){

 $items = [];
        try{


            $query = $this->db->connect()->query('SELECT * FROM alumnos');
            
            while($row = $query->fetch()){

        if ($grado==$this->estudioactual_grado($row['CEDULA'])) {


                $item = new Alumno();
              //  $item->matricula = $row['matricula'];
                $item->nombre    = $row['NOMBRES'];
                $item->apellido  = $row['APELLIDOS'];
                $item->cedula  = $row['CEDULA'];
                  $item->id  = $row['ID'];
       $item->grado=$this->estudioactual_grado($row['CEDULA']);
      $item->anno=$this->estudioactual_anno($row['CEDULA']);
                array_push($items, $item);
            }
          }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }


public function b_por_cedula($cedula){

 $items = [];
        try{


          $query = $this->db->connect()->prepare('SELECT * FROM alumnos WHERE CEDULA = :ci');

$query->execute(['ci' => $cedula]);

            
            while($row = $query->fetch()){

    

                $item = new Alumno();
              //  $item->matricula = $row['matricula'];
                $item->nombre    = $row['NOMBRES'];
                $item->apellido  = $row['APELLIDOS'];
                $item->cedula  = $row['CEDULA'];
                  $item->id  = $row['ID'];
       $item->grado=$this->estudioactual_grado($row['CEDULA']);
      $item->anno=$this->estudioactual_anno($row['CEDULA']);
                array_push($items, $item);
            
          }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }






public function getById($cedula){
$item = new Alumno();
try{
$query = $this->db->connect()->prepare('SELECT * FROM alumnos WHERE CEDULA = :ci');

$query->execute(['ci' => $cedula]);


while($row = $query->fetch()){



$item->nombre    = $row['NOMBRES'];
$item->apellido  = $row['APELLIDOS'];
  $item->nacionalidad  = $row['NACIONALIDAD'];
 $item->tipo_ci  = $row['TIPO_CI'];
 $item->cedula  = intval($row['CEDULA']);
  $item->reprecentante  = $row['NOMBRE_REPRECENTANTE'];
 $item->telefono  = $row['TELEFONO'];
 $item->activo  = $row['ACTIVO'];
  $item->id  = $row['ID'];
  $item->id  = $row['ID'];
$item->grado=$this->estudioactual_grado($row['CEDULA']);
$item->anno=$this->estudioactual_anno($row['CEDULA']);

 

}
return $item;
}catch(PDOException $e){
return null;
}
}


    public function update($item){
      
        try{
        $query = $this->db->connect()->prepare("UPDATE `alumnos` SET `CEDULA` = :cedula,`NACIONALIDAD` = :nacionalidad, `TIPO_CI` = :tipocedula, `APELLIDOS` = :apellido, `NOMBRES` = :nombre, `ACTIVO` = :activo, `NOMBRE_REPRECENTANTE` = :nombre_r, `TELEFONO` = :telefono WHERE `alumnos`.`ID` = :id;");
        
$query->execute(['cedula'=>$item['cedula'],'nombre'=>$item['nombre'],'apellido'=>$item['apellido'],'nacionalidad'=>$item['nacionalidad'],'tipocedula'=>$item['tipocedula'],'activo' =>$item['activo'],'nombre_r' =>$item['nombre_r'],
     'telefono'=>$item['telefono'],'id'=>$item['id']]);
            return true;
        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }

    public function delete($ci){
        $query = $this->db->connect()->prepare('DELETE FROM alumnos WHERE CEDULA = :cedula');
        try{
            $query->execute([
                'cedula' => $ci
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }

}

 public function deletegrado($grado,$id){
        $query = $this->db->connect()->prepare('DELETE FROM '.$grado.' WHERE ID = :id');
        try{
            $query->execute([
                'id' => $id

            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }

    }
}
?>