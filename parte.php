<?php

include_once 'db.php';

class Parte extends DB{
    
    /* Funccion para partes */

    function obtenerPartes(){
        $query = $this->connect()->query('SELECT * FROM partes');
        return $query;
    }

    function obtenerParte($NE){
        $query = $this->connect()->prepare('SELECT * FROM partes WHERE NE = :NE');
        $query->execute(['NE' => $NE]);
        return $query;
    }

    function nuevaParte($parte){
        $query = $this->connect()->prepare(

            'INSERT INTO partes (NE, DIA, MES, SHORA, IHORA, 
            KMSALIDA, KMINGRESO, JEFE, TPILOTO, NPILOTO, ORADIO, TELEFONO, CSERVICIO, UCGBVP, UPOLI, 
            MPOLI, SAMU, MSAMU, SC, MSC, OE, LE, DE, NUME, MZE, LTE, URBE, DTTOE, TRASLDE, MEDICORE, 
            ACOMP, DNI, PARENT, PERSH, PERSHM, NOMBREPERS, EDADPERS, DNIPERS, PULSO, RESP, PARTERIAL, 
            SPO, NEUROLOGICO, REFLEJOC, SINTG, DIAGP, TRATR, MATERIALU, OBSP, OADD, PASISTENTE, PAPOYO) 
            VALUES (:NE, :DIA, :MES, :SHORA, :IHORA, 
            :KMSALIDA, :KMINGRESO, :JEFE, :TPILOTO, :NPILOTO, :ORADIO, :TELEFONO, :CSERVICIO, :UCGBVP, :UPOLI, 
            :MPOLI, :SAMU, :MSAMU, :SC, :MSC, :OE, :LE, :DE, :NUME, :MZE, :LTE, :URBE, :DTTOE, :TRASLDE, :MEDICORE, 
            :ACOMP, :DNI, :PARENT, :PERSH, :PERSHM, :NOMBREPERS, :EDADPERS, :DNIPERS, :PULSO, :RESP, :PARTERIAL, 
            :SPO, :NEUROLOGICO, :REFLEJOC, :SINTG, :DIAGP, :TRATR, :MATERIALU, :OBSP, :OADD, :PASISTENTE, :PAPOYO)'
        );
        $query->execute(
            [
                'NE' => $parte['NE'], 'DIA' => $parte['DIA'], 'MES' => $parte['MES'], 'SHORA' => $parte['SHORA'], 
                'IHORA' => $parte['IHORA'], 'KMSALIDA' => $parte['KMSALIDA'], 'KMINGRESO' => $parte['KMINGRESO'],
                'JEFE' => $parte['JEFE'], 'TPILOTO' => $parte['TPILOTO'], 'NPILOTO' => $parte['NPILOTO'], 
                'ORADIO' => $parte['ORADIO'], 'TELEFONO' => $parte['TELEFONO'], 'CSERVICIO' => $parte['CSERVICIO'], 
                'UCGBVP' => $parte['UCGBVP'], 'UPOLI' => $parte['UPOLI'], 'MPOLI' => $parte['MPOLI'],
                'SAMU' => $parte['SAMU'], 'MSAMU' => $parte['MSAMU'], 'SC' => $parte['SC'],
            ]);
        return $query;
    }

    /* Funccion para usuarios */

    function obtenerUsuarios(){
        $query = $this->connect()->query('SELECT * FROM usuarios');
        return $query;
    }

    function obtenerUsuario($CODIGO){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE CODIGO = :CODIGO');
        $query->execute(['CODIGO' => $CODIGO]);
        return $query;
    }

    function nuevaUsuario($usuario){
        $query = $this->connect()->prepare('INSERT INTO usuarios (CODIGO, CONTRASENIA, PERMISOID, NOMBRES) VALUES (:CODIGO, :CONTRASENIA, :PERMISOID, :NOMBRES)');
        $query->execute(['CODIGO' => $usuario['CODIGO'], 'CONTRASENIA' => $usuario['CONTRASENIA'], 'PERMISOID' => $usuario['PERMISOID'], 'NOMBRES' => $usuario['NOMBRES']]);
        return $query;
    }

}

?>