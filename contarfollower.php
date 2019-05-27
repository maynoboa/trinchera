<?php
require 'seguridad-global-2.php';
require_once ('con1.php');
$mysqli->set_charset("utf8");
$usuario = $_SESSION['id_usu'];
//  $Registros = $resul->num_rows;
if ($resul = $mysqli->query("SELECT count(id_seg) FROM seg WHERE id_us1=.$usuario.")){
        echo "<div>".$resul."</div>";   
}
else{echo "No sigues a ".$resul."nadie";}
//$resul->free();
?>    