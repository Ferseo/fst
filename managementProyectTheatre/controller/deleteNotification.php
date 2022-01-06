<?php 
include_once '../APIquerys/apiQuerys.php';
$conn = new apiQuerys;
$count = $_POST['dataString'];
$return = $conn->deleteTask($count);
//print_r($count);



// https://www.jose-aguilar.com/blog/eliminar-registros-con-jquery-ajax-y-php/
//url del articulo usado para la peticion ajax de eliminado

//En el archivo de notification hay un ejemplo de funcion




?>