<?php
$usuariook = 'pedro';
$passok = 'abcd';

if ($_POST['nombre'] == $usuariook && $_POST['pass'] == $passok) {
	session_start();
	$_SESSION["verificado"] = "si";
	echo "Tienes acceso a la página privada";
	echo "<a href='session3c.php'>Ve a ver el contenido privado!!</a>";
} else {
	header ("Location: session3a.php?error=si");
}

?>