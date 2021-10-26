<?php
class connetedDataBase{
/**Contructor para crear conexión con la base de datos */
    public function __construct()
    {
        $config = parse_ini_file('./config.ini');
        try{
            $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            $dsn = 'msql:host=' .$config['server']. ';dbname=' .$config['database'];
            $this->conn = new PDO($dsn, $config['user'], $config['pass'], $opc);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                     
        }catch(Exception $ex){
            throw $ex;
            echo "The connection to database is fail.";
        }
        
    }
        
    




}
















?>