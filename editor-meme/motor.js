$(document).ready(function(){

	
    var element = $("#editor"); // global variable
    var getCanvas; // global variable
     
        $("#btn-Preview-Image").on('click', function () {
             html2canvas(element, {
             onrendered: function (canvas) {
                    $("#previewImage").append(canvas);
                    getCanvas = canvas;
                 }
             });
        });
    
        $("#btn-Convert-Html2Image").on('click', function () {
        var imgageData = getCanvas.toDataURL("image/png");
        // Now browser starts downloading it instead of just showing it
        var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
        $("#btn-Convert-Html2Image").attr("download", "your_meme.png").attr("href", newData);
        });
    
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            };
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    function doRichEditCommand(aName, aArg){
        document.execCommand(aName,false, aArg);
      }
/*----------aumentar tamaño----------*/



/*------hide-show-----------*/
$(document).ready(function(){
    // $("#hide").click(function(){
    //   $("p").hide();
    // });
    //  $(".show").click(function(){
    // //   $(".hide").show();
    // });
    $("#btn-Preview-Image").click(function() {
      $('html, body').animate({
          scrollTop: $("#previewImage").offset().top
      }, 1000);
    return false;
  });


    $("#i_52").click(function () {
      	var id = this.id; 
      	alert(id);
      });
var fontSize = 2,
    factor = 0.1;

$('#aumentar').on('click', function() {
  fontSize = fontSize + factor;
  $('.edit1').css( {"font-size": fontSize + 'em'});
});

$('#disminuir').on('click', function() {
  fontSize = fontSize - factor;
  $('.edit1').css( {"font-size": fontSize + 'em'});
});
      
/*-----colores-------*/
var colorpickerOptions = {
  parts: ['map', 'bar'],
  altProperties: 'background-color',
  altField: '.colorpicker',
  color: 'fe9810',
  select: function (event, color) {
      var color_in_hex_format = color.formatted;
      console.log(color_in_hex_format);
  },
  close: function (event, color) {
      //alert('Close event');
  },
  cancel: function (event, color) {
      alert('Cancel event');
  },
  inline: false
};

$('.edit1').colorpicker(colorpickerOptions);
  });