$(document).ready(function () {
	$(".like").click(function () {
		var id = this.id; 
		//obtiene el primer id del hijo de la id#+id
		var ider = $('#'+id+ ' span').first().attr('id');
		alert(1);
    	$.ajax({
        		type: "POST",
				url: "megusta.php",
				// url: "totallike.php",
				data: {
					//id: id
				id_like: $(this).attr("id")
				}
				// ,
				// dataType: 'json'		
    	}).done(function (msg) {
        		$("#c_"+id).html(msg);
        		// LIMPIEZA DE CONTROLES
				// $("#texto1").val("");
				//  var likes = data['likes'];
				//  var text = data['text'];

				//  $("#likes_"+id).text(likes);
				//  $("#"+id).html(text);
    	});
	});
	
});
$(document).ready(function () {
$(".like1").click(function (event) {
		var id = this.id; 
		//obtiene el primer id del hijo de la id#+id
		var ider = $('#'+id+ ' span').first().attr('id');
		 alert(id);
    	$.ajax({
        		type: "POST",
				url: "megusta.php",
				// url: "totallike.php",
				data: {
					//id: id
				id_like: $(this).attr("id")
				}
				// ,
				// dataType: 'json'		
    	}).done(function (msg) {
        		$("#c_"+id).html(msg);
        		// LIMPIEZA DE CONTROLES
				// $("#texto1").val("");
				//  var likes = data['likes'];
				//  var text = data['text'];

				//  $("#likes_"+id).text(likes);
				//  $("#"+id).html(text);
    	});
	});
});