<?php
require 'seguridad-global-2.php';
require_once ('con1.php');
$mysqli->set_charset("utf8");
$resultado = $mysqli->query("SELECT id_usu, no_usu, es_usu,img from usu where ni_usu=2 and es_usu=1");
$numeroRegistros = $resultado->num_rows;
if ($numeroRegistros) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "<div id='".$fila['id_usu']."' class='on bor'><div class='circulo'><img src='".$fila['img']."' class='imagen'></div>".$fila['no_usu']."</div>";
    }
}
else{echo 'No hay usuarios';}
$resultado->free();
?>    