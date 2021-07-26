<?php
    $nom = $_POST["nombre"];
    $arr_cookie_options = [
        "expires" => time() + 4800,
        "path" => "/",
        "domain" => "localhost",
        "secure" => true,
        "httponly" => true,
        "samesite" => "None" //None || Lax || Strict
    ];
    setcookie("cookie1", $nom, $arr_cookie_options);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>setcookie</title>
    </head>
    <body>
    <p></p>
        <p>La cookie ya está activada, y su nombre es 'cookie1', el valor es es el nombre ingresado en el formulario</p>
        <a href="readcookie.php">Leer cookie:</a>  
    </body>
</html>