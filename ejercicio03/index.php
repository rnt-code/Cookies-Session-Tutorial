<?php
    $fecha = date("d/m/Y | H:i:s"); 
    //La fecha actual en la se visita la página web
    //La hora no se muestra bien, hay una diferencia. Me parece que se toma otro huso horario.
    $arr_cookie_options = [
        "expires" => time() + 3153600,
        "path" => "/",
        "domain" => "localhost",
        "secure" => true,
        "httponly" => true,
        "samesite" => "None" //None || Lax || Strict
    ];
    setcookie("fecha", $fecha, $arr_cookie_options);

    if(isset($_COOKIE['fecha'])) {
        echo"Hola de nuevo, tu última visita fue el ".$_COOKIE['fecha'];
    }
    else {
        echo"Es tu primera visita a nuestra página";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Cuerpo de la página</p>
</body>
</html>