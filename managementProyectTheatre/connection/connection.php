<?php
class connection{
/**Contructor para crear conexión con la base de datos */
    public function __construct()
    {
        $config = parse_ini_file('../connection/config.ini');
        try{
            $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            $dsn = 'mysql:host=' .$config['server']. ';dbname=' .$config['database'];
            $this->conn = new PDO($dsn, $config['user'], $config['pass'], $opc);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //return $conn;
        }catch(Exception $ex){
            throw $ex;
            echo "The connection to database is fail.";
        }
        
    }


    public function runQueary($query){
        try{
            $result = null;
            if(isset($this->conn)) $result = $this->conn->query($query);
            return $result;
        }catch (Exception $ex){
            throw $ex;
          }
    }
}
















?>