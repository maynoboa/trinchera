<?php
require 'seguridad-global-2.php';
require_once ('con1.php');
$mysqli->set_charset("utf8");
$resultado = $mysqli->query("SELECT id_usu, no_usu,img from usu 
                            where id_usu not in (select id_us2 from seg
                            where id_us1=".$_SESSION['id_usu'].") 
                            and ni_usu=2 and id_usu!=".$_SESSION['id_usu']);
$numeroRegistros = $resultado->num_rows;
if ($numeroRegistros) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "<div id='".$fila['id_usu']."' class='usu1 bor'><div class='circulo'><img src='".$fila['img']."' class='imagen'></div>".$fila['no_usu']."</div>";
    }
}
else{echo 'No hay usuarios';}
$resultado->free();
?>    

