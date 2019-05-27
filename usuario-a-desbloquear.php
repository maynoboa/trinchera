<?php
require 'seguridad-global-1.php';
$id_us2=$_POST['id_us2'];
require_once ('conexion_bases.php');	
$mysqli = new mysqli($se, $us, $co, $bd);

if ($mysqli->connect_errno) {
    printf("Error en la conexion: %s\n", $mysqli->connect_error);
    exit();
}
$mysqli->query("UPDATE usu SET es_usu=1 WHERE id_usu=".$id_us2);

require 'activos.php'

?>