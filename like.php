<?php
require 'seguridad-global-2.php';
require_once ('con1.php');	
$mysqli = new mysqli($se, $us, $co, $bd);
if ($mysqli->connect_errno) {
    printf("Error en la conexion: %s\n", $mysqli->connect_error);
    exit();
}
$mysqli->query("INSERT INTO reaccion (reaccion, ide_pub) VALUES ('like',".$_SESSION['id_usu'].")");
?>
