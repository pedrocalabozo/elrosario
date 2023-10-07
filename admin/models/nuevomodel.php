<?php



class NuevoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

 public function aprobar_soli_model($id){
      
        try{

// UPDATE `alumnos` SET `CEDULA` = :cedula,`NACIONALIDAD` = :nacionalidad, `TIPO_CI` = :tipocedula, `APELLIDOS` = :apellido, `NOMBRES` = :nombre, `ACTIVO` = :activo, `NOMBRE_REPRECENTANTE` = :nombre_r, `TELEFONO` = :telefono WHERE `alumnos`.`ID` = :id;


            
        $query = $this->db->connect()->prepare("UPDATE `solicitud_constancia` SET `ESTADO`='1' WHERE  `id`=:id;");
        
$query->execute(['id'=>$id]);
            return true;
        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }

public function solicitud($datos){


   $query = $this->db->connect()->prepare('INSERT INTO solicitud_constancia (CEDULA,TIPO,PAGOMOVIL,ESTADO,EMAIL,COD) VALUES( :cedula,:constancia,:pagomovil,:estado,:email,:codigo)');
try{
$query->execute([
'cedula' => $datos['cedula'],
'constancia' => $datos['constancia'],
'pagomovil' => $datos['pagomovil'],
'estado' =>'0',
'email' => $datos['email'],
'codigo' => rand(555,15).strlen($datos['email']).substr($datos['cedula'], -1)
]);
 return true;
  }catch(PDOException $e){
      return false;
      }

}
 public function exist_solicitud($cedula,$constancia){
 $query = $this->db->connect()->prepare('SELECT * FROM solicitud_constancia WHERE CEDULA = :ci AND TIPO = :constancia AND ESTADO = 0');

$query->execute(['ci' => $cedula,'constancia'=>$constancia]);           
$rows = $query->fetchAll();
$num_rows = count($rows);
return $num_rows;


    } 


    public function insert($datos){
        // insertar
        $query = $this->db->connect()->prepare('INSERT INTO alumnos (CEDULA,NACIONALIDAD,TIPO_CI, NOMBRES, APELLIDOS,ACTIVO,NOMBRE_REPRECENTANTE,TELEFONO,credito) VALUES( :cedula,:nacionalidad,:tipocedula,:nombre, :apellido,:activo,:nombre_r,:telefono,:credito)');
try{
$query->execute([

'nombre' => $datos['nombre'],
'apellido' => $datos['apellido'],
'nacionalidad' => $datos['nacionalidad'],
'tipocedula' => $datos['tipocedula'],
'cedula' => $datos['cedula'],
'activo' => $datos['activo'],
'nombre_r' => $datos['nombre_reprecentante'],
'telefono' => $datos['telefono'],
'credito' =>'00000'

]);
            return true;
        }catch(PDOException $e){
            return false;
        }
        
        
    }

 public function data_estudio($datos){
        // insertar
$query = $this->db->connect()->prepare("INSERT INTO ".$datos['grado']." (`ID`, `CEDULA`, `ANNO`) VALUES (NULL, :cedula, :aescolar);");
        try{
            $query->execute(['aescolar' => $datos['ano'],
                'cedula' => $datos['cedula'] ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
        
        
    }
      public function exist_cedula($cedula){
 $query = $this->db->connect()->prepare('SELECT * FROM alumnos WHERE CEDULA = :ci');
$query->execute(['ci' => $cedula]);           
$rows = $query->fetchAll();
$num_rows = count($rows);
return $num_rows;


    } 
}

?>