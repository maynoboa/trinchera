$(document).ready(function () {
	$(".like").click(function () {
		var id = this.id; 
		var ider = $('#'+id+ ' span').first().attr('id');
    	$.ajax({
        		type: "POST",
				url: "megusta.php",
				data: {
				id_like: $(this).attr("id")
				}	
    	}).done(function (msg) {
        		$("#c_"+id).html(msg);
    	});
	});
	
});
$(document).ready(function () {
$(".like1").click(function (event) {
		var id = this.id; 
		var ider = $('#'+id+ ' span').first().attr('id');
    	$.ajax({
        		type: "POST",
				url: "megusta.php",
				data: {
				id_like: $(this).attr("id")
				}
	
    	}).done(function (msg) {
        		$("#c_"+id).html(msg);

    	});
	});
});