<?php 
$user = "klascor";
$pass = 12345;

if ($_POST[usuario]==$user && $_POST[contracena]==$pass ) {
	session_start();
	$_SESSION["usuario"] = "klascor penetreitor";
	$_SESSION["pais"] = "venezolandia";
	header('location: dos.php');
}else{
	echo "SU NOMBRE DE USUARIO O CONTRASEÑA SON INCORRECTAS <br>";
	echo "<a href ='index.php'>INTENTAR DE NUEVO</a>";

}


 ?>