<?php
if (!isset($_SESSION)) {
    session_start();
}
if ($_SESSION["autentificado"] != "si" || $_SESSION["ni_usu"] != 2) {
    header("Location: inicio_sesion.php");
    exit();
}
if ($_SESSION["es_usu"] = 0) {
    header("Location: nosepuede.php");
    exit();
}
?>
