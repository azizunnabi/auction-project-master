$(document).ready(function(){
 //user can skip upload image upload in late time
 $('#skip').click(function(){
    // window.location = '../index.php';
    $('body').load('wellcome.php').hide().fadeIn(4000);
 });




//user can upload image in signup time
	img_name = "";
   $('#image').click(function(){
   var store = $('#file').val();
   if(store == '')
   {
      $('.upload-error').addClass('alert alert-danger');
      $('.upload-error').html('Please Select Photo');
      img_name = "";
   }
   else
   {
      
      $.ajax({
      type     :    "POST",
      url      :    "ajax/upload_image.php",
      enctype   : 'multipart/form-data',
      contentType : false,
      cache    : false,
      processData : false,
      data     :   new FormData($('#form')[0]),
      // data     :     {file1 : file},
      success  :    function(data){
        // console.log(data);
        var data = $.trim(data);
     if(data == '1')
     {
      // window.location = '../index.php';
      $('body').load('wellcome.php').hide().fadeIn(4000); 
      
      
     }
    else if(data == '0')
    {
      $('.upload-error').addClass('alert alert-danger');
      $('.upload-error').html('Query not work!');
    }
    else if(data == 'invalid exten')
    {
      $('.upload-error').addClass('alert alert-danger');
      $('.upload-error').html('Invalid Extension!');
    }
      

      }


      });
   }
   });

});