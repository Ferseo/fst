<?php 
//include_once "../connection/connection.php";
define ("DB_NOMBRE", "managementtheatre");
define ("DB_HOST", "localhost");
define ("DB_USUARIO", "root");
define ("DB_PASSWORD", "");
class apiQuerys {
    //private $conn;
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

  
    
    /*Método que ejecuta cualquier consulta*/
    public function runQueary($query){
        try{
            $result = null;
            if(isset($this->conn)) $result = $this->conn->query($query);
            return $result;
        }catch (Exception $ex){
            throw $ex;
          }
    }

    /**Consulta que comprueba que verifica los datos del login con las credenciales de la bd**/ 
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
  

    /*Consulta que recoge las tareas de un trabajador verificando su nombre y la fecha actual*/
    public function getTask($nombre, $date){
        $query = "SELECT * FROM tareas WHERE trabajadorDesempenia='$nombre' AND diaTarea='$date'";
        $result = $this->runQueary($query);
        if($result){
            $data=$result->Fetch();
            return $data;
                      
        }else {
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
        }
    }



    
    

} 




?>