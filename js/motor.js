var form = document.forms.namedItem("form1");
form.addEventListener('submit', function(e) {
 var oResultado1 = document.getElementById("resultadoo");
 var oDatosFormulario1 = new FormData(document.forms.namedItem("form1"));
 /* PRINCIPIO - Envío extra de datos, junto con la imagen */
 oDatosFormulario1.append("dato1", "valor dato 1");
 /* FIN - Envío extra de datos, junto con la imagen */
 var oRequest1 = new XMLHttpRequest();
 oRequest1.open("POST", "subir-fichero.php", true);
 oRequest1.onload = function(oEvent) {
 if (oRequest1.status == 200) {
 oResultado1.innerHTML = oRequest1.responseText;
 }
 else {
 oResultado1.innerHTML = "Se ha producido un error: " + oRequest1.status;
 }
 };
 oRequest1.send(oDatosFormulario1);
 e.preventDefault();
}, false);