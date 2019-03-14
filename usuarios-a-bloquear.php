<?php
require 'seguridad-global-1.php';
 $id_usu=$_POST['id_usu'];
require_once ('con1.php');	
$mysqli = new mysqli($se, $us, $co, $bd);
if ($mysqli->connect_errno) {
    printf("Error en la conexion: %s\n", $mysqli->connect_error);
    exit();
}

$mysqli->query("UPDATE usu SET es_usu=0 WHERE id_usu=$id_usu");

require 'desactivados.php'
?>