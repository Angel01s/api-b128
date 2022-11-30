<?php
    include_once 'apipartes.php';

    $api = new ApiParte();

    if(isset($_GET['NE'])){
        
        $NE = $_GET['NE'];
        $api->getByIdParte($NE);

    }if(isset($_GET['CODIGO'])){

        $CODIGO = $_GET['CODIGO'];
        $api->getByIdUsuario($CODIGO);   

    }elseif(isset($_GET['parte'])) {

        $parte = $_GET['parte'];
        $api->addParte($parte);

    }elseif(isset($_GET['usuario'])) {

        $usuario = $_GET['usuario'];
        $api->addUsuario($usuario);

    }
    else{
        $api->getAllPartes();
        $api->getAllUsuarios();
    }
?>