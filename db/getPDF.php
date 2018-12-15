<?php
    require_once("DB.php");
    if(isset($_GET) and $_SERVER["REQUEST_METHOD"]=="GET"){
        foreach($_GET as $indice => $valor){
            $_GET[$indice] = htmlspecialchars($valor);
        }
        extract($_GET);
        //$stateId =  $_GET['state'];
        if($state!="" && $municipality != "" ){
            $conexion = new DB();
            $SQL = "";
            if($state != 0){
                if($municipality != 0){
                    //GET ONLY THE PDF FROM A SPECIFIC MUNICIPALITY
                    $SQL = "SELECT states.name as state, municipalities.name as municipality, pdfMunicipalities.link as link FROM states INNER JOIN municipalities ON states.id= municipalities.stateId INNER JOIN pdfMunicipalities ON pdfMunicipalities.municipalityId = municipalities.id where municipalities.id =".$municipality.";";
                }else{
                    //GET ALL THE PDF FROM A SPECIFIC STATE
                    $SQL = "SELECT states.name as state, municipalities.name as municipality, pdfMunicipalities.link as link FROM states INNER JOIN municipalities ON states.id= municipalities.stateId INNER JOIN pdfMunicipalities ON pdfMunicipalities.municipalityId = municipalities.id where states.id =".$state.";";
                }

            }else{
                //GET ALL PDF's
                $SQL = "SELECT states.name as state, municipalities.name as municipality, pdfMunicipalities.link as link FROM states INNER JOIN municipalities ON states.id= municipalities.stateId INNER JOIN pdfMunicipalities ON pdfMunicipalities.municipalityId = municipalities.id";
            }

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