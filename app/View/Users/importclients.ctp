<div class="content-wrapper">
     
        

        <!-- Main content -->
        <section class="content">
			
			<!--<h2>Add Employee</h2>-->
		
          <!-- Main row -->
          <div class="row">
           
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Import Clients</h3><span class="pull-right"><a href=""><i class="fa fa-plus-circle"></i></a></span>
				 
                </div><!-- /.box-header -->
                <!-- form start -->
                  <form method="POST" name="postform" id="uploadform" enctype="multipart/form-data">
                  <div class="box-body">

			
					
				<div class="form-group">
                    <label for="">File</label>
					<input type="file" name="xlsfile" id="xlsfile">
					<div id="file_err" class="v-error" style="display:none;" >
						<p>Please select xls file.</p>
					</div>
                </div>


                    <div class="form-group">
						<div class="file-btn2">
							<button class="btn btn-primary" id="btnfrm" type="button"><i class="fa fa-upload icon-pos"></i>Upload</button>
							 
						 </div>	
					</div>
				

                  </div>

                  
                </form>
              </div>
            </div>
		
<!--start 2nd box-->


			<div class="col-md-6">
				<div class="box box-primary">
                
                <div class="box-body">
				
				<div class="box-header with-border">
                  <h3 class="box-title">Sample Import File</h3>
				 
                </div><!-- /.box-header -->
				
				<?php echo $tablehtml; ?>
				
				
				
				
                 
                </div><!-- /.box-body -->
              </div>

			</div>

			
			
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      	<script src="<?php echo $this->webroot; ?>build/js/jquery.min.js"></script> 
      <script>
	  
	   function addclient(id){
		  $(".v-error").hide();  
		  $("#serachbyname").hide(); 
		  $(".name-list").hide(); 
		  $("#refferalid").val(id);
		  var sv=$("#l_"+id).text();
		  $("#searchval").html(sv+'<i class="fa fa-remove" onclick="delval()"></i>');
	   }
	   
	   function delval(){
		    $(".v-error").hide();
		    $("#searchval").html('');
		    $("#serachbyname").show(); 
			$(".name-list").hide();
			$("#clientlist").html('');
			$("#refferalid").val('');
		   
	   }
	   
	   
	   
	   
	   
$(document).ready(function(){
	
	
	
	$( "#btnfrm" ).click(function() {
		
		
		$(".v-error").hide();
		
		var chk=0;
		
		
		var fname = $("#xlsfile").val(); 
		
		
		
		if(fname!=""){
			$("#file_err").hide();
			var re = /(\.xls)$/i;
			if(!re.exec(fname)){
				alert("File extension not supported!");
				chk++;
			}
			
		}else{
			$("#file_err").show();
			chk++;
		}
		
		
		

     
		
		

		if(chk==0){	
		$("#uploadform" ).submit();
		}else{
			
			return false;
		}
		

	});	
})
</script>
<style>
.v-error{
	color:red;
}
</style>
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	  </script>