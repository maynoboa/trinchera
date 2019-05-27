<?php
require 'seguridad-global-2.php';
$usu2=$_POST['usu2'];
require_once ('conexion_bases.php');	
$mysqli = new mysqli($se, $us, $co, $bd);

if ($mysqli->connect_errno) {
    printf("Error en la conexion: %s\n", $mysqli->connect_error);
    exit();
}
$mysqli->query("DELETE FROM seg WHERE id_us2=".$usu2);

require 'queNosigo.php';
?>