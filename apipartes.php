<?php

include_once 'parte.php';

class ApiParte{
    /* Obteniendo todos los datos de Partes y Usuarios */

    function getAllUsuarios(){
        $pelicula = new Parte();
        $peliculas = array();

        $res = $pelicula->obtenerUsuarios();

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
    function getAllPartes(){
        $pelicula = new Parte();
        $peliculas = array();

        $res = $pelicula->obtenerPartes();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=array(
                    "ID" => $row['ID'],
                    "NE" => $row['NE'],
                    "DIA" => $row['DIA'],
                    "MES" => $row['MES'],
                    "SHORA"=> $row['SHORA'],
                    "IHORA"=> $row['IHORA'],
                    "KMSALIDA"=> $row['KMSALIDA'],
                    "KMINGRESO"=> $row['KMINGRESO'],
                    "JEFE"=> $row['JEFE'],
                    "TPILOTO"=> $row['TPILOTO'],
                    "NPILOTO"=> $row['NPILOTO'],
                    "ORADIO"=> $row['ORADIO'],
                    "TELEFONO"=> $row['TELEFONO'],
                    "CSERVICIO"=> $row['CSERVICIO'],
                    "UCGBVP"=> $row['UCGBVP'],
                    "UPOLI"=> $row['UPOLI'],
                    "MPOLI"=> $row['MPOLI'],
                    "SAMU"=> $row['SAMU'],
                    "MSAMU"=> $row['MSAMU'],
                    "SC"=> $row['SC'],
                    "MSC"=> $row['MSC'],
                    "OE"=> $row['OE'],
                    "LE"=> $row['LE'],
                    "DE"=> $row['DE'],
                    "NUME"=> $row['NUME'],
                    "MZE"=> $row['MZE'],
                    "LTE"=> $row['LTE'],
                    "URBE"=> $row['URBE'],
                    "DTTOE"=> $row['DTTOE'],
                    "TRASLDE"=> $row['TRASLDE'],
                    "MEDICORE"=> $row['MEDICORE'],
                    "ACOMP"=> $row['ACOMP'],
                    "DNI"=> $row['DNI'],
                    "PARENT"=> $row['PARENT'],
                    "PERSH"=> $row['PERSH'],
                    "PERSHM"=> $row['PERSHM'],
                    "NOMBREPERS"=> $row['NOMBREPERS'],
                    "EDADPERS"=> $row['EDADPERS'],
                    "SEXOPERS"=> $row['SEXOPERS'],
                    "DNIPERS"=> $row['DNIPERS'],
                    "PULSO"=> $row['PULSO'],
                    "RESP"=> $row['RESP'],
                    "PARTERIAL"=> $row['PARTERIAL'],
                    "SPO"=> $row['SPO'],
                    "NEUROLOGICO"=> $row['NEUROLOGICO'],
                    "REFLEJOC"=> $row['REFLEJOC'],
                    "SINTG"=> $row['SINTG'],
                    "DIAGP"=> $row['DIAGP'],
                    "TRATR"=> $row['TRATR'],
                    "MATERIALU"=> $row['MATERIALU'],
                    "OBSP"=> $row['OBSP'],
                    "OADD"=> $row['OADD'],
                );
                array_push($peliculas, $item);
            }
        
            echo json_encode($peliculas);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }

    /* Obteniendo solo un dato de cada tabla */

