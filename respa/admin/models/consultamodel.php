<?php

require 'models/alumno.php';

class ConsultaModel extends Model{

    public function __construct(){
        parent::__construct();
    }
     public function exist_cedula($cedula){
 $query = $this->db->connect()->prepare('SELECT * FROM alumnos WHERE CEDULA = :ci');
$query->execute(['ci' => $cedula]);           
$rows = $query->fetchAll();
$num_rows = count($rows);
return $num_rows;


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


$grado1ro = $this->getestudio_grado('1er_ano',$cedula);
$grado2do = $this->getestudio_grado('2do_ano',$cedula);
 $grado3ro = $this->getestudio_grado('3er_ano',$cedula);
  $grado4to = $this->getestudio_grado('4to_ano',$cedula);
  $grado5to = $this->getestudio_grado('5to_ano',$cedula);
$grado6to = $this->getestudio_grado('6to_ano',$cedula);



$grado7ro = $this->getestudio_grado('1er_grado',$cedula);
$grado8do = $this->getestudio_grado('2do_grado',$cedula);
 $grado9ro = $this->getestudio_grado('3er_grado',$cedula);
  $grado10to = $this->getestudio_grado('4to_grado',$cedula);
   $grado11to = $this->getestudio_grado('5to_grado',$cedula);
$grado12to = $this->getestudio_grado('6to_grado',$cedula);


$union_1=array_merge($grado1ro,$grado2do);
$union_2=array_merge($union_1,$grado3ro);
$union_3=array_merge($union_2,$grado4to);
$union_4=array_merge($union_3,$grado5to);
$union_5=array_merge($union_4,$grado6to);

$union_6=array_merge($union_5,$grado7ro);
$union_7=array_merge($union_6,$grado8do);
$union_8=array_merge($union_7,$grado9ro);
$union_9=array_merge($union_8,$grado10to);
$union_10=array_merge($union_9,$grado11to);
$union_11=array_merge($union_10,$grado12to);


$union_12=array_merge($i_nivel,$ii_nivel);

$union_13=array_merge($union_12,$union_11);



$a=[];

foreach ($union_13 as $row) {

 
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


$grado1ro = $this->getestudio_grado('1er_ano',$cedula);
$grado2do = $this->getestudio_grado('2do_ano',$cedula);
 $grado3ro = $this->getestudio_grado('3er_ano',$cedula);
  $grado4to = $this->getestudio_grado('4to_ano',$cedula);
  $grado5to = $this->getestudio_grado('5to_ano',$cedula);
$grado6to = $this->getestudio_grado('6to_ano',$cedula);



$grado7ro = $this->getestudio_grado('1er_grado',$cedula);
$grado8do = $this->getestudio_grado('2do_grado',$cedula);
 $grado9ro = $this->getestudio_grado('3er_grado',$cedula);
  $grado10to = $this->getestudio_grado('4to_grado',$cedula);
   $grado11to = $this->getestudio_grado('5to_grado',$cedula);
$grado12to = $this->getestudio_grado('6to_grado',$cedula);


$union_1=array_merge($grado1ro,$grado2do);
$union_2=array_merge($union_1,$grado3ro);
$union_3=array_merge($union_2,$grado4to);
$union_4=array_merge($union_3,$grado5to);
$union_5=array_merge($union_4,$grado6to);

$union_6=array_merge($union_5,$grado7ro);
$union_7=array_merge($union_6,$grado8do);
$union_8=array_merge($union_7,$grado9ro);
$union_9=array_merge($union_8,$grado10to);
$union_10=array_merge($union_9,$grado11to);
$union_11=array_merge($union_10,$grado12to);


$union_12=array_merge($i_nivel,$ii_nivel);

$union_13=array_merge($union_12,$union_11);






$x="";
foreach ($union_13 as $row) {
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


$grado1ro = $this->getestudio_grado('1er_ano',$cedula);
$grado2do = $this->getestudio_grado('2do_ano',$cedula);
 $grado3ro = $this->getestudio_grado('3er_ano',$cedula);
  $grado4to = $this->getestudio_grado('4to_ano',$cedula);
  $grado5to = $this->getestudio_grado('5to_ano',$cedula);
$grado6to = $this->getestudio_grado('6to_ano',$cedula);



$grado7ro = $this->getestudio_grado('1er_grado',$cedula);
$grado8do = $this->getestudio_grado('2do_grado',$cedula);
 $grado9ro = $this->getestudio_grado('3er_grado',$cedula);
  $grado10to = $this->getestudio_grado('4to_grado',$cedula);
   $grado11to = $this->getestudio_grado('5to_grado',$cedula);
$grado12to = $this->getestudio_grado('6to_grado',$cedula);


$union_1=array_merge($grado1ro,$grado2do);
$union_2=array_merge($union_1,$grado3ro);
$union_3=array_merge($union_2,$grado4to);
$union_4=array_merge($union_3,$grado5to);
$union_5=array_merge($union_4,$grado6to);

$union_6=array_merge($union_5,$grado7ro);
$union_7=array_merge($union_6,$grado8do);
$union_8=array_merge($union_7,$grado9ro);
$union_9=array_merge($union_8,$grado10to);
$union_10=array_merge($union_9,$grado11to);
$union_11=array_merge($union_10,$grado12to);


$union_12=array_merge($i_nivel,$ii_nivel);

$union_13=array_merge($union_12,$union_11);




$x="";
foreach ($union_13 as $row) {
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
  $item->telefono1  = $row['credito'];
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
        $query = $this->db->connect()->prepare("UPDATE `alumnos` SET `CEDULA` = :cedula,`NACIONALIDAD` = :nacionalidad, `TIPO_CI` = :tipocedula, `APELLIDOS` = :apellido, `NOMBRES` = :nombre, `ACTIVO` = :activo, `NOMBRE_REPRECENTANTE` = :nombre_r, `credito` = :telefono1,  `TELEFONO` = :telefono WHERE `alumnos`.`ID` = :id;");
        
$query->execute(['cedula'=>$item['cedula'],'nombre'=>$item['nombre'],'apellido'=>$item['apellido'],'nacionalidad'=>$item['nacionalidad'],'tipocedula'=>$item['tipocedula'],'activo' =>$item['activo'],'nombre_r' =>$item['nombre_r'],
     'telefono1'=>$item['telefono1'], 'telefono'=>$item['telefono'],'id'=>$item['id']]);
            return true;
        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }
	
	
	//
	
	public function update1($item){
      
        try{
        $query = $this->db->connect()->prepare("UPDATE `alumnos` SET  `credito` = :telefono1 WHERE `alumnos`.`ID` = :id;");
        
$query->execute(['telefono1'=>$item['telefono1'],'id'=>$item['id']]);
            return true;
        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }
	

	//

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