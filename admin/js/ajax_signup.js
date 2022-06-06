$(document).ready(function(){
    $('#registere').attr('disabled',false);
    //getting name and store it name variable
   $('#full').focusout(function(){
      var name = $('#full').val();
//       alert(name);
   });
    //getting email and store it email variable
    $('#email').focusout(function(){
        var email = $('#email').val();
//        alert(email);
       $.ajax({
       type : "POST",
       url  : "ajax/signup.php",
       data : "email="+email,
       success : function(data){
           
       $('#email-error').html(data);
       $('#registere').attr('disabled',true);
          
       }
    });      
    });
    //getting password and store it password variable
    $('#password').foucusout(function(){
       var password = $('#password').val(); 
    });
    $('#inputPasswordConfirm').focusout(function(){
       var re_password = $('#inputPasswordConfirm').val();
    });
    //getting mobile number and store it mobile variable
    $('#mobile').focusout(function(){
       var mobile = $('#mobile').val(); 
    });

    
});
