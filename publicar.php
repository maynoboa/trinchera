<?php
require 'seguridad-global-2.php';
$texto1=$_POST['texto1'];
require_once ('con1.php');	
$mysqli->set_charset("utf8");
$mysqli = new mysqli($se, $us, $co, $bd);
if ($mysqli->connect_errno) {
    printf("Error en la conexion: %s\n", $mysqli->connect_error);
    exit();
}
$mysqli->query("INSERT INTO pub (co_pub, id_usu) VALUES ('".$texto1."',".$_SESSION['id_usu'].")");

require 'publicaciones.php';
$resultado->free();
$mysqli->close();
?>