$(document).ready(function () {
    $("#b1").click(function (event) {
        /* SI ALGUNO DE LOS CAMPOS ESTÁ VACÍO NO SE REALIZA LA PETICIÓN A LA BASE DE DATOS */
        if ($("#usuario").val().trim().length === 0 || $("#clave").val().trim().length === 0) {
          $("#resultado").html("Indique Usuario y Clave.");
        }
        else {

          var objetoDatos1 = { "c1":$("#usuario").val(), "c2":$("#clave").val() };
          var objetoJSON1 = JSON.stringify(objetoDatos1);

          $.getJSON("control-accesibilidad.php",{ datos: objetoJSON1},
          function(json){

            if (json.v1 == "no") {
                /* ACCESO DENEGADO */
                $("#resultado").html("Usuario y/o clave incorrectos.")
            }
            else if (json.v3 == 0) {
                /* ACCESO ACEPTADO.
                 * SE REDIRIGE A acceso-aceptado-n.php
                 * SIN DESTRUIR LAS VARIABLES DE SESIÓN  */
                var paginaDestino="nosepuede.php";
                window.location.href = paginaDestino;
            }
            else if (json.v1 == "si") {
                /* ACCESO ACEPTADO.
                 * SE REDIRIGE A acceso-aceptado-n.php
                 * SIN DESTRUIR LAS VARIABLES DE SESIÓN  */
                var paginaDestino="acceso-" + json.v2 + ".php";
                window.location.href = paginaDestino;
            }

          });

          $("#usuario").val("");
          $("#clave").val("");

        }

    });

});

$(document).ready(function () {
    $("#reg_usu").click(function (event) {

        if ($("#usuario").val().trim().length === 0 || $("#clave").val().trim().length === 0 
        || $("#correo_electronico").val().trim().length === 0 || $("#nombre_usuario").val().trim().length === 0
        || $("#apellido_1").val().trim().length === 0 || $("#apellido_2").val().trim().length === 0
        || $("#pais").val().trim().length === 0 || $("#sexo").val().trim().length === 0) {
            $("#resultado_3").html("Completa todos los datos para el registro.");
        }
        else {
            $.ajax({
                type: "POST",
                url: "registrar-usuario.php",
                data:{
                    co_usu: $("#usuario").val(),
                    cl_usu: $("#clave").val(),
                    correo_usu: $("#correo_electronico").val(),
                    no_usu: $("#nombre_usuario").val(),
                    ape1_usu: $("#apellido_1").val(),
                    ape2_usu: $("#apellido_2").val(),
                    pais_usu: $("#pais").val(),
                    sex_usu: $("#sexo").val(),
                    img: $("#img").val()}

                    
            }).done(function (msg){
                $("#usuario").val("");
                $("#clave").val("");
                $("#correo_electronico").val("");
                $("#nombre_usuario").val("");
                $("#apellido_1").val("");
                $("#apellido_2").val("");
                $("#pais").val("");
                $("#sexo").val("");
                $("#resultado_3").html("Datos insertados correctamente. Pulse el botón 'Volver Página Inicial' para poder iniciar tu sesión.");
            });
        } 
    });
});


$(document).ready(function () {    
 // $(".usu1").click(function (event) {
    $('body').on('click', '.usu1', function() {
        $.ajax({
            type: "POST",
            url: "usuarios-a-seguir.php",
            data: { id_us2: $(this).attr("id") }
          }).done(function( msg ) {
            $("#queSisigo").html( msg );

                $.ajax({
                    type: "POST",
                    url: "queNosigo.php"
                }).done(function( msg ) {
                    $("#queNosigo").html( msg );
                });

        });
    });
});

$(document).ready(function () {    
   // $(".usu2").click(function (event) {
       
       $('body').on('click', '.usu2', function() {
           $.ajax({
               type: "POST",
               url: "dejar-de-seguir.php",
               data: { usu2: $(this).attr("id") }
             }).done(function( msg ) {
               $("#queNosigo").html( msg );
   
                   $.ajax({
                       type: "POST",
                       url: "queSisigo.php"
                   }).done(function( msg ) {
                       $("#queSisigo").html( msg );
                   });
   
           });
       });
   });

$(document).ready(function () {
	$("#boton1").click(function (event) {

    	$.ajax({
        		type: "POST",
        		url: "publicar.php",
        		data: {
                    texto1: $("#texto1").val()
                
                }
    	}).done(function (msg) {
        		$(".contenidoPublicacion").html(msg);
        		// LIMPIEZA DE CONTROLES
        		$("#texto1").val("");
    	});
	});
});

$(document).ready(function () {
	$("#botonpub1").click(function (event) {
        location.reload();
    	// $.ajax({
        // 		type: "POST",
        // 		url: "actualizar.php"       		
    	// }).done(function (msg) {
        // 		$(".contenidoPublicacion").html(msg);
        // 		// LIMPIEZA DE CONTROLES
        // 		// $("#texto1").val("");
    	// });
	});
});

$(document).ready(function () {
	$('body').on('click', '.on', function() {

    	$.ajax({
        		type: "POST",
                url: "usuarios-a-bloquear.php"
                 ,data: {id_usu: $(this).attr("id")}
    	}).done(function (msg) {
            $("#queSisigo").html( msg );
            $.ajax({
                type: "POST",
                url: "activos.php"
            }).done(function( msg ) {
                $("#queNosigo").html( msg );
            });
        		
    	});
	});
});
$(document).ready(function () {    
    // $(".usu1").click(function (event) {
       $('body').on('click', '.usu3', function() {
           $.ajax({
               type: "POST",
               url: "usuario-a-desbloquear.php",
               data: { 
                   id_us2: $(this).attr("id") 
                }
             }).done(function( msg ) {
               $("#queNosigo").html( msg );
   
                   $.ajax({
                       type: "POST",
                       url: "desactivados.php"
                   }).done(function( msg ) {
                       $("#queSisigo").html( msg );
                   });
   
           });
       });
   });

   function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.resultadoo').attr('src', e.target.result);
            
        };

        reader.readAsDataURL(input.files[0]);
    }
}

   1
   2
   3
   4
   5
   6
   7
   8
   9
   10
   11
   12
   13
   14
   15
   16
   17
   18
   19
   20
   21
   22
   23
   24
   25
   26
   27
   28
   29
   30
   31
   32
   33
   34
   35
   36
   37
   38
   39
   function GetCookie(name) {
       var arg=name+"=";
       var alen=arg.length;
       var clen=document.cookie.length;
       var i=0;
    
       while (i<clen) {
           var j=i+alen;
    
           if (document.cookie.substring(i,j)==arg)
               return "1";
           i=document.cookie.indexOf(" ",i)+1;
           if (i==0)
               break;
       }
    
       return null;
   }
    
   function aceptar_cookies(){
       var expire=new Date();
       expire=new Date(expire.getTime()+7776000000);
       document.cookie="cookies_surestao=aceptada; expires="+expire;
    
       var visit=GetCookie("cookies_surestao");
    
       if (visit==1){
           popbox3();
       }
   }
    
   $(function() {
       var visit=GetCookie("cookies_surestao");
       if (visit==1){ popbox3(); }
   });
    
   function popbox3() {
       $('#overbox3').toggle();
   }
   
   
  //-----------------like
