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
        if(($CODIGO!="")&&($CONTRASENIA!="")){
            
            $sqlEmpleaados = mysqli_query($conexionBD,"SELECT * FROM usuarios WHERE CODIGO=".$CODIGO +"AND CONTRASENIA=".$CONTRASENIA);
            if(mysqli_num_rows($sqlEmpleaados) > 0){
                $empleaados = mysqli_fetch_all($sqlEmpleaados,MYSQLI_ASSOC);
                echo json_encode($empleaados);
                exit();
            }
            else{  echo json_encode(["success"=>0]); }

        }
        exit();



if (isset($_GET["consultar"])){
    $sqlEmpleaados = mysqli_query($conexionBD,"SELECT * FROM empleados WHERE id=".$_GET["consultar"]);
    
}
?>