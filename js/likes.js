// $(document).ready(function(){
// 	$(".like").click(function(){
// 		var id = this.id;   
// 		$.ajax({
// 			url: 'megusta.php',
// 			type: 'POST',
// 			data: {
//                 id: id
//                 //id_like: $(this).attr("id")
//             },
// 			dataType: 'json',

// 			success:function(data){
// 				var likes = data['likes'];
// 				var text = data['text'];

// 				$("#likes_"+id).text(likes);
// 				$("#"+id).html(text);
// 			}
// 		});
// 	});
// });

$(document).ready(function () {
	$(".like").click(function (event) {
		var id = this.id; 
		var ider = $('#'+id+ ' span').first().attr('id');
		alert(ider);
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
        		$("#a_"+id).html(msg);
        		// LIMPIEZA DE CONTROLES
				// $("#texto1").val("");
				//  var likes = data['likes'];
				//  var text = data['text'];

				//  $("#likes_"+id).text(likes);
				//  $("#"+id).html(text);
    	});
	});
});