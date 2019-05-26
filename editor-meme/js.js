$(document).ready(function () {
	// $(".show_img").click(function (event) {

    // 	$.ajax({
    //     		type: "POST",
    //     		url: "memes.php",
    // 	}).done(function (msg) {
    //     		$(".cajaimg").html(msg);
    //     		// LIMPIEZA DE CONTROLES
    //     		//$("#texto1").val("");
    // 	});
    // });
    $("#btn-Preview-Image").click(function () {
		var id = this.id; 
		// alert(2);
	});
/*modal*/  
		// $('#btn-Preview-Image').click(function(){
		// 	$('#screen, #previewImage').show();
		// });

		// $('#screen, #previewImage').click(function(){
		// 	$('#screen, #previewImage').hide();
		// });
});

var foto = new Array();
foto[0] = "memes/no.jpeg";
foto[1] = "memes/man.jpeg";
foto[2] = "memes/pooh.jpeg";
foto[3] = "memes/pikachu.jpeg";
foto[4] = "memes/mente.png";
foto[5] = "memes/jerry.jpg";
foto[6] = "memes/Monkey.jpg";
foto[7] = "memes/MyMommaSaid.jpg";
foto[8] = "memes/TiredSpongebob.jpg";

function pulsar(){
    var imagen = document.getElementById("blah");   
	imagen.src=foto[1];

}
function pulsar1(){
    var imagen = document.getElementById("blah");   
	imagen.src=foto[0];
	/*padre*/
	document.getElementById("editone").style.marginTop = "0px";
	document.getElementById("editone").style.marginLeft = "0";
	document.getElementById("editone").style.width = "19%";

	document.getElementById("edit").style.marginTop = "0px";
	document.getElementById("edit").style.marginLeft = "0px";
	document.getElementById("edit").style.color = "black";
	document.getElementById("edit").style.fontFamily = "Impact";
	document.getElementById("edit").style.textShadow = "none";
}
function pulsar2(){
    var imagen = document.getElementById("blah");   
	imagen.src=foto[2];
	document.getElementById("edit").style.marginTop = "92px";
	document.getElementById("edit").style.marginLeft = "211px";
	// var btn = document.createElement("div");
	//   btn.innerHTML = "CLICK ME";
	//   document.body.appendChild(btn);
	//  newdiv.setAttribute("id", "nuevo");
}
function pulsar3(){
    var imagen = document.getElementById("blah");   
	imagen.src=foto[3];
	/*padre*/
	document.getElementById("editone").style.marginTop = "0px";
	document.getElementById("editone").style.marginLeft = "0%";
	document.getElementById("editone").style.width = "42%";
		/*hijo*/
	document.getElementById("edit").style.marginTop = "0px";
	document.getElementById("edit").style.marginLeft = "0px";
	document.getElementById("edit").style.width = "100%";
	document.getElementById("edit").style.fontSize = "2em";
	document.getElementById("edit").style.color = "white";
}
function pulsar4(){
    var imagen = document.getElementById("blah");   
	imagen.src=foto[4];
	document.getElementById("edit").style.marginTop = "0px";
	document.getElementById("edit").style.marginLeft = "0px";
	document.getElementById("edit").style.color = "white";
	document.getElementById("edit").style.fontFamily = "Impact";
	document.getElementById("edit").style.fontSize = "2em";
	document.getElementById("edit").style.color = "white";
	document.getElementById("edit").style.width = "100%";
}
function pulsar(){
    var imagen = document.getElementById("blah");   
	imagen.src=foto[1];


	/*padre*/
	document.getElementById("editone").style.marginTop = "0px";
	document.getElementById("editone").style.marginLeft = "-9%";
	document.getElementById("editone").style.width = "19%";

	/*hijo*/
	document.getElementById("edit").style.marginTop = "100%";
	document.getElementById("edit").style.marginLeft = "0px";
	document.getElementById("edit").style.color = "white";
	document.getElementById("edit").style.fontFamily = "helvetica";
	document.getElementById("edit").style.fontSize = "2em";
	document.getElementById("edit").style.color = "white";
	document.getElementById("edit").style.width = "100%";
	document.getElementById("edit").style.textShadow = "3px 1px 2px #0404040";
	/*new caja*/
	// var newDiv = document.createElement("div"); 
	// var newContent = document.createTextNode("otro div"); 
	// newDiv.appendChild(newContent);
	// añade el elemento creado y su contenido al DOM 
	// var currentDiv = document.getElementById("editone"); 
	// document.getElementById("editor").appendChild(newDiv);
	// document.getElementsByTagName("div")[0].setAttribute("class", "edittwo"); 

}
function pulsar5(){
    var imagen = document.getElementById("blah");   
	imagen.src=foto[5];
	/*padre*/
	document.getElementById("editone").style.marginTop = "0px";
	document.getElementById("editone").style.marginLeft = "0%";
	document.getElementById("editone").style.width = "42%";
		/*hijo*/
	document.getElementById("edit").style.marginTop = "0px";
	document.getElementById("edit").style.marginLeft = "0px";
	document.getElementById("edit").style.width = "100%";
	document.getElementById("edit").style.fontSize = "2em";
	document.getElementById("edit").style.color = "black";
}
function pulsar6(){
    var imagen = document.getElementById("blah");   
	imagen.src=foto[6];
	/*padre*/
	document.getElementById("editone").style.marginTop = "0px";
	document.getElementById("editone").style.marginLeft = "0%";
	document.getElementById("editone").style.width = "42%";
		/*hijo*/
	document.getElementById("edit").style.marginTop = "0px";
	document.getElementById("edit").style.marginLeft = "0px";
	document.getElementById("edit").style.width = "100%";
	document.getElementById("edit").style.fontSize = "2em";
	document.getElementById("edit").style.color = "black";
}
function pulsar7(){
    var imagen = document.getElementById("blah");   
	imagen.src=foto[7];
	/*padre*/
	document.getElementById("editone").style.marginTop = "0px";
	document.getElementById("editone").style.marginLeft = "0%";
	document.getElementById("editone").style.width = "42%";
		/*hijo*/
	document.getElementById("edit").style.marginTop = "0px";
	document.getElementById("edit").style.marginLeft = "0px";
	document.getElementById("edit").style.width = "100%";
	document.getElementById("edit").style.fontSize = "2em";
	document.getElementById("edit").style.color = "black";
}
function pulsar8(){
    var imagen = document.getElementById("blah");   
	imagen.src=foto[8];
	/*padre*/
	document.getElementById("editone").style.marginTop = "0px";
	document.getElementById("editone").style.marginLeft = "0%";
	document.getElementById("editone").style.width = "42%";
		/*hijo*/
	document.getElementById("edit").style.marginTop = "0px";
	document.getElementById("edit").style.marginLeft = "0px";
	document.getElementById("edit").style.width = "100%";
	document.getElementById("edit").style.fontSize = "2em";
	document.getElementById("edit").style.color = "black";
}
/*----------------vue---------------------*/
var app6 = new Vue({
	el: '#app-6',
	data: {
	  message: ''
	}
  })
