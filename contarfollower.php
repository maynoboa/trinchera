<?php
require 'seguridad-global-2.php';
require_once ('conexion_bases.php');
$mysqli->set_charset("utf8");
$usuario = $_SESSION['id_usu'];
if ($resul = $mysqli->query("SELECT count(id_seg) FROM seg WHERE id_us1=.$usuario.")){
        echo "<div>".$resul."</div>";   
}
else{echo "No sigues a ".$resul."nadie";}
?>    