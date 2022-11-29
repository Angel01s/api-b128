<?php

include_once 'parte.php';

class ApiParte{


    function getAll(){
        $pelicula = new Parte();
        $peliculas = array();

        $res = $pelicula->obtenerPartes();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=array(
                    "PERMISOID" => $row['PERMISOID'],
                    "CODIGO" => $row['CODIGO'],
                    "CONTRASENIA" => $row['CONTRASENIA'],
                    "NOMBRES" => $row['NOMBRES'],
                );
                array_push($peliculas, $item);
            }
        
            echo json_encode($peliculas);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }
}

?>