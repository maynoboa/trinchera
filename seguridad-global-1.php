<?php
if (!isset($_SESSION)) {
    session_start();
}
if ($_SESSION["autentificado"] != "si" || $_SESSION["ni_usu"] != 1) {
    header("Location: inicio_sesion.php");
    exit();
}
?>
