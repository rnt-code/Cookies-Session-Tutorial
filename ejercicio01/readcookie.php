<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p>Leyendo cookie...</p>
        <?php
            if(isset($_COOKIE['cookie1'])) {
                echo'Valor de la cookie: '.$_COOKIE['cookie1'];
            }
            else {
                echo'<br>No existe cookie de nombre "cookie1"';
            }
        ?>
        <br>
        <p></p>
        <a href="erasecookie.php">Boorar cookie:</a>
        <p></p>
        <a href="form.html">Volver al inicio</a>
    </body>
</html>