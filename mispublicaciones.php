<?php
require 'seguridad-global-2.php';
require_once ('conexion_bases.php');	
$mysqli = new mysqli($se, $us, $co, $bd);
if ($mysqli->connect_errno) {
    printf("Error en la conexion: %s\n", $mysqli->connect_error);
    exit();
}
$resultado = $mysqli->query("SELECT DISTINCT id_pub,co_pub,co_pub,id_usu,fe_pub,img_pub from pub,seg where id_usu=".$_SESSION['id_usu']." order by fe_pub desc");
$numeroRegistros = $resultado->num_rows;
if ($numeroRegistros) {
    while ($fila = $resultado->fetch_assoc()) {
        $resultado2 = $mysqli->query("SELECT no_usu ,img from usu where id_usu=".$fila['id_usu']."");
        while ($fila2 = $resultado2->fetch_assoc() ) {
            $nombre=$fila2['no_usu'];
            $img=$fila2['img'];
        }
        if($fila['img_pub']==true){
            echo "
            <div id='".$fila['id_pub']."' class='contenidoConcreto'>
                <div class='nompub'>
                    <img src=" .$img." class='usu1 ber'>
                    <div class='maque'>".$nombre."</div>
                </div>
                <div class='comen'>".$fila['co_pub']."
                    <div class='size'>publicado:".$fila['fe_pub']."
                    </div>
                    <img src=".$fila['img_pub']." class='imgpub'>
                </div>
            </div>";
        }
        else{
            echo "
            <div id='".$fila['id_pub']."' class='contenidoConcreto'>
                <div class='nompub'>
                    <img src=" .$img." class='usu1 ber'>
                    <div class='maque'>".$nombre."</div>
                </div>
                <div class='comen'>".$fila['co_pub']."
                    <div class='size'>publicado:".$fila['fe_pub']."
                    </div>
                   
                </div>
            </div>";
        }
    }
}
else{echo 'No hay publicaciones';}
//  $resultado->free();
//   $mysqli->close();
?>
