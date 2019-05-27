<?php
header("Content-Type: application/json; charset=UTF-8");
$datos = json_decode(stripslashes($_GET['datos']),true);

require_once ('conexion_bases.php');
$mysqli->set_charset("utf8");

/* PROTECCIÓN FRENTE A SQL INYECTADO (FUNCIÓN mysql_real_escape_string) */
$usuario = $mysqli->real_escape_string($datos['c1']);
$clave = $mysqli->real_escape_string($datos['c2']);
// 
  if ($resultado = $mysqli->query("SELECT id_usu, ni_usu, no_usu,ape1_usu,ape2_usu,correo_usu,pais_usu,es_usu,img FROM usu WHERE co_usu='$usuario' and cl_usu='$clave'")) {
   
    /* DETERMINA EL NÚMERO DE REGISTROS QUE DEVUELVE LA CONSULTA */
    $numeroRegistros = $resultado->num_rows;

    if ($numeroRegistros) {
        /* ACCESO ACEPTADO */
        /* INICIO DE LA SESIÓN, SI NO ESTÁ INICIADA */
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION["autentificado"] = "si";

        /* VOLCADO DE LOS DATOS EN VARIABLES DE SESION */
        while ($fila = $resultado->fetch_assoc()) {
          $_SESSION["id_usu"]=$fila['id_usu'];
          $_SESSION["ni_usu"]=$fila['ni_usu'];
          $_SESSION["no_usu"]=$fila['no_usu'];
          $_SESSION["ape1_usu"]=$fila['ape1_usu'];
          $_SESSION["ape2_usu"]=$fila['ape2_usu'];
          $_SESSION["correo_usu"]=$fila['correo_usu'];
          $_SESSION["pais_usu"]=$fila['pais_usu'];
          $_SESSION["es_usu"]=$fila['es_usu'];
          $_SESSION["img"]=$fila['img'];
        }

        /* LIBERA LA MATRIZ QUE ALBERGA EL CONJUNTO DE RESULTADOS */
        $resultado->free();
        /* CIERRA LA CONEXIÓN */
        $mysqli->close();

        /* SE DEVUELVE EL NIVEL AUTENTICADO A $.getJSON (function) EN funciones.js
         * INDICANDO QUE EL ACCESO HA SIDO ACEPTADO
         */
         /* Matriz retornada como matriz */
         $arr1 = array('v1' => $_SESSION["autentificado"], 'v2' => $_SESSION["ni_usu"], 'v3' => $_SESSION["es_usu"]);
         echo json_encode($arr1);

    } else {
        /* LIBERA LA MATRIZ QUE ALBERGA EL CONJUNTO DE RESULTADOS */
        $resultado->free();
        /* CIERRA LA CONEXIÓN */
        $mysqli->close();
        /* ACCESO DENEGADO */
        /* INICIO DE LA SESIÓN, SI NO ESTÁ INICIADA */
        if (!isset($_SESSION)) {
            session_start();
        }
        /* DESTRUCCIÓN DE LA SESIÓN */
        session_destroy();
        /* SE DEVUELVE 0 A $.getJSON (function) EN funciones.js
         * INDICANDO QUE EL ACCESO HA SIDO DENEGADO
         */

         /* SE DEVUELVE QUE NO ESTA AUTENTICADO Y EL NIVEL 0 A $.getJSON (function) EN funciones.js
          * INDICANDO QUE EL ACCESO HA SIDO DENEGADO
          */
          /* Matriz retornada como matriz */
          $arr1 = array('v1' => "no", 'v2' => 0);
          echo json_encode($arr1);
    }
}
?>
