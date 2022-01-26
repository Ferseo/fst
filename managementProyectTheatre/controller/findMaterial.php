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
                                $return = json_encode($conn->findMaterial($option, $column, $data));
                            }
                        }
                    }
                }
            }
        }
    }
    //print_r($return);
    print_r(json_encode($return));
    //return json_encode($return);
    //$container = [];
    /*$count = 0;
    if($option === "iluminacion" || $option === "sonido" || $option === "video"){
        foreach($return as $return){
            $row=[];
            $codigo_iluminacion=$return->codigo_iluminacion;
            $tipo_material=$return->tipoMaterial;
            $marca=$return->marca;
            $modelo=$return->modelo;
            $cantidad=$return->cantidad;
            $utilidad=$return->utilidad;
            $ubicacion=$return->ubicacion;
            $anio_compra=$return->anioCompra;
            $tipo_conexion=$return->tipoConexion;
            $ultima_revision=$return->ultimaRevision;
            $observaciones=$return->Observaciones;

            $row["codigo_iluminacion"]=$codigo_iluminacion;
            $row["tipo_material"]=$tipo_material;
            $row["marca"]=$marca;
            $row["modelo"]=$modelo;
            $row["cantidad"]=$cantidad;
            $row["utilidad"]=$utilidad;
            $row["ubicacion"]=$ubicacion;
            $row["anio_compra"]=$anio_compra;
            $row["tipo_conexion"]=$tipo_conexion;
            $row["ultima_revision"]=$ultima_revision;
            $row["observaciones"]=$observaciones;
            $container = $row[$count];
            $count++;
        }
  
    }else if($option === "atrezzo" || $option === "matMontaje" || $option === "otro"){
        foreach($return as $return){
            $row=[];
            $tipo_material=$return->tipoMaterial;
            $utilidad=$return->utilidad;
            $ubicacion=$return->ubicacion;
            $cantidad=$return->cantidad;
            $observaciones=$return->Observaciones;

            $row["tipo_material"]=$tipo_material;
            $row["utilidad"]=$utilidad;
            $row["ubicacion"]=$ubicacion;
            $row["cantidad"]=$cantidad;
            $row["observaciones"]=$observaciones;
            $container = $row[$count];
            $count++;
        }
    }else if($option === "cableado"){
       
    }*/
   
    /*while($r=$return->fetch_object()){
        $row = [];

    }*/
}
