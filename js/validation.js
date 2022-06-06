$(document).ready(function(){
	
	$('#submit').click(function()
	{

    
      if(firm.conformation.checked==false){
 
		



			$('.unconform').html('you must agree to our terms and conditions before bid on our product');
			return false;

			
		}
       
       return true;
    
		


      

 
            
	});
	

	$('#bid_rate').focusout(function(){
   		var pass = $('#bid_rate').val();
   		if(pass==0){
   		
   		
   		
   		
   			$('.bid_low').html('your bid rate is low , please try again with high bid');
   			return false;
   		}
   		else{
   			return true;
   		}

   		
   	});
		
    });
 
   	
   
	
