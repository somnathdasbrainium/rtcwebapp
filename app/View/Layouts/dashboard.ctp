<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>hicabs - Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo $this->webroot; ?>css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $this->webroot; ?>css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo $this->webroot; ?>css/main.css">
    <link rel="stylesheet" href="<?php echo $this->webroot; ?>css/all-skins.min.css">
    <link rel='stylesheet prefetch' href='<?php echo $this->webroot; ?>css/datepicker.css'>
	
	
  

  </head>
    <!-- END  HEAD-->
	
    <!-- BEGIN BODY-->
 <body class="hold-transition skin-blue sidebar-mini ">
    <div class="wrapper">
     <!-- MAIN WRAPPER -->
    
         <!-- HEADER SECTION -->
          <?php echo $this->element('dashboard_header'); ?>
         <!-- END HEADER SECTION -->
		 
        <!-- MENU SECTION -->
		
          <?php echo $this->element('dashboard_leftsidebar'); ?>
        <!--END MENU SECTION -->
		
        <!--PAGE CONTENT -->
        
                <?php echo $this->fetch('content'); ?>
        
       <!--END PAGE CONTENT -->
	   


     <?php  echo $this->element('dashboard_footer'); ?>
     <!--END MAIN WRAPPER -->
     
     <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
    
        
     <!--END PAGE LEVEL SCRIPT-->
     
   
</body>
    <!-- END BODY-->
    
</html>
