<?php
require 'seguridad-global-2.php';
$id_us2=$_POST['id_us2'];
require_once ('conexion_bases.php');	
$mysqli = new mysqli($se, $us, $co, $bd);
if ($mysqli->connect_errno) {
    printf("Error en la conexion: %s\n", $mysqli->connect_error);
    exit();
}
$mysqli->query("INSERT INTO seg (id_us1, id_us2) VALUES (".$_SESSION['id_usu'].",$id_us2)");

$resultado = $mysqli->query("SELECT id_us2, no_usu,img FROM usu,seg WHERE id_usu=id_us2 AND id_us1=".$_SESSION['id_usu']);
$numeroRegistros = $resultado->num_rows;
if ($numeroRegistros) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "<div id='".$fila['id_us2']."' class='usu2 bor'><div class='circulo'><img src='".$fila['img']."' class='imagen'></div>".$fila['no_usu']."</div>";

    }
}
else{echo 'Todavía no sigues a nadie';}
$resultado->free();
$mysqli->close();
?>