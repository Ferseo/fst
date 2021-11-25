<?php
include_once( '../connection/connection.php');
//$conn = new connection;
class queryLogin extends connection{

    /**Consulta que comprueba que verifica los datos del login con las credenciales de la bd**/ 
    public function checkUser($user, $pass){
        parent::__construct();
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
}
?>