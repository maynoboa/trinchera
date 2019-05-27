<?php
require 'seguridad-global-2.php';
require_once ('conexion_bases.php');
$mysqli->set_charset("utf8");
$post=$_POST['id_like'];
$usuario = $_SESSION['id_usu'];
$resul = $mysqli->query("SELECT count(post) FROM likes WHERE usu=.$usuario. and post=.$post.");
// $Registros = $resul->num_rows;
if ($resul) {
    while ($fila = $resul->fetch_assoc()) {
        echo "<div>".$resul."</div>";
    
    }
}
else{echo 'No hay like';}
$resul->free();
?>    