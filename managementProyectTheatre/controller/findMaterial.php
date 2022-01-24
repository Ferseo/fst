<?php
include '../APIquerys/apiQuerys.php';
$conn  = new apiQuerys;

if(isset($_POST["option"])){
    $option = $_POST["option"];
    //print_r($option);
    if(isset($_POST["tipoMaterialFind"])){
        $data = $_POST["tipoMaterialFind"];
        $column = "tipoMaterial";
        $return = $conn->findMaterial($option, $column, $data);
    }else{
        if(isset($_POST["utilidadFind"])){
            $data = $_POST["utilidadFind"];
            $column = "utilidad";
            $return = $conn->findMaterial($option, $column, $data);
        }else{
            if(isset($_POST["ubicacionFind"])){
                $data = $_POST["ubicacionFind"];
                $column = "ubicacion";
                $return = $conn->findMaterial($option, $column, $data);
            }else{
                if(isset($_POST["marcaFind"])){
                    $data = $_POST["marcaFind"];
                    $column = "marca";
                    $return = $conn->findMaterial($option, $column, $data);
                }else{
                    if(isset($_POST["metrosFind"])){
                        $data = $_POST["metrosFind"];
                        $column = "metos";
                        $return = $conn->findMaterial($option, $column, $data);
                    }else{
                        if(isset($_POST["anio_compraFind"])){
                            $data = $_POST["anio_compraFind"];
                            $column = "anioCompra";
                            $return = $conn->findMaterial($option, $column, $data);
                        }else{
                            if(isset($_POST["tipo_conexionFind"])){
                                $data = $_POST["tipo_conexionFind"];
                                $column = "tipoConexion";
                                $return = $conn->findMaterial($option, $column, $data);
                            }
                        }
                    }
                }
            }
        }
    }
    print_r(json_encode($return));
    //return json_encode($return);
}
