<?php
include '../APIquerys/apiQuerys.php';
$conn  = new apiQuerys;


if(isset($_POST["option1"])){
    $option = $_POST['option1'];
    if($option === "iluminacion" | $option === "sonido" | $option === "video"){
        $data[0] = $_POST["marcaAdd"];
        $data[1] = $_POST["tipoMaterialAdd"];
        $data[2] = $_POST["modeloAdd"];
        $data[3] = $_POST["cantidadAdd"];
        $data[4] = $_POST["anioCompraAdd"];
        $data[5] = $_POST["utilidadAdd"];
        $data[6] = $_POST["tipoConexionAdd"];
        $data[7] = $_POST["ubicacionAdd"];
        $data[8] = $_POST["ultimaRevisionAdd"];
        $data[9] = $_POST["observacionesAdd"];
        $conn->addMaterial($option, $data);
    }else if($option === "atrezzo" | $option === "matMontaje" | $option === "otro"){
        if($option === "atrezzo"){
            $data[0] = $_POST["tipoMaterialAdd"];
            $data[1] = $_POST["utilidadAdd"];
            $data[2] = $_POST["ubicacionAdd"];
            $data[3] = $_POST["cantidadAdd"];
            $data[4] = $_POST["observacionesAdd"];
            $conn->addMaterial($option, $data);
        }else{
            $data[0] = $_POST["tipoMaterialAdd"];
            $data[1] = $_POST["cantidadAdd"];
            $data[2] = $_POST["utilidadAdd"];
            $data[3] = $_POST["ubicacionAdd"];
            $data[4] = $_POST["observacionesAdd"];
            $conn->addMaterial($option, $data);
        }
    }else if($option === "cableado"){
        $data[0] = $_POST["tipoMaterialAdd"];
        $data[1] = $_POST["cantidadAdd"];
        $data[2] = $_POST["metrosCableAdd"];
        $data[3] = $_POST["ubicacionAdd"];
        print_r($data);
        $return = $conn->addMaterial($option, $data);
        
    }
}
?>
