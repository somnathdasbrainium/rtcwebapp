<header class="main-header">
        <!-- Logo -->
        <!-- <a href="<?php echo $this->webroot;?>" class="logo"> -->
<a href="#" class="logo">
          <span class="logo-mini"><b>Chat</b> App</span>
          <span class="logo-lg"><b>Chat</b> App</span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">

         
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  
                  <span class="hidden-xs"><i class="fa fa-user icon-pos"></i>
Welcome <?php echo $this->Session->read('fName');?>

</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
					<div class="user-pro"><a href="#"> <i class="fa fa-gear icon-pos"></i>My Profile</a></div>
					
					<div class="user-pro"><a href="<?php echo $this->webroot; ?>Dashboard/logout"><i class="fa fa-pencil-square icon-pos"></i> Logout </a></div>
                  </li>

                </ul>
              </li>
            
            </ul>
          </div>
        </nav>
      </header>

<style>
a.current{ background:#1e282c;}


</style>