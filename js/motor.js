var form = document.forms.namedItem("form1");
form.addEventListener('submit', function(e) {
 var oResultado1 = document.getElementById("resultadoo");
 var oDatosFormulario1 = new FormData(document.forms.namedItem("form1"));
 oDatosFormulario1.append("dato1", "valor dato 1");
 var oRequest1 = new XMLHttpRequest();
 oRequest1.open("POST", "subir-fichero.php", true);
 oRequest1.onload = function(oEvent) {
 if (oRequest1.status == 200) {
 oResultado1.innerHTML = oRequest1.responseText;
 location.reload(true)
 }
 else {
 oResultado1.innerHTML = "Se ha producido un error: " + oRequest1.status;
 }
 };
 oRequest1.send(oDatosFormulario1);
 e.preventDefault();
}, false);