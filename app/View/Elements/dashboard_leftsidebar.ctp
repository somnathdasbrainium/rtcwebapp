<?php
$url=explode("/",$_SERVER[ 'REQUEST_URI' ]);
//echo "<pre>";
$parenturl=$url[1];
//echo $parenturl;
$urlc=explode("?",$url[2]);
$childurl=$urlc[0];

//echo $childurl;
?>



<aside class="main-sidebar">
   
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="active treeview">
              <ul class="treeview-menu">
                <li class="active"><a href="<?php echo $this->webroot; ?>Users/listings">Chat User</a></li>
              </ul>
           
			 </li>
            

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
   