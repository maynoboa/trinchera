<?php

	$usuario = $_POST["co_usu"];
	$clave = $_POST["cl_usu"];
	$correo_electronico = $_POST["correo_usu"];
	$nombre_usuario = $_POST["no_usu"];
	$apellido_1 = $_POST["ape1_usu"];
	$apellido_2 = $_POST["ape2_usu"];
	$pais = $_POST["pais_usu"];
	$sexo = $_POST["sex_usu"];


	//$fech_publ = strftime("%Y-%m-%d, time()");

    require_once ('con1.php');
	$mysqli->set_charset("utf8");

    if ($mysqli->query("INSERT INTO usu (co_usu, cl_usu, correo_usu, no_usu, ape1_usu, ape2_usu, pais_usu, sex_usu) VALUES ('".$usuario."','".$clave."',
	'".$correo_electronico."', '".$nombre_usuario."', '".$apellido_1."', '".$apellido_2."', '".$pais."', '".$sexo."')")===TRUE) {

		printf("datos insertados");

	}else{

		printf("error") ;
	}

    $resultado->free();
    /* CIERRA LA CONEXIÓN */
    $mysqli->close();   
?>