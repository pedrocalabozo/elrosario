<?php



class NuevoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        // insertar
        $query = $this->db->connect()->prepare('INSERT INTO alumnos (CEDULA,NACIONALIDAD,TIPO_CI, NOMBRES, APELLIDOS,ACTIVO,NOMBRE_REPRECENTANTE,TELEFONO) VALUES( :cedula,:nacionalidad,:tipocedula,:nombre, :apellido,:activo,:nombre_r,:telefono)');
try{
$query->execute([

'nombre' => $datos['nombre'],
'apellido' => $datos['apellido'],
'nacionalidad' => $datos['nacionalidad'],
'tipocedula' => $datos['tipocedula'],
'cedula' => $datos['cedula'],
'activo' => $datos['activo'],
'nombre_r' => $datos['nombre_reprecentante'],
'telefono' => $datos['telefono']

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