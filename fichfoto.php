<?php
$ubicacion = './imgSubidas/';
$archivo = $ubicacion . basename($_FILES['botonExaminar']['name']);
if (move_uploaded_file($_FILES['botonExaminar']['tmp_name'], $archivo)){
echo "Archivo subido correctamente.\n";
}
else{
 echo "Error en la subida del archivo.\n";
}
?>