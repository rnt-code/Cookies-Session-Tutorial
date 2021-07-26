<?php
if(isset($_COOKIE['contador'])) {
    echo"Hola de nuevo. ".$_COOKIE["contador"];
    $arr_cookie_options = [
        "expires" => time() + 364*24*60*60,
        "path" => "/",
        "domain" => "localhost",
        "secure" => true,
        "httponly" => true,
        "samesite" => "None" //None || Lax || Strict
    ];
    setcookie('contador', $_COOKIE["contador"]+1, $arr_cookie_options);
}
else {
    $arr_cookie_options = [
        "expires" => time() + 364*24*60*60,
        "path" => "/",
        "domain" => "localhost",
        "secure" => true,
        "httponly" => true,
        "samesite" => "None" //None || Lax || Strict
    ];
    setcookie("contador", 1, $arr_cookie_options);
    echo"Bienvenido por primera vez a nuestra página";
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