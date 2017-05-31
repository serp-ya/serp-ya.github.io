$(document).ready(function() {

  // scroll down
  $('.down_btn_img').on('click', function(e){
    $('html,body').stop().animate({ scrollTop: jQuery('.to_sell ').offset().top }, 1000);
    e.preventDefault();
  });

  // markers popover
  $(function () {
    $('[data-toggle="popover"]').popover()
  })

  // file input
  var uploadFiles = $('.upload_images_input');
  uploadFiles.bootstrapFileInput();

  $("#fileUpload").on('change', function() {
    //Get count of selected files
    var countFiles = $(this)[0].files.length;
    var imgPath = $(this)[0].value;
    var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    var image_holder = $("#image-holder");
    image_holder.empty();
    if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
      if (typeof(FileReader) != "undefined") {
        //loop for each file selected for uploaded.
        for (var i = 0; i < countFiles; i++) 
        {
          var reader = new FileReader();
          reader.onload = function(e) {

            $("<img />", {
              "style": 'background-image: url(' + e.target.result + ')',
              "class": "thumb-image"
            }).appendTo(image_holder);
          }
          image_holder.show();
          reader.readAsDataURL($(this)[0].files[i]);
        }
      } else {
        alert("Ваш браузер не поддерживает FileReader.");
      }
    } else {
      alert("Пожалуйста, добавляйте только изображения");
    }
  });

  // gallery
  $('.image_examples').lightGallery({
      subHtmlSelectorRelative: true
  }); 

});

//vars 

// check-box toggle
var checkConfirm = function () {
      $('.sell_form_confirm_submit').toggleClass('off');
      if($('.sell_form_confirm_submit.off').length) {
        $('.sell_form_confirm_submit').attr('type', 'button');
      } else {

        $('.sell_form_confirm_submit').attr('type', 'submit');

      }

    };
