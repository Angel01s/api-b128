<?php
    include_once 'apipartes.php';

    $api = new ApiParte();

    if(isset($_GET['NE'])){
        $NE = $_GET['NE'];

        if(is_numeric($NE)){
            $api->getByIdParte($NE);
        }else{
            $api->error('El NE es incorrecto');
        }
    }if(isset($_GET['CODIGO'])){
        $CODIGO = $_GET['CODIGO'];

        if(is_numeric($CODIGO)){
            $api->getByIdUsuario($CODIGO);
        }else{
            $api->error('El CODIGO es incorrecto');
        }
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