    function getByIdParte($NE){
        $pelicula = new Parte();
        $peliculas = array();

        $res = $pelicula->obtenerParte($NE);

        if($res->rowCount() == 1){
            $row = $res->fetch();
        
            $item=array(
                "ID" => $row['ID'],
                    "NE" => $row['NE'],
                    "DIA" => $row['DIA'],
                    "MES" => $row['MES'],
                    "SHORA"=> $row['SHORA'],
                    "IHORA"=> $row['IHORA'],
                    "KMSALIDA"=> $row['KMSALIDA'],
                    "KMINGRESO"=> $row['KMINGRESO'],
                    "JEFE"=> $row['JEFE'],
                    "TPILOTO"=> $row['TPILOTO'],
                    "NPILOTO"=> $row['NPILOTO'],
                    "ORADIO"=> $row['ORADIO'],
                    "TELEFONO"=> $row['TELEFONO'],
                    "CSERVICIO"=> $row['CSERVICIO'],
                    "UCGBVP"=> $row['UCGBVP'],
                    "UPOLI"=> $row['UPOLI'],
                    "MPOLI"=> $row['MPOLI'],
                    "SAMU"=> $row['SAMU'],
                    "MSAMU"=> $row['MSAMU'],
                    "SC"=> $row['SC'],
                    "MSC"=> $row['MSC'],
                    "OE"=> $row['OE'],
                    "LE"=> $row['LE'],
                    "DE"=> $row['DE'],
                    "NUME"=> $row['NUME'],
                    "MZE"=> $row['MZE'],
                    "LTE"=> $row['LTE'],
                    "URBE"=> $row['URBE'],
                    "DTTOE"=> $row['DTTOE'],
                    "TRASLDE"=> $row['TRASLDE'],
                    "MEDICORE"=> $row['MEDICORE'],
                    "ACOMP"=> $row['ACOMP'],
                    "DNI"=> $row['DNI'],
                    "PARENT"=> $row['PARENT'],
                    "PERSH"=> $row['PERSH'],
                    "PERSHM"=> $row['PERSHM'],
                    "NOMBREPERS"=> $row['NOMBREPERS'],
                    "EDADPERS"=> $row['EDADPERS'],
                    "SEXOPERS"=> $row['SEXOPERS'],
                    "DNIPERS"=> $row['DNIPERS'],
                    "PULSO"=> $row['PULSO'],
                    "RESP"=> $row['RESP'],
                    "PARTERIAL"=> $row['PARTERIAL'],
                    "SPO"=> $row['SPO'],
                    "NEUROLOGICO"=> $row['NEUROLOGICO'],
                    "REFLEJOC"=> $row['REFLEJOC'],
                    "SINTG"=> $row['SINTG'],
                    "DIAGP"=> $row['DIAGP'],
                    "TRATR"=> $row['TRATR'],
                    "MATERIALU"=> $row['MATERIALU'],
                    "OBSP"=> $row['OBSP'],
                    "OADD"=> $row['OADD'],
            );
            array_push($peliculas, $item);
            $this->printJSON($peliculas);
        }else{
            $this->error('No hay elementos');
        }
    }
    function getByIdUsuario($CODIGO){
        $pelicula = new Parte();
        $peliculas = array();

        $res = $pelicula->obtenerUsuario($CODIGO);

        if($res->rowCount() == 1){
            $row = $res->fetch();
        
            $item=array(
                "PERMISOID" => $row['PERMISOID'],
                "CODIGO" => $row['CODIGO'],
                "CONTRASENIA" => $row['CONTRASENIA'],
                "NOMBRES" => $row['NOMBRES'],
            );
            array_push($peliculas, $item);
            $this->printJSON($peliculas);
        }else{
            $this->error('No hay elementos');
        }
    }

    /* Nuevo Usuario o Parte */

    function addParte($parte){
        $pelicula = new Parte();
        $res = $pelicula->nuevaParte($parte);
        $this->exito('Nueva Parte registrada');
    }
    function addUsuario($usuario){
        $pelicula = new Parte();
        $res = $pelicula->nuevoUsuario($usuario);
        $this->exito('Nuevo Usuario registrado');
    }


    function error($mensaje){
        echo '<code>' . json_encode(array('mensaje' => $mensaje)) . '</code>'; 
    }

    function exito($mensaje){
        echo '<code>' . json_encode(array('mensaje' => $mensaje)) . '</code>'; 
    }

    function printJSON($array){
        echo '<code>'.json_encode($array).'</code>';
    }

    function getError(){
        return $this->error;
    }
}

?>