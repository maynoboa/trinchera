<?php
require 'seguridad-global-2.php';
$texto1=$_POST['texto1'];
require_once ('con1.php');	
$mysqli = new mysqli($se, $us, $co, $bd);
if ($mysqli->connect_errno) {
    printf("Error en la conexion: %s\n", $mysqli->connect_error);
    exit();
}
$mysqli->query("INSERT INTO pub (co_pub, id_usu) VALUES ('".$texto1."',".$_SESSION['id_usu'].")");

$resultado = $mysqli->query("SELECT DISTINCT id_pub,co_pub,co_pub,id_usu from pub,seg where id_usu=".$_SESSION['id_usu']." or id_usu in (select id_us2 from seg where id_us1=".$_SESSION['id_usu'].")");
$numeroRegistros = $resultado->num_rows;
if ($numeroRegistros) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "<div id='".$fila['id_pub']."' class='contenidoConcreto'>".$fila['co_pub']."</div>";
        // echo "<div id='".$fila['id_usu']."' class='usu1 bor'><div class='circulo'><img src='".$fila['img']."' class='imagen'></div>".$fila['no_usu']."</div>";

    }
}
else{echo 'No hay publicaciones';}

$resultado->free();
$mysqli->close();
?>