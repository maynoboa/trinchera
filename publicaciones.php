<?php

require_once ('con1.php');	
$mysqli = new mysqli($se, $us, $co, $bd);
if ($mysqli->connect_errno) {
    printf("Error en la conexion: %s\n", $mysqli->connect_error);
    exit();
}

$resultado = $mysqli->query("SELECT DISTINCT id_pub,co_pub,co_pub,id_usu,fe_pub from pub,seg where id_usu=".$_SESSION['id_usu']." or id_usu in (select id_us2 from seg where id_us1=".$_SESSION['id_usu'].")");

$numeroRegistros = $resultado->num_rows;
if ($numeroRegistros) {
    while ($fila = $resultado->fetch_assoc()) {
        $resultado2 = $mysqli->query("SELECT no_usu ,img from usu where id_usu=".$fila['id_usu']."");
        while ($fila2 = $resultado2->fetch_assoc() ) {
            $nombre=$fila2['no_usu'];
            $img=$fila2['img'];
        }
        echo "<div id='".$fila['id_pub']."' class='contenidoConcreto'><div class='nompub'><img src=" .$img." class='usu1 ber'><div class='maque'>".$nombre."</div></div>".$fila['co_pub']."<div class='size'>publicado:".$fila['fe_pub']."</div></div>";

    }
}
else{echo 'No hay publicaciones';}
$resultado->free();
// $mysqli->close();
?>
<!-- select a.no_usu, a.co_usu, b.id_us1,c.co_pub from usu a 
inner join seg b on a.id_usu = b.id_us1 
inner join pub c on b.id_us1=c.id_pub
where a.id_usu=3 -->

<!-- select a.id_usu,a.no_usu, a.co_usu, b.id_us1,c.co_pub from usu a 
inner join seg b on a.id_usu = b.id_us1 
inner join pub c on b.id_us1=c.id_pub
where a.id_usu=3 in (select b.id_us2 from usu a inner join seg b on a.id_usu = b.id_us1 where a.id_usu=3) -->

<!-- select c.id_pub,c.co_pub,c.id_usu,c.fe_pub,b.id_us1, b.id_us2 from pub c 
inner join seg b on b.id_us1=c.id_usu 
where b.id_us1=3 or b.id_us1 in (select id_us2 from seg where id_us1=3) -->