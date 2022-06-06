$(document).ready(function(){
   name        = "";
   email       = "";
   password    = "";
   re_password = "";
   mobile      = "";
   // $('#submit').attr('disabled',true);
    
   // $('#submit').attr('disabled',true);
    $('#full').focusout(function(){
  var vall = $(this).val();
   if($.trim(vall) == "")
       {
           $('.name-error').html("<span class='glyphicon glyphicon-remove red'></span>");
           $('#full,.user').addClass('border-red');
           $('#full,.user').removeClass('border-green');
           
           
           name = "";
       }
        else{
                    var reg = /^[a-z ]+$/i;
        if(reg.test(vall))
            {
                $('#full,.user').addClass('border-green');
                $('#full,.user').removeClass('border-red');
                $('.name-error').html("<span class='glyphicon glyphicon-ok green'></span>");
                
                name = vall;
            }
        else{
           $('.name-error').html('<strong>Name must be latters!</strong>');
            $('#full,.user').addClass('border-red');
            $('#full,.user').removeClass('border-green');
            
            name = "";
        }
            
        }

  });
    
    
            $('#email').focusout(function(){
               
           var vall = $(this).val();
           if($.trim(vall) == "")
               {
        $('.email-error').html("<span class='glyphicon glyphicon-remove red'></span>");
                   $('#email,.email').addClass('border-red');
                   $('#email,.email').removeClass('border-green');
                   email = "";
               }
                else{
                 
        var email_reg = /^[a-zA-Z]+(_\.)?[a-zA-Z0-9_]*@[a-zA-Z_\.]+\.[a-zA-Z]+$/;
                if(email_reg.test(vall))
                    {
//                     $.ajax({
//                         type    :  "POST",
//                         url     :  "ajax/signup.php",
//                         data    :  {email:vall},
//                         success : function(data)
//                    {
//
//                         }
//                     });
                        
                        
                        $.post('ajax/signup.php',{email : vall} , function(data){
                           if(data.indexOf('email') > -1)
                               {
                                   $('.email-error').html('<strong>Email is already exist!</strong>');
                                   $('#email,.email').addClass('border-red');
                                   $('#email,.email').removeClass('border-green');
                                   email = "";
                               }
                            else if(data.indexOf('ok') > -1)
                                {
                            $('.email-error').html("<span class='glyphicon glyphicon-ok green'></span>");
                                   $('#email,.email').addClass('border-green');
                                   $('#email,.email').removeClass('border-red');
                                    email = vall;
                                }
                        })
                        
                        
                        
                        
                    }
                    else{
     $('.email-error').html('<strong>Enter correct email!</strong>');
                        $('#email,.email').addClass('border-red');
                        $('#email,.email').removeClass('border-green');
                        email = "";
                    }
                
                }
        });
    
    
    $('#password').focusout(function(){
        var vall = $(this).val();
        if($.trim(vall) == "")
            {
        $('.password-error').html("<span class='glyphicon glyphicon-remove red'></span>");
                $('#password,.password').addClass('border-red');
                $('#password,.password').removeClass('border-green');
                password = "";
            }
        else if(vall.length < 8)
                {
        $('.password-error').html('<strong>Password length is too short!</srong>');
                $('#password,.password').addClass('border-red');
                $('#password,.password').removeClass('border-green'); 
                password = "";
                }
        else{
            $('#password,.password').addClass('border-green');
            $('#password,.password').removeClass('border-red');
            $('.password-error').html("<span class='glyphicon glyphicon-ok green'></span>");
            password = vall;
        }
        
    });
    
    
   $('#re-password').focusout(function(){
      
       var vall = $(this).val();
       if($.trim(vall) == "")
           {
$('.re-password-error').html("<span class='glyphicon glyphicon-remove red'></span>");
            $('#re-password,.re_password').addClass('border-red');
            $('#re-password,.re_password').removeClass('border-green');
            re_password = "";
           }
       else if(password != vall)
           {
        $('.re-password-error').html('<strong>Password not matched!</strong>');
            $('#re-password,.re_password').addClass('border-red');
            $('#re-password,.re_password').removeClass('border-green');
            re_password = "";
           }
       else{
           $('.re-password-error').html("<span class='glyphicon glyphicon-ok green'></span>");
           $('#re-password,.re_password').addClass('border-green');
           $('#re-password,.re_password').removeClass('border-red');
           re_password = vall;
           
       }
       
       
       
   });
    
    
    //validating mobile number
    $('#mobile').focusout(function(){
        
        var vall = $(this).val();
        if($.trim(vall) == "")
            {
                $('.mobile-error').html("<span class='glyphicon glyphicon-remove red'></span>");
                $('#mobile,.mobile').addClass('border-red');
                $('#mobile,.mobile').removeClass('border-green');
                mobile = "";
            }
        else
            {
                var mobile_reg = /^[0-9]{11}$/;
                if(mobile_reg.test(vall))
                    {
                        $.ajax({
                             
                            type    :   "POST",
                            url     :   "ajax/signup.php",
                            data    :   {mobile : vall},
                            success : function(data)
                            {
                               if(data.indexOf('mobile exist') > -1)
                                   {
         $('.mobile-error').html("<strong>This Mobile Number is already exist!</strong>");
                        $('#mobile,.mobile').addClass('border-red');
                        $('#mobile,.mobile').removeClass('border-green');
                                       mobile = "";
                                       
                                   }
                                else if(data.indexOf('mobile select') > -1)
                                    {
        $('.mobile-error').html("<span class='glyphicon glyphicon-ok green'></span>");
                                        $('#mobile,.mobile').addClass('border-green');
                                        $('#mobile,.mobile').removeClass('border-red');
                                        mobile = vall;
                                    }
                            }
                            
                        });
                    }
                else
                    {
                        $('.mobile-error').html("<span class='glyphicon glyphicon-remove red'></span>");
                        $('#mobile,.mobile').addClass('border-red');
                        $('#mobile,.mobile').removeClass('border-green');
                        mobile = "";
                    }
            }
    });

   $('#submit').click(function(){
       if(name == "" || email == "" || password == "" || re_password == "" || mobile == "")
       {
        $('.form-error').html("<span class='glyphicon glyphicon-remove red'></span>");
        $('#submit').addClass('submit-error');
        $('.all-fields').addClass('alert alert-danger');
        $('.all-fields').html('<strong>Error!  </strong>'+'Please fill out all fields and try again!');
       }
        else
        {
       $.ajax({
          
           type    :    "POST",
           url     :    "ajax/signup.php",
           data    :   {name1 : name, email1 : email, password1 : password,mobile1 : mobile},
           beforeSend : function(){
                       $('#submit').val('Connecting.......');
           },
           success :  function(data)
           {
               if(data.indexOf('successfully') > -1)
                {window.location = 'upload_photo.php';}
              else {alert('arror');}
           }
         
            
           
           
       });
     }



  
       
   });
    
    
    
    

            
        
    
    
});
