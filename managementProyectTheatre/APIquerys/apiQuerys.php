<?php 
//include_once "../connection/connection.php";
define ("DB_NOMBRE", "managementheatre");
define ("DB_HOST", "localhost");
define ("DB_USUARIO", "root");
define ("DB_PASSWORD", "");
class apiQuerys {
    /**
     *Constructor de la conexión a la base de datos.
     */
    public function __construct()
    {
        //Intenta crear la conexión.
        try{
            $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            $this->conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NOMBRE,DB_USUARIO,DB_PASSWORD,$opc);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Y si no puede crearse la conexión, muestra el error.
        }catch (Exception $ex){
            throw $ex;
        }
    }

  
    
    /**
     * Método que ejecuta cualquier consulta
     * @param [type] $query
     * @return 
     */
    public function runQueary($query){
        try{
            $result = null;
            if(isset($this->conn)) $result = $this->conn->query($query);
            return $result;
        }catch (Exception $ex){
            throw $ex;
          }
    }

    /**
     * Consulta que comprueba que verifica los datos del login con las credenciales de la bd
     * @param [type] $user
     * @param [type] $pass
     * @return 
     */ 
    public function checkUser($user, $pass){
        $this->conn->beginTransaction();
        $query = "SELECT * FROM credenciales WHERE (user = ? and password = ?) limit 1;";
        $result = $this->conn->prepare($query);
        $result->execute(array($user, $pass));
        $this->conn->commit();
        if ($result) {
            $data = $result->fetch();
            return $data;
        } else {
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
        }
    }
  

    /**
     * Consulta que recoge las tareas de un trabajador verificando su nombre y la fecha actual
     * @param [type] $nombre
     * @param [type] $date
     * @return 
     */
    public function getTask($nombre, $date){
        $query = "SELECT tipoTarea,horarioTarea,lugarTarea,cod_tarea FROM tareas WHERE trabajadorDesempenia='$nombre' AND diaTarea='$date'";
        $result = $this->runQueary($query);
        if($result){
            $data=$result->FetchAll();
            return $data;
                      
        }else {
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
        }
    }


    /**
     * Método que recibiendo por parametro un numero identificador, elimina de la base de datos 
     * el registro con el mismo id
     * @param [type] $count
     * @return 
     */
    public function deleteTask($count){
        $query = "DELETE FROM tareas WHERE cod_tarea='$count'";
        $result = $this->runQueary($query);
        if($result){
            return true;
        }else{
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
        }

    }
    
    /**
     * Undocumented function
     *
     * @param [type] $option
     * @param [type] $data
     * @return 
     */
    public function addMaterial($option, $data){
        if($option === "iluminacion"){
        $this->conn->beginTransaction();
        $sql= "INSERT INTO iluminacion (tipoMaterial, marca, modelo, cantidad, utilidad, ubicacion, anioCompra, tipoConexion, ultimaRevision, observaciones) VALUES (?,?,?,?,?,?,?,?,?,?);";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9]));
        $this->conn->commit();
        return true;
        }

        if($option === "sonido"){
        $this->conn->beginTransaction();
        $sql= "INSERT INTO sonido (tipoMaterial, marca, modelo, cantidad, utilidad, ubicacion, anioCompra, tipoConexion, ultimaRevision, observaciones) VALUES (?,?,?,?,?,?,?,?,?,?);";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9]));
        $this->conn->commit();
        return true;
        }
        
        if($option === "video"){
        $this->conn->beginTransaction();
        $sql= "INSERT INTO video (tipoMaterial, marca, modelo, cantidad, utilidad, ubicacion, anioCompra, tipoConexion, ultimaRevision, observaciones) VALUES (?,?,?,?,?,?,?,?,?,?);";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9]));
        $this->conn->commit();
        return true;
        }

        if($option === "atrezzo"){
        $this->conn->beginTransaction();
        $sql= "INSERT INTO atrezzo (tipoObjeto,  utilidad,  ubicacion, cantidad, observaciones) VALUES (?,?,?,?,?);";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($data[0], $data[1], $data[2], $data[3], $data[4]));
        $this->conn->commit();
        return true;
        }

        if($option === "matMontaje"){
        $this->conn->beginTransaction();
        $sql= "INSERT INTO materialmontaje (tipoMaterial, cantidad, utilidad, ubicacion,  observaciones) VALUES (?,?,?,?,?);";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($data[0], $data[1], $data[2], $data[3], $data[4]));
        $this->conn->commit();
        return true;  
        }

        if($option === "otro"){
        $this->conn->beginTransaction();
        $sql= "INSERT INTO otros (tipoObjeto, cantidad, utilidad, ubicacion, observaciones) VALUES (?,?,?,?,?);";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($data[0], $data[1], $data[2], $data[3], $data[4]));
        $this->conn->commit();
        return true;   
        }

        if($option === "cableado"){
        $this->conn->beginTransaction();
        $sql= "INSERT INTO cableado (tipoCableado, cantidad, metos, ubicacion) VALUES (?,?,?,?);";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($data[0], $data[1], $data[2], $data[3]));
        $this->conn->commit();
        return true;   
        }

        return false;
    }

    
    public function findMaterial($option, $column, $data){
        $query = "SELECT * FROM $option WHERE $column LIKE '%$data%';";
        $result = $this->runQueary($query);
        if($result){
            $data=$result->FetchAll();
            return $data;        
        }else {
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
        }
    }


    public function lendMaterial($data){
        $this->conn->beginTransaction();
        //$sql= "INSERT INTO materialPrestado (tipoMaterial,      ) VALUES (?,?,?,?,?,?);";
        $stmt = $this->conn->prepare(/*$sql*/);
        $stmt->execute(array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5]));
        $this->conn->commit();
        return true;
    }





























    /** Método para que al entrar en la palicacion cambie la fecha de las tareas a la del dia en curso, para que aparezcan en la barra de notificaciones */
    public function putDateToday($date){
        $query = "UPDATE tareas SET diaTarea='$date'";
        $result = $this->runQueary($query);
        if($result != false){
           return true;
                      
        }else {
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
        }
    }
}
