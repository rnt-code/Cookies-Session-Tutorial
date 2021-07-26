<?php
    $arr_cookie_options = [
        "expires" => time() - 4800,
        "path" => "/",
        "domain" => "localhost",
        "secure" => true,
        "httponly" => true,
        "samesite" => "None" //None || Lax || Strict
    ];
    setcookie('cookie1','',$arr_cookie_options);
    //setcookie('cookie1','',time()-1000);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Borrar</title>
    </head>
    <body>
        <a href="readcookie.php">Verificar</a>
    </body>
</html>