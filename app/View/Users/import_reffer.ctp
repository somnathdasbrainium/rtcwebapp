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
                  <h3 class="box-title">Import Contacts To Referrer</h3><span class="pull-right"><a href=""><i class="fa fa-plus-circle"></i></a></span>
				 
                </div><!-- /.box-header -->
                <!-- form start -->
                  <form method="POST" name="postform" id="uploadform" enctype="multipart/form-data">
                  <div class="box-body">

				<div class="form-group">
                    <label for="">Referrer user</label>
					<input name="serachbyname" id="serachbyname" placeholder="User name or contact number" autocomplete="off" onkeypress="searchbyname(this.value)" />
					<span id="searchval"></span>
					<div id="user_err" class="v-error" style="display:none;" >
						<p>Please select referrer user.</p>
					</div>
					<input type="hidden" id="refferalid" name="refferalid" />
					<div class="name-list" style="display:none;"  >
							<ul id="clientlist">
							</ul>
						 </div>
                </div>
					
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
<br/>
<table class="table table-bordered table-hover">
    <thead>
      <tr class="warning">
        <th>fName</th>
        <th>lName</th>
        <th>phone</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>+919999999999</td>
      </tr>
      

    </tbody>
  </table>









				 
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
	   function searchbyname(charval){
		   $(".v-error").hide();
		   if(charval.length > 2){
			   
			   jQuery.ajax({					 
						type: "POST",
						url: "<?php echo $this->webroot; ?>Clients/ajax_clientlist",
						dataType: "html",
						timeout:1000000,
						data: {charval:charval},
						success: function (response) {
							    $(".name-list").show();
								$("#clientlist").html(response);
				        },
						error: function (xhr, ajaxOptions, thrownError) {
     
						}
			   });
		   }
		   
		   
	   }
	   
	   
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
		var refferalid=$("#refferalid").val();
		//alert(refferalid);
		if(refferalid.trim()==""){
		$("#user_err").show();
		chk++;
		}else{
         $("#user_err").hide();
		}
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
