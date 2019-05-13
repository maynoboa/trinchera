<?php
//session_start();
require 'seguridad-global-2.php';
$post=$_POST['id_like'];
$usuario = $_SESSION['id_usu'];
require_once ('con1.php');	
$mysqli = new mysqli($se, $us, $co, $bd);
if ($mysqli->connect_errno) {
    printf("Error en la conexion: %s\n", $mysqli->connect_error);
    exit();
}

//$post = mysql_real_escape_string($_POST['id']);

$comprobar = $mysqli->query("SELECT * FROM likes WHERE post = '".$post."' AND usuario = '".$usuario."'");

$count = $comprobar->num_rows;

$resultado2 = $mysqli->query("SELECT no_usu ,img from usu where id_usu=".$usuario."");
while ($fila2 = $resultado2->fetch_assoc() ) {
	$nombre=$fila2['no_usu'];
	$img=$fila2['img'];
	
}
$resultado3 = $mysqli->query("SELECT co_pub,fe_pub from pub where id_usu='".$usuario."' and id_pub='".$post."'");
$fila3 = $resultado3->fetch_assoc();

if ($count == 0) {

	//$insert = 
	$mysqli->query("INSERT INTO likes (usuario,post,fecha) values ('$usuario','$post',now())");
// 	$update = 
	$mysqli->query("UPDATE pub SET likes = likes+1 WHERE id_pub = '".$post."'");
	// 

	echo "
	
		<div class='nompub'>
			<img src=" .$img." class='usu1 ber'>
			<div class='maque'>".$nombre."</div>
		</div>		
		<div class='comen'>".$fila3['co_pub']."
			<div class='size'>publicado:".$fila3['fe_pub']."
			</div>
			
		</div>	
		<div class='like1' id='".$post."'>								
			<img class='nomegusta'  src='img/likes/corazon.png'> no me gusta
		</div>
		<span id='a_".$post."'>()</span>            
 
		
	 ";
 }
 else 
 {

	//  $delete = 
	 $mysqli->query("DELETE FROM likes WHERE post = ".$post." AND usuario = ".$usuario."");
	//  $update =
	  $mysqli->query("UPDATE pub SET likes = likes-1 WHERE id_pub = '".$post."'");

		echo "
		<div class='nompub'>
				<img src=" .$img." class='usu1 ber'>
				<div class='maque'>".$nombre."</div>
			</div>
				<div class='comen'>".$fila3['co_pub']."
				<div class='size'>publicado:".$fila3['fe_pub']."
			</div>	
		</div>
		<div class='like1' id='".$post."'>	
			<img src='img/likes/como.png'> me gusta
		</div>	
		<span id='a_".$post."'>()</span>            
		"				
			;
	  
 }

// $contar = mysql_query("SELECT likes FROM pub WHERE id_pub = ".$post."");
// $cont = mysql_fetch_array($contar);
// $likes = $cont['likes'];

// 	if ($count >= 1) { 
// 		$megusta = "<i class='fa fa-thumbs-o-up'></i> Me gusta"; $likes = " (".$likes++.")"; 
// 	} 
// 	else { 
// 		$megusta = "<i class='fa fa-thumbs-o-up'></i> No me gusta"; $likes = " (".$likes--.")"; 
// 	}

// $datos = array('likes' =>$likes,'text' =>$megusta);

// echo json_encode($datos);

?>