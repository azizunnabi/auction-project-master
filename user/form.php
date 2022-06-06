<form action="#" method="post" style="background-color:red">
<center> <div class="form-group" style="width:30%"><!--start form group-->
        <div class="input-group">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="name" id="password" name="name"  pattern="\d+(\.\d{2})?" data-minlength="5" class="form-control custom  input-lg" placeholder="Enter your Name..." required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>
    
    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="email" id="inputPasswordConfirm" name="email" class="form-control custom input-lg" placeholder="Enter Your Email..." data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>


    <div class="form-group"><!--start form group-->

       <center> <div class="input-group" style="width:30%">
        <span class="input-group-addon custom "><span class="glyphicon glyphicon-star change-signup"></span></span>
      <input type="submit" id="inputPasswordConfirm" name="email" class="form-control custom input-lg" placeholder="Enter Your Email..." data-match="#password" data-match-error="Password not match try again....!" required>
    </div>
    <div class="help-block with-errors"></div>
    </div><!--close form group--></center>

