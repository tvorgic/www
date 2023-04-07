$('#uvjet').focus();



var sifraPolaznik;

$(".slika").click(function(){
    sifraPolaznik=$(this).attr("id").split("_")[1];
      $("#image").attr("src",$(this).attr("src"));
      $("#slikaModal").foundation("open");
      definirajCropper();

      return false;
  });

  $("#spremi").click(function(){
    var opcije = { "width": 350, "height": 350 };
    var result = $image.cropper("getCroppedCanvas", opcije, opcije);
    //console.log(result.toDataURL());

    //ako želimo jpg https://github.com/fengyuanchen/cropperjs
    
    $.ajax({
        type: "POST",
        url:  url + "/polaznik/spremisliku",
        data: "id=" + sifraPolaznik + "&slika=" + result.toDataURL(),
        success: function(vratioServer){
          if(!vratioServer.error){
            $("#p_"+sifraPolaznik).attr("src",result.toDataURL());
            $("#slikaModal").foundation("close");
          }else{
            alert(vratioServer.description);
          }
        }
      });


    return false;
  });



  var $image;

  function definirajCropper(){


    var URL = window.URL || window.webkitURL;
    $image = $('#image');
    var options = {aspectRatio: 1 / 1 };
    
    // Cropper
    $image.on({}).cropper(options);
    
    var uploadedImageURL;
    
    
    // Import image
    var $inputImage = $('#inputImage');
    
    if (URL) {
      $inputImage.change(function () {
        var files = this.files;
        var file;
    
        if (!$image.data('cropper')) {
          return;
        }
    
        if (files && files.length) {
          file = files[0];
    
          if (/^image\/\w+$/.test(file.type)) {
           
    
            if (uploadedImageURL) {
              URL.revokeObjectURL(uploadedImageURL);
            }
    
            uploadedImageURL = URL.createObjectURL(file);
            $image.cropper('destroy').attr('src', uploadedImageURL).cropper(options);
            $inputImage.val('');
          } else {
            window.alert('Datoteka nije u formatu slike');
          }
        }
      });
    } else {
      $inputImage.prop('disabled', true).parent().addClass('disabled');
    }
    
    }
