<?php
    require_once("DB.php");
    if(isset($_GET) and $_SERVER["REQUEST_METHOD"]=="GET"){
        foreach($_GET as $indice => $valor){
            $_GET[$indice] = htmlspecialchars($valor);
        }
        extract($_GET);
        $stateId =  $_GET['state'];
        if($state!=""){
            $conexion = new DB();
            $SQL = "SELECT * FROM municipalities WHERE stateId=".$stateId.";";
            $resultado = $conexion->ejecutar($SQL);
            if($resultado>0){
                echo json_encode($resultado);
                //return json_encode($resultado);
            } else {
                echo "Error de consulta";
            }
        }
    } else {
        echo "se genero un error";
    }
?>