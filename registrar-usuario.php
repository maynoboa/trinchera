<?php

	$usuario = $_POST["co_usu"];
	$clave = $_POST["cl_usu"];
	$correo_electronico = $_POST["correo_usu"];
	$nombre_usuario = $_POST["no_usu"];
	$apellido_1 = $_POST["ape1_usu"];
	$apellido_2 = $_POST["ape2_usu"];
	$pais = $_POST["pais_usu"];
	$sexo = $_POST["sex_usu"];

	// $img = $_POST["img"]
	// $nombre_imagen=$_FILES['img']['name'];
	// $tipo_imagen=$_FILES['img']['type']; 
	// $tamano_imagen=$_FILES['img']['size'];

	// $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/trinchera/img/';
	// move_uploaded_file($_FILES['img']['tmp_name'],$carpeta_destino.$nombre_imagen);

	//$fech_publ = strftime("%Y-%m-%d, time()");

    require_once ('con1.php');
	$mysqli->set_charset("utf8");

    if ($mysqli->query("INSERT INTO usu (co_usu, cl_usu, correo_usu, no_usu, ape1_usu, ape2_usu, pais_usu, sex_usu, ni_usu, es_usu, img) VALUES ('".$usuario."','".$clave."',
	'".$correo_electronico."', '".$nombre_usuario."', '".$apellido_1."', '".$apellido_2."', '".$pais."', '".$sexo."', '2', '1', '".$img."')")===TRUE) {

		printf("datos insertados");

	}else{

		printf("error") ;
	}

    $resultado->free();
    /* CIERRA LA CONEXIÓN */
    $mysqli->close();   
?>