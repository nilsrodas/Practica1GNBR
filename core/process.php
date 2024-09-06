<?php

$hosts_aceptados = array('localhost', '127.0.0.1', '192.168.167.15');
$metodo_aceptado = 'POST';
$usuario_correcto = "Admin";
$password_correcto = "Admin";
$txt_usuario = $_POST["txt_usuario"];
$txt_password = $_POST["txt_password"];
$token = "";

if (in_array($_SERVER['HTTP_HOST'],$hosts_aceptados)) {

    if ($_SERVER["REQUEST METHOD"]==$metodo_aceptado ) {

    if (isset($txt_usuario) && !empty($txt_usuario)) {
         
        if(isset($txt_password) && !empty($txt_password)){

            if ($txt_usuario==$usuario_correcto) {
                
                if ($txt_password==$password_correcto) {
                    
                    $ruta = "welcome.php";
                    $msg = "";
                    $codigo_estado = 200;
                    $texto_estado = "Ok";
                    list($usec,$sec) = explode(' ',microtime());
                    $token = base64_encode(date("Y-m-d H:i:s", $sec).substr($usec,1));
                }else {
                    $ruta = "";
                    $msg = "La contraseña digitada es incorrecta";
                    $codigo_estado = 401;
                    $texto_estado = "Unauthorized";
                    $token = "";
                }
            }else {
                $ruta = "";
                $msg = "El usuario digitado no está permitido";
                $codigo_estado = 401;
                $texto_estado = "Unauthorized";
                $token = "";
            }

        }else {
            $ruta = "";
            $msg = "El campo 'Password' no posee datos";
            $codigo_estado = 412;
            $texto_estado = "Precondition Failed";
            $token = "";
        }
    }else {
        $ruta = "";
        $msg = "El campo 'Usuario' no posee datos";
        $codigo_estado = 412;
        $texto_estado = "Precondition Failed";
        $token = "";
    }
} else {
        $ruta = "";
        $msg = "El método HTTP no es permitido";
        $codigo_estado = 405;
        $texto_estado = "Method Not Allowed";
        $token = "";
    }
    
}else {
    $ruta = "";
    $msg = "La dirección IP no está permitida";
    $codigo_estado = 406;
    $texto_estado = "Not Acceptable";
    $token = "";
}

$arreglo_respuesta = array(
    "status"=>((intval($codigo_estado)==200) ? "success": "error"),
    "error" =>((intval($codigo_estado)==200) ? "" : array("code"=>$codigo_estado,"menssage"=>$msg)),
    "data" =>array(
        "url"=>$ruta,
        "token"=>$token
    ),
    "count"=>1
);

header("HTTP/1,1 ".$codigo_estado. " ".$texto_estado);
header("Content-Type: application/json");
echo($arreglo_respuesta);

?>
