<?php
/* INICIO DE LA SESIÓN SI NO ESTÁ INICIADA */
if (!isset($_SESSION)) {
    session_start();
}
/* COMPROBACIÓN DE QUE EL USUARIO ESTÁ AUTENTIFICADO EN SU CORRESPONDIENTE NIVEL */
if ($_SESSION["autentificado"] != "si" || $_SESSION["ni_usu"] != 2) {
    /* SI EL USUARIO NO ESTÁ AUTENTICADO SE LE REDIRIGE A index.php */
    header("Location: index.php");
    /* Y SE SALE DEL SCRIPT */
    exit();
}
if ($_SESSION["es_usu"] = 0) {
    /* SI EL USUARIO NO ESTÁ AUTENTICADO SE LE REDIRIGE A index.php */
    header("Location: nosepuede.php");
    /* Y SE SALE DEL SCRIPT */
    exit();
}
?>
