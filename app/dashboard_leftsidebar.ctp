<style>
.colo{color:#FFF !important;}
.colo1{color:#ccc !important;}
.skin-blue .sidebar-menu>li>.treeview-menu{
background-color:#0078d7;
color:#FFF;
}
</style>

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
              <a href="#" <?php if($parenturl=='Bookings'){echo "class='colo'";}else{echo "class='colo1'";}?>>
              Bookings

</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a <?php if($parenturl=='Bookings' && $childurl=='add'){echo "class='colo'";}else{echo "class='colo1'";}?> href="<?php echo $this->webroot; ?>Bookings/add"> Add Booking</a></li>
                <li><a <?php if($parenturl=='Bookings' && $childurl=='listings'){echo "class='colo'";}else{echo "class='colo1'";}?> href="javascript:void(0)" onclick="window.location.href='<?php echo $this->webroot; ?>Bookings/listings'">Manage Bookings</a></li>
				<?php if($this->Session->read('emptype')=="Management") { ?>
				<li><a <?php if($parenturl=='Bookings' && $childurl=='report'){echo "class='colo'";}else{echo "class='colo1'";}?> href="<?php echo $this->webroot; ?>Bookings/report">Report</a></li>
				
				<?php } ?>
              </ul>
            </li>
            
           
            <?php if($this->Session->read('emptype')=="Management") { ?>
            <li class="active treeview">
              <a href="#" <?php if($parenturl=='Clients'){echo "class='colo'";}else{echo "class='colo1'";}?>>
                
                <span>Client Management</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a <?php if($parenturl=='Clients' && $childurl=='listings'){echo "class='colo'";}else{echo "class='colo1'";}?>  href="<?php echo $this->webroot; ?>Clients/listings"> Clients</a></li>
                <li><a <?php if($parenturl=='Clients' && $childurl=='importReffer'){echo "class='colo'";}else{echo "class='colo1'";}?> href="<?php echo $this->webroot; ?>Clients/importReffer">Referrer </a></li>
              </ul>
            </li>
			<?php } ?>
			<li class="active treeview">
              <a href="#">
                
                <span>Car Maintenance</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a <?php if($parenturl=='Vehicles' &&  $childurl=='car_service'){echo "class='colo'";}else{echo "class='colo1'";}?>  href="<?php echo $this->webroot; ?>Vehicles/service_point">Service</a></li>
                <?php if($this->Session->read('emptype')=="Management") { ?>
                <li><a <?php if($parenturl=='Maintenances' &&  $childurl=='car_service'){echo "class='colo'";}else{echo "class='colo1'";}?>  href="<?php echo $this->webroot; ?>Maintenances/car_service">Maintenance</a></li>
				<?php } ?>
              </ul>
            </li>
			
			<?php if($this->Session->read('emptype')=="Management") { ?>
			<li class="active treeview">
              <a href="#" <?php if($parenturl=='Vatbooks'){echo "class='colo'";}else{echo "class='colo1'";}?>>
                
                <span>Vat Book Management</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a <?php if($parenturl=='Vatbooks' &&  $childurl=='add'){echo "class='colo'";}else{echo "class='colo1'";}?>  href="<?php echo $this->webroot; ?>Vatbooks/add">Book Reg.</a></li>
                <li><a <?php if($parenturl=='Vatbooks' &&  $childurl=='add'){echo "class='colo'";}else{echo "class='colo1'";}?>  href="<?php echo $this->webroot; ?>Vatbooks/bookuse">Book in Use.</a></li>
				<li><a <?php if($parenturl=='Vatbooks' &&  $childurl=='add'){echo "class='colo'";}else{echo "class='colo1'";}?>  href="<?php echo $this->webroot; ?>Vatbooks/bookcomplete">Book Complete.</a></li>
              </ul>
            </li>
			<?php } ?>
			
            <li class="active treeview">
              <a href="#" <?php if($parenturl=='Employees'||$parenturl=='Vehicles'){echo "class='colo'";}else{echo "class='colo1'";}?>>
                <span>Manage Assets</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
			   <?php if($this->Session->read('emptype')=="Management") { ?>
                <li><a <?php if($parenturl=='Employees' && $childurl=='users'){echo "class='colo'";}else{echo "class='colo1'";}?> href="<?php echo $this->webroot;?>Employees/users">Users</a></li>
                <li><a <?php if($parenturl=='Employees' && $childurl=='index'){echo "class='colo'";}else{echo "class='colo1'";}?> href="<?php echo $this->webroot;?>Employees/index">Employee</a></li>
                <li><a <?php if($parenturl=='Vehicles' && $childurl=='index'){echo "class='colo'";}else{echo "class='colo1'";}?> href="<?php echo $this->webroot;?>Vehicles/index">Vehicle</a></li>
			   <?php } ?>
				<li><a <?php if($parenturl=='Vehicles' && $childurl=='assignvehicle'){echo "class='colo'";}else{echo "class='colo1'";}?> href="<?php echo $this->webroot;?>Vehicles/assignvehicle">Assign Vehicle</a></li>
			    <li><a <?php if($parenturl=='Promocode' && $childurl=='index'){echo "class='colo'";}else{echo "class='colo1'";}?> href="<?php echo $this->webroot;?>Promocode/index">Promo Code</a></li>
			    
   <?php if($this->Session->read('emptype')=="Management") { ?>
<li><a <?php if($parenturl=='Appcontrols' && $childurl=='appcontrol'){echo "class='colo'";}else{echo "class='colo1'";}?> href="<?php echo $this->webroot;?>Appcontrols/appcontrol">App Control</a></li>


<?php }?>
              </ul>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>