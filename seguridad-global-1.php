<?php
/* INICIO DE LA SESIÓN SI NO ESTÁ INICIADA */
if (!isset($_SESSION)) {
    session_start();
}
/* COMPROBACIÓN DE QUE EL USUARIO ESTÁ AUTENTIFICADO EN SU CORRESPONDIENTE NIVEL */
if ($_SESSION["autentificado"] != "si" || $_SESSION["ni_usu"] != 1) {
    /* SI EL USUARIO NO ESTÁ AUTENTICADO SE LE REDIRIGE A inicio_sesion.php */
    header("Location: inicio_sesion.php");
    /* Y SE SALE DEL SCRIPT */
    exit();
}
?>
