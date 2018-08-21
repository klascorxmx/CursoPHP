<?php 
session_start();

echo "VIENVENIDO ".$_SESSION["usuario"]."<br>";
echo "SU PAIS ES ".$_SESSION["pais"]."<br>";

echo "<a href ='tres.php'>cerrar sesion</a>";


 ?>