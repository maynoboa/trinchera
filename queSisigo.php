<?php
require 'seguridad-global-2.php';
require_once ('conexion_bases.php');
$mysqli->set_charset("utf8");
$resultado = $mysqli->query("SELECT id_us2, no_usu,img FROM usu,seg WHERE id_usu=id_us2 AND id_us1=".$_SESSION['id_usu']);
$numeroRegistros = $resultado->num_rows;
if ($numeroRegistros) {
    while ($fila = $resultado->fetch_assoc()) {
        // echo "<div id='".$fila['id_us2']."' class='usu2'>".$fila['no_usu']."</div>";
        echo "<div id='".$fila['id_us2']."' class='usu2 bor'><div class='circulo'><img src='".$fila['img']."' class='imagen'></div>".$fila['no_usu']."</div>";

    }
}
else{echo 'No sigues a nadie';}
$resultado->free();
$mysqli->close();
?>
<!--SELECT COUNT(id_usu) FROM usu,seg WHERE id_usu= id_us2 AND id_us1 =3-->