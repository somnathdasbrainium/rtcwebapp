<div class="login-box"> 
<div class="login-logo"> 
<a href="<?php echo $this->webroot; ?>"> 
<span class="logo-lg"><b>Chat</b>Admin</span></a> </div>
<div class="login-box-body"> 
<p class="login-box-msg">Sign in to start your session</p>
<?php echo $this->Session->flash(); ?> 
<form action="<?php echo $this->webroot; ?>/admin" method="post" naame="loginform" id="AdminMasterLoginForm" accept-charset="utf-8"> 
<input type="hidden" name="_method" value="POST"/> 
<div class="form-group has-feedback"> 
<?php echo $this->Form->input('email', array('type'=>'text','placeholder'=> 'Email', 'id'=>'email','class'=>'form-control top')); ?> 
<span class="glyphicon glyphicon-envelope form-control-feedback"></span> </div>
<div class="form-group has-feedback"> 
<?php echo $this->Form->input('password', array('type'=>'password','placeholder'=> 'Password', 'id'=>'password','class'=>'form-control bottom')); ?>
 <span class="glyphicon glyphicon-lock form-control-feedback"></span> </div>
 <div class="row"> <div class="col-xs-4"> 
 <button type="submit" class="btn btn-primary btn-block btn-flat" onclick="return login_valid();">
 Sign In</button> 
 </div>
 <div class="col-xs-8"> 
 <div class="checkbox icheck pull-right"> <label> 
 <a href="<?php echo $this->webroot; ?>Employees/forgetpassword" class="pass-text">I forgot my password</a> </label> </div></div></div>
 </form> 
 </div></div>
 <script src="<?php echo $this->webroot; ?>js/jQuery-2.1.4.min.js.gz"></script>
 <script>function login_valid(){var email=$("#email").val();var password=$("#password").val();if(username.trim()==""){$("#username").addClass('error');return false;}else{$("#username").removeClass('error');}if(password.trim()==""){$("#password").addClass('error');return false;}else{$("#password").removeClass('error');}}</script><style>.error{background-color:#F8C2C4 !important;}#flashMessage{color:red;}</style>