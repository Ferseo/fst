<?php
//include_once "../connection/connection.php";
define("DB_NOMBRE", "managementtheatre");
define("DB_HOST", "141.95.162.188");
define("DB_USUARIO", "root");
define("DB_PASSWORD", "MySQLServer2022.");
class apiQuerys
{
    /**
     *Constructor de la conexión a la base de datos.
     */
    public function __construct()
    {
        try{
            echo "1";
            $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            echo "2";
            $this->conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NOMBRE,DB_USUARIO,DB_PASSWORD,$opc);
            echo "3";
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "4";
        //Y si no puede crearse la conexión, muestra el error.
        }catch (Exception $ex){
            echo "no se pudo hacer la conexion";
            throw $ex;
        /*$dsn = "mysql:host=" . DB_HOST;
        try {
            $this->conn = new PDO($dsn, DB_USUARIO); // Nueva instancia de PDO
            $sql = 'SHOW DATABASES LIKE "' . DB_NOMBRE . '";'; //SQL que comprueba si existe la base de datos
            $resultado = $this->conn->query($sql); //Realiza la consulta
            if ($resultado->fetch()) //Si encuentra la base de datos
            { //Realiza la conexion
                $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); //Opciones conexion
                $this->conn = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NOMBRE, DB_USUARIO, DB_PASSWORD, $opc); //Crea una instancia PDO intentando la conexion
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Añade los atributos
            } else {
                //Si no, lee el archivo sql que contiene la sentencia que crea la base de datos
                $sql = file_get_contents('../SQL/baseDatos.sql');
                $result = $this->conn->prepare($sql);
                $result->execute();
                $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); //Opciones conexion
                $this->conn = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NOMBRE, DB_USUARIO, DB_PASSWORD, $opc); //Crea una instancia PDO intentando la conexion
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch (Exception $ex) {
            throw $ex;
        }*/
    }}

    /**
     * Método que ejecuta cualquier consulta
     * @param [type] $query
     * @return 
     */
    public function runQueary($query)
    {
        try {
            $result = null;
            if (isset($this->conn)) $result = $this->conn->query($query);
            return $result;
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    /**
     * Consulta que comprueba que verifica los datos del login con las credenciales de la bd
     * @param [type] $user
     * @param [type] $pass
     * @return 
     */
    public function checkUser($user, $pass)
    {
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
    public function getTask($nombre, $date)
    {
        $query = "SELECT tipoTarea,horarioTarea,lugarTarea,cod_tarea FROM tareas WHERE trabajadorDesempenia='$nombre' AND diaTarea='$date' AND realizada='false';";
        $result = $this->runQueary($query);
        if ($result) {
            $data = $result->FetchAll();
            return $data;
        } else {
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
        }
    }
    
    /**
     * Método que recibiendo por parametro un numero identificador, elimina de la base de datos 
     * el registro con el mismo id
     * @param [type] $count
     * @return 
     */
    public function deleteTask($count)
    {
        // $tasks = $this->getAllTask($count);
        // $return = $this->insertTask(json_encode($tasks));
        //if ($return) {
            $query = "DELETE FROM tareas WHERE cod_tarea='$count'";
            $result = $this->runQueary($query);
            if ($result) {
                return true;
            } else {
                throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
            }
        // } else {
        //     throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
        // }
    }


    /**
     * Funcion que al eliminar una tarea del panel de notificaciones añade true al registro de 
     * realizada, para que pase al historico de tareas
     * @param [type] $count
     * @return 
     */
    public function tasksRealice($count)
    {
            $query = "UPDATE tareas SET realizada = 'true' WHERE  cod_tarea='$count'";
            $result = $this->runQueary($query);
            if ($result) {
                return true;
            } else {
                throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
            }
    }




    
    /**
     * Funcion que trae de la base de datos todos los registros con realizada = true
     * @return 
     */
    function getHistoricTasks()
    {  
        $query = "SELECT * FROM tareas WHERE realizada='true' ORDER BY diaTarea ASC;";
        $result = $this->runQueary($query);
        if ($result) {
            $data = $result->FetchAll(PDO::FETCH_OBJ);
            return $data;
        } else {
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
        }
    }



    /*****
     * Consulta que trae todos los registros de la tabla material prestado, que tienen
     * como condicion que la tabla devuelto sea true
     */
         function getHistoricLend()
         {  
        $query = "SELECT * FROM materialprestado WHERE devuelto='true' ORDER BY diaEntrega ASC;";
        $result = $this->runQueary($query);
        if ($result) {
            $data = $result->FetchAll(PDO::FETCH_OBJ);
            return $data;
        } else {
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
        }
    }
    



    /**
     * Método que ejecuta la consulta para añadir un material a la bd, con los datos recibidos
     * com oparámetro
     *
     * @param [type] $option
     * @param [type] $data
     * @return 
     */
    public function addMaterial($option, $data)
    {
        if ($option === "iluminacion") {
            $this->conn->beginTransaction();
            $sql = "INSERT INTO iluminacion (tipoMaterial, marca, modelo, cantidad, utilidad, ubicacion, anioCompra, tipoConexion, ultimaRevision, observaciones) VALUES (?,?,?,?,?,?,?,?,?,?);";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9]));
            $this->conn->commit();
            return true;
        }

        if ($option === "sonido") {
            $this->conn->beginTransaction();
            $sql = "INSERT INTO sonido (tipoMaterial, marca, modelo, cantidad, utilidad, ubicacion, anioCompra, tipoConexion, ultimaRevision, observaciones) VALUES (?,?,?,?,?,?,?,?,?,?);";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9]));
            $this->conn->commit();
            return true;
        }

        if ($option === "video") {
            $this->conn->beginTransaction();
            $sql = "INSERT INTO video (tipoMaterial, marca, modelo, cantidad, utilidad, ubicacion, anioCompra, tipoConexion, ultimaRevision, observaciones) VALUES (?,?,?,?,?,?,?,?,?,?);";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9]));
            $this->conn->commit();
            return true;
        }

        if ($option === "atrezzo") {
            $this->conn->beginTransaction();
            $sql = "INSERT INTO atrezzo (tipoMaterial,  utilidad,  ubicacion, cantidad, observaciones) VALUES (?,?,?,?,?);";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(array($data[0], $data[1], $data[2], $data[3], $data[4]));
            $this->conn->commit();
            return true;
        }

        if ($option === "matMontaje") {
            $this->conn->beginTransaction();
            $sql = "INSERT INTO materialmontaje (tipoMaterial, cantidad, utilidad, ubicacion,  observaciones) VALUES (?,?,?,?,?);";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(array($data[0], $data[1], $data[2], $data[3], $data[4]));
            $this->conn->commit();
            return true;
        }

        if ($option === "otro") {
            $this->conn->beginTransaction();
            $sql = "INSERT INTO otros (tipoMaterial, cantidad, utilidad, ubicacion, observaciones) VALUES (?,?,?,?,?);";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(array($data[0], $data[1], $data[2], $data[3], $data[4]));
            $this->conn->commit();
            return true;
        }

        if ($option === "cableado") {
            $this->conn->beginTransaction();
            $sql = "INSERT INTO cableado (tipoMaterial, cantidad, metos, ubicacion) VALUES (?,?,?,?);";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(array($data[0], $data[1], $data[2], $data[3]));
            $this->conn->commit();
            return true;
        }

        return false;
    }

    /**
     * Método que ejecuta la consulta de busqueda de la informacion guardada en una tabla especifica y de un material especifico
     *
     * @param [type] $option
     * @param [type] $column
     * @param [type] $data
     * @return 
     */
    public function findMaterial($option, $column, $data)
    {
        $query = "SELECT * FROM $option WHERE $column LIKE '%$data%';";
        $result = $this->runQueary($query);
        if ($result) {
            $data = $result->FetchAll(PDO::FETCH_OBJ);
            return $data;
        } else {
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
        }
    }

    /**
     * Método que recibiendo por parámetro el codigo del elemento a eliminar y el nombre de la 
     * tabla, para su posterior eliminación de la bd
     * @param [type] $count
     * @param [type] $column
     * @return 
     */
    public function deleteMaterial($count, $column)
    {
        $query = "DELETE FROM $column WHERE codigo='$count';";
        $result = $this->runQueary($query);
        if ($result) {
            return true;
        } else {
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
            return false;
        }
    }

    /**
     * Método que recibiendo un objeto con datos, los introduce en la tabla correspondiente
     * @param [type] $data
     * @return 
     */
    public function lendMaterial($data)
    {
        $this->conn->beginTransaction();
        $sql = "INSERT INTO materialprestado (materialPrestado, diaRetirada, diaEntrega,  estadoMaterial, observaciones, personaPrestamo, devuelto ,  estado_devolucion , trabajador_presta ,  trabajador_recibe ) VALUES (?,?,?,?,?,?,?,?,?,?);";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8],$data[9]));
        $this->conn->commit();
        return true;
    }



    /**
     * Método de consulta que recoge todos los registros de tareas con la condicion 
     * de que en la tabla devueltos sea false, para ver los materiales prestados aun sin devolver
     * @return
     */
    public function getLendMaterial()
    {
        $query = "SELECT * FROM materialprestado WHERE devuelto='false'";
        $result = $this->runQueary($query);
        if ($result) {
            $data = $result->FetchAll(PDO::FETCH_OBJ);
            return $data;
        } else {
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
        }
    }

    /**
     * Funcion que trae de la base de datos todos los registros de material devuelto     *
     * @return 
     */
    public function getHistoricLendMaterial()
    {
        $query = "SELECT * FROM materialprestado WHERE devuelto='true'";
        $result = $this->runQueary($query);
        if ($result) {
            $data = $result->FetchAll(PDO::FETCH_OBJ);
            return $data;
        } else {
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
        }
    }

    /**
     * Método que recibiendo una variable con el codigo elimina el registro de la bd
     * @param [type] $count
     * @return 
     */
    public function deleteLend($count)
    {
        $query = "DELETE FROM materialprestado WHERE codigo='$count';";
        $result = $this->runQueary($query);
        if ($result) {
            return true;
        } else {
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
            return false;
        }
    }

    /*********
     * Consulta creada que actualiza el valor de la columna devuelto a true 
     * para que pase a ser historico
     */
    public function returnedLend($count,$text,$user)
    {
            $query = "UPDATE materialprestado SET devuelto = 'true', estado_devolucion='$text',trabajador_recibe='$user' WHERE  codigo='$count'";
            $result = $this->runQueary($query);
            if ($result) {
                return true;
            } else {
                throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
            }
    }

    /**
     * Método de consulta que recibiendo la categoria del usuario, trae de la base 
     * de datos su informacion de usuario 
     * @param [type] $user
     * @return 
     */
    public function getCredencial($user)
    {
        $query = "SELECT * FROM credenciales WHERE nombre='$user';";
        $result = $this->runQueary($query);
        if ($result) {
            $data = $result->FetchAll(PDO::FETCH_OBJ);
            return $data;
        } else {
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
        }
    }

    /**
     * Método de consulta trae de la base de datos el nombre de los usuarios registrados   
     * @return 
     */
    public function getUserName()
    {
        $query = "SELECT nombre FROM credenciales ";
        $result = $this->runQueary($query);
        if ($result) {
            $data = $result->FetchAll(PDO::FETCH_OBJ);
            return $data;
        } else {
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
        }
    }

    /**
     * Método que recibiendo por parametro el dato ddel nombre, elimina el registro 
     * de la base de datos
     * @param [type] $nombre
     * @return 
     */
    public function deleteUser($nombre)
    {
        $query = "DELETE FROM credenciales WHERE nombre='$nombre';";
        $result = $this->runQueary($query);
        if ($result) {
            return true;
        } else {
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
            return false;
        }
    }


    /**
     * Método que recibiendo por parámetros tres variable indicando el valor del campo, el 
     * id, del campo y el nonmbre del ususario , modifica el dato correspondiente a la 
     * columna indicada, del usuario indicado     *
     * @param [type] $value
     * @param [type] $colunm
     * @param [type] $nombre
     * @return 
     */
    public function editInputConfiguration($value, $colunm, $nombre)
    {
        $query = "UPDATE credenciales SET $colunm='$value' WHERE nombre='$nombre';";
        $result = $this->runQueary($query);
        if ($result) {
            return true;
        } else {
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
            return false;
        }
    }


    /**
     * Funcion que añade una tarea nueva a la base de datos 
     * @param [type] $data
     * @return 
     */
    public function addTask($data)
    {
        $this->conn->beginTransaction();
        $sql = "INSERT INTO tareas (tipoTarea, trabajadorDesempenia, diaTarea, horarioTarea, lugarTarea, realizada) VALUES (?,?,?,?,?,?);";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5]));
        $this->conn->commit();
        return true;
    }

    /**
     * Funcion que añade un usuario nuevo a la base de datos
     * @param [type] $data
     * @return 
     */
    public function addNewUser($data)
    {
        $this->conn->beginTransaction();
        $sql = "INSERT INTO credenciales (dni, nombre, apellidos, user, password, categoria, anio_ingreso, direccion, telefono) VALUES (?,?,?,?,?,?,?,?,?);";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8]));
        $this->conn->commit();
        return true;
    }

    /** Método para que al entrar en la aplicacion cambia la fecha de las tareas a la del dia en curso, para que aparezcan en la barra de notificaciones */
    public function putDateToday($date)
    {
        $query = "UPDATE tareas SET diaTarea='$date' WHERE realizada='false'";
        $result = $this->runQueary($query);
        if ($result != false) {
            return true;
        } else {
            throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
        }
    }
}
