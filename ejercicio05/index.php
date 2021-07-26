<?php
    if(isset($_COOKIE['color'])) {
        $color = $_POST["color"];
        $arr_cookie_options = [
            "expires" => time() + 364*24*60*60,
            "path" => "/",
            "domain" => "localhost",
            "secure" => true,
            "httponly" => true,
            "samesite" => "None" //None || Lax || Strict
        ];
        setcookie("color", $color, $arr_cookie_options);
    }
    else {
        if(isset($_COOKIE['color'])) {
            $color = $_COOKIE['color'];
        }
        else {
            $color ='white';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAmbio de color de fondo</title>
</head>
<body <?php echo "style='background-color: $color'" ;?>>
    
    <form action="index.php" method="post">
        <label for="color">Escoge tu color de fondo</label>
        <select name="color" id="color">
            <option value="red">Rojo</option>
            <option value="blue">Azúl</option>
            <option value="green">Verde</option>
            <option value="yellow">Amarillo</option>
            <option value="silver">Gris</option>
            <option value="black">Negro</option>
        </select>
        <br>
        <input type="submit" value="Cambiar color!">
    </form>

</body>
</html>
