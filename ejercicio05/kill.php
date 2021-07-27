<?php
    $color = 'white';
    $arr_cookie_options = [
        "expires" => time() - 2000,
        "path" => "/",
        "domain" => "localhost",
        "secure" => true,
        "httponly" => true,
        "samesite" => "None" //None || Lax || Strict
    ];
    setcookie('color', $color, $arr_cookie_options);
    header("Refresh: 0; url=index.php");
?>