<?php
    include_once 'apipartes.php';

    $api = new ApiParte();

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        if(is_numeric($id)){
            $api->getById($id);
        }else{
            $api->error('El id es incorrecto');
        }
    }elseif(isset($_GET['item'])) {
        $item = $_GET['item'];
        $api->add($item);
    }
    else{
        $api->getAllPartes();
        $api->getAllUsuarios();
    }
?>