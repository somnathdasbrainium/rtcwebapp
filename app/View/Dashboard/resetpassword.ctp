<div class="login-box">
      <div class="login-logo">
       <a href="<?php echo $this->webroot; ?>"> <span class="logo-lg"><b>hi</b>cabs</span></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">User Passsword Reset</p>
		<?php echo $this->Session->flash(); ?>
        <form action="<?php echo $this->webroot; ?>resetpassword?token=<?php echo $token; ?>" method="post" name="loginform" id="AdminMasterLoginForm" accept-charset="utf-8">
        <input type="hidden" name="_method" value="POST"/>
	   
          <div class="form-group has-feedback">
            <?php echo $this->Form->input('password', array('type'=>'password','placeholder' => 'New password', 'id'=>'password','class'=>'form-control bottom')); ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          
					
          <div class="form-group has-feedback">
            <?php echo $this->Form->input('confirmpassword', array('type'=>'password','placeholder' => 'Confirm password', 'id'=>'cpassword','class'=>'form-control bottom')); ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          
          <div class="row">
            <div class="col-xs-8">
              
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat"  onclick="return login_valid();">Reset</button>
            </div><!-- /.col -->
          </div>
        </form>

        
		

      </div>
    </div>
	
	 <script src="<?php echo $this->webroot; ?>js/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo $this->webroot; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $this->webroot; ?>js/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
    
  <script>

function login_valid(){
	
	var password=$("#password").val();
	var cpassword=$("#cpassword").val();
	
	if(password.trim()==""){
	    alert("please enter new password.");
		return false;
	}
	else if(cpassword.trim()==""){
	    alert("please enter confirm password.");
		return false;
	}else if(password.trim()!=cpassword.trim()){
	    alert("New password does not match with confirm password.");
		return false;
	}
}

</script>

<style>
.error{ background-color:#F8C2C4 !important; }
#flashMessage{color:red;}
</style>
    

