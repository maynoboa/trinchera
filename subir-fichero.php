<?php
$ubicacion = './img/';
require 'seguridad-global-2.php';
require_once ('con1.php');	
$mysqli = new mysqli($se, $us, $co, $bd);
if ($mysqli->connect_errno) {
    printf("Error en la conexion: %s\n", $mysqli->connect_error);
    exit();
}
$archivo = $ubicacion . basename($_FILES['file1']['name']);
if (move_uploaded_file($_FILES['file1']['tmp_name'], $archivo)){
echo "Archivo subido correctamente.\n";
$mysqli->query("UPDATE usu SET img='.$archivo.' WHERE id_usu=".$_SESSION['id_usu']);

$resultado = $mysqli->query("SELECT id_usu, no_usu, es_usu,img from usu where ni_usu=3 and es_usu=2");
$numeroRegistros = $resultado->num_rows;
if ($numeroRegistros) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "<div id='".$fila['id_usu']."' class='on bor'><div class='circulo'><img src='".$fila['img']."' class='imagen'></div>".$fila['no_usu']."</div>";
    }
}
/* INICIO - Captura de los datos extras enviados junto con la imagen */
/* echo $_POST['dato1']; */
/* FIN - Captura de los datos extras enviados junto con la imagen */
}
else{
switch ($_FILES['file1']['error']) {
 case UPLOAD_ERR_OK: /* UPLOAD_ERR_OK: Archivo subido correctamente */
 break;
 case UPLOAD_ERR_INI_SIZE:
 echo 'El fichero subido excede la directiva upload_max_filesize de php.ini.';
 break;
 case UPLOAD_ERR_FORM_SIZE:
 echo 'El fichero subido excede la directiva upload_max_filesize de php.ini.';
 break;
 case UPLOAD_ERR_PARTIAL:
 echo 'El fichero fue sólo parcialmente subido.';
 break;
 case UPLOAD_ERR_NO_FILE:
 echo 'No se subió ningún fichero.';
 break;
 case UPLOAD_ERR_NO_TMP_DIR:
 echo 'Falta la carpeta temporal.';
 break;
 case UPLOAD_ERR_CANT_WRITE:
 echo 'No se pudo escribir el fichero en el disco.';
 break;
 case UPLOAD_ERR_EXTENSION:
 echo 'Una extensión de PHP detuvo la subida de ficheros.';
 break;
 default:
 echo 'El archivo no se ha enviado.';
 break;
 }
}
?>