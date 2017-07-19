 <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">	
		<h2>Chat Users</h2>
          <!-- Main row -->
          <div class="row">
           <div class="col-xs-12">
              <div class="box">
			   
			    <?php echo $this->Session->flash(); ?>
				
                <div class="box-body">
                  <table id="client" class="display" cellspacing="0" width="100%" class="table table-bordered table-striped datatable">
        <thead>
            <tr> 
               
            
                        <th>Name</th>
                        <th>Email</th>
						<th>Status</th>
						<th>Action</th>
            </tr>
        </thead>
       
    </table>
                  
				  
				  
				  
				  
				  
				  
				  
                </div>
              </div>
			 
			  
            </div>
          
		  

          </div>

		  </div>

			
          </div><!-- /.row (main row) -->
		  
		  
		  

        </section><!-- /.content -->
		
		<div id="blockdelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-sm">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
													<h4 class="modal-title" id="mySmallModalLabel">&nbsp;&nbsp;</h4>
												</div>
												<div class="modal-body clearfix">
													<div class="with-padding text-center clearfix">
														<h6>Are you sure you want to block this Client?</h6>
														<form  method="post" action="<?php echo $this->webroot; ?>Clients/block">
															<input type="hidden" value="POST" name="_method">
															<input type="hidden" value="" name="clientid" id="clientid">
															<input class="btn btn-info" type="submit" value="OK" name="btn">
															<input type="button" name="" value="Cancel" class="btn btn-primary"  data-dismiss="modal">
														</form>

														
			 
													</div>
												</div>
											</div>
										</div>
									</div>
</div><!-- /.content-wrapper -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo $this->webroot; ?>js/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo $this->webroot; ?>js/bootstrap.min.js"></script>
   
	<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script>
	
	$(document).ready(function() {
    $('#client').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "<?php echo $this->webroot; ?>Users/userlistings",
            "data": function ( d ) {
                d.myKey = "myValue";
                // d.custom = $('#myInput').val();
                // etc
            }
        }
    } );
} );
	</script>
	