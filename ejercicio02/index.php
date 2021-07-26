<?php
    if(isset($_COOKIE['visita'])) {
        echo"Qué alegría verte de nuevo por aquí";
    }
    else {
        $arr_cookie_options = [
            "expires" => time() + 31536000,
            "path" => "/",
            "domain" => "localhost",
            "secure" => true,
            "httponly" => true,
            "samesite" => "None" //None || Lax || Strict
        ];
        setcookie('visita', 'nombre', $arr_cookie_options);
        echo"Bienvenido a mi página por primera vez";
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