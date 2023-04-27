<?php 
echo "<pre>";
var_dump($_GET);
echo "</pre>";



$nombre = $_GET["nombre"];
$edad = (int)$_GET["edad"];


echo "hola soy $nombre y tengo $edad años ";

?>