<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Origin");
$servidor = "us-cdbr-east-06.cleardb.net"; $usuario = "b97c8e31e12936"; $contrasenia = "53886d91"; $nombreBaseDatos = "heroku_f06ce9fb0f4d68b";
$conexionBD = new mysqli($servidor, $usuario, $contrasenia, $nombreBaseDatos);

    $data = json_decode(file_get_contents("php://input"));
    $CODIGO=$data->CODIGO;
    $CONTRASENIA=$data->CONTRASENIA;
    $PERMISOID=$data->PERMISOID;
    $NOMBRES=$data->NOMBRES;
        if(($CODIGO!="")&&($CONTRASENIA!="")&&($PERMISOID!="")&&($NOMBRES!="")){
            
    $sqlEmpleaados = mysqli_query($conexionBD,"INSERT INTO usuarios(CODIGO,CONTRASENIA,PERMISOID,NOMBRES) VALUES('$CODIGO','$CONTRASENIA','$PERMISOID','$NOMBRES') ");
    echo json_encode(["success"=>1]);
        }
    exit();

?>