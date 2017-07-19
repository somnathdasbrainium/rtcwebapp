 <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
		<h2>App Control</h2>
		
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="box">
                         
               
                             <div class="box-body">
                              <?php
                     if(count($app)==' '){ ?>
                            <a href="<?php echo $this->webroot; ?>Appcontrols/appcontroladd"><button class="btn btn-success" type="submit"><i class="fa fa-plus icon-pos"></i>Add Control</button></a>
                            
                      <?php } ?>		
                            </div>
                          
                            <?php echo $this->Session->flash(); ?>
                        
            
                             
                   
                        
                        <h2>Stop All  Booking Form App</h2>
                      
                      <form action="<?php echo $this->webroot; ?>Appcontrols/app_booking_stop" id="AppcontrolAppDiscountForm" method="post" accept-charset="utf-8">			
                      <!-- Main row -->
                      <div class="row">
                       
                        <div class="col-md-6">
                          <!-- general form elements -->
                          <div class="box box-primary">
                       
                            <!-- form start -->
                           
                              <div class="box-body">
                            <div class="form-group">
                                <label for="">Start Date</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <?php echo $this->Form->input('startdate',array( 'label'=>false,'type' => 'text','placeholder'=>'start date', 'readonly'=>'readonly', 'class'=>'form-control', 'id'=>'datepicker1','required'=>'required','value'=>$Appdiscount['Appdiscount']['discount_start']));?>
                                    
                                    </div>
                                    
                                
                       </div>
                       
                       
                       <div class="form-group">
                                <label for=""> End Date </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <?php echo $this->Form->input('enddate',array( 'label'=>false,'type' => 'text','placeholder'=>'End date', 'readonly'=>'readonly', 'class'=>'form-control', 'id'=>'datepicker2','required'=>'required','value'=>$Appdiscount['Appdiscount']['discount_end']));?>
                                    
                                    
                                    </div>
                                        
                                
                                </div>
                                
                        	
                        
                            
                            
                              </div>
            
                         
                          </div>
                        </div>
                        
                         <div class="col-md-6">
                          <!-- general form elements -->
                          <div class="box box-primary">
                       
                            <!-- form start -->
                           
                              <div class="box-body">
            
                                        
                               <label for="">App Controle Remarks </label>
                                    <div class="input-group">
                                        
                                    <?php echo $this->Form->input('remarks',array('label'=>false,'type' => 'textarea','placeholder'=>'Remarks', 'class'=>'form-control', 'id'=>'type','value'=>$Appdiscount['Appdiscount']['remarks']));?>
                                    
                                    </div>
                                    <div id="verr3" class="v-error" style="display:none;">
                                     <p>Enter Remarks</p>
                                    </div>
                                
                                </div>	
                                
                                
                        
                                <div class="box-footer">
                                <input type="button" onclick="savecall()" id="btnfrm" value="Save" name="Save" class="btn btn-primary">
                              
                              </div>
                            
                       
                
                            
                            
                              </div>
            
                         
                          </div>
                        </div>
                       <?php echo $this->Form->end(); ?>   
            
            
            
                    
            
                 
                 
                       
                      
                              </div>
                              </div>
                       </div>
                    
                    
                    <div class="row">
                    <div class="col-xs-4">
                     <div class="box">
                     <div class="box-body">
                      <div class="row">				  
                    <div class="col-md-4">
                    <h5><b>Update Image</b></h5>
                    
                    
                    <img src="<?php echo $this->webroot; ?>images/<?php echo $app1[0]['messages']['image'];?>" width="100" align="right"/>
                    
                    <form action="/Appcontrols/uploadimg" method="post" enctype="multipart/form-data"/>
                    <input type="file" name="image" id="image" onchange="ValidateFileUpload()" required="required"  /><br/>
                    <input type="submit" name="submit" class="btn btn-success" value="Update Image"/>
                    </form>
                    </div>
                    </div>
                    
                     </div>
                     </div>
                     </div>
                     
                <div class="col-xs-8">
                 <div class="box">
                 <div class="box-body">
                        <div class="row">				  
                        <div class="col-md-12">
                        <form action="/Appcontrols/linkupdate" method="post" enctype="multipart/form-data"/>
                        <h5><b>Update Link</b></h5> 
                        <input type="text" name="link" class="form-control" required id="link" value="<?php echo $app1[0]['messages']['created_link'];?>" /><br/>
                        <input type="submit" name="submit" class="btn btn-success" value="Update Link"/>
                        </form>
                        </div>
                        </div>
                </div>
                </div>
                </div>
                </div>
                 <div class="row">
                <div class="col-xs-4">
                 <div class="box">
                 <div class="box-body">        
                        <form action="<?php echo $this->webroot; ?>Appcontrols/promo_discount_limit_update" method="post" enctype="multipart/form-data"/>
                        <h5><b><?=$settingdata['Setting']['name']?> €</b></h5> 
                        <input type="number" min="1" name="promo_discount_limit" class="form-control" required id="link" value="<?=$settingdata['Setting']['value']?>" /><br/>
                        <input type="submit" name="submit" class="btn btn-success" value="Update Promo Discount Limit"/>
                        </form>
                        
                        
                        </div>
                                          </div>
                  </div>
                  </div>
                  </div>
                  </div>
				  
				  
				 
				
				  
				  
                </div>
				
				
				
				
				
				
              </div>
			  
			  
			 <!-- start pagination-->
			 
			  
            </div>
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
       <script src="<?php echo $this->webroot; ?>js/jQuery-2.1.4.min.js"></script>
   
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo $this->webroot; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $this->webroot; ?>js/app.min.js"></script>
	<script src="<?php echo $this->webroot; ?>js/jquery.dataTables.min.js"></script>
    <script src='<?php echo $this->webroot; ?>js/bootstrap-datetimepicker.js'></script>
    <link rel="stylesheet" href="<?php echo $this->webroot; ?>css/bootstrap-datetimepicker.css"/>
    <script src="<?php echo $this->webroot; ?>js/index.js"></script>
    <link rel="stylesheet" href="<?php echo $this->webroot; ?>css/bootstrap-timepicker.css"/>
      <script type="text/javascript">
    $("#datepicker1").datetimepicker({
        format: "yyyy-mm-dd hh:ii:ss",
        autoclose: true,
        todayBtn: true,
        pickerPosition: "bottom-left"
    });
</script>   
     <script type="text/javascript">
    $("#datepicker2").datetimepicker({
        format: "yyyy-mm-dd hh:ii:ss",
        autoclose: true,
       
        pickerPosition: "bottom-left"
    });
</script>            
<script type="text/javascript">
function date_by_subtracting_days(date, days) {
    return new Date(
        date.getFullYear(), 
        date.getMonth(), 
        date.getDate() + days,
        date.getHours(),
        date.getMinutes(),
        date.getSeconds(),
        date.getMilliseconds()
    );
}   
function savecall(){

var datepicker1=$("#datepicker1").val();
var datepicker2=$("#datepicker2").val();
var discount=$("#discount").val();
var startDate = new Date(datepicker1);
var endDate = new Date(datepicker2);
var startDate=date_by_subtracting_days(startDate,0);
var endDate=date_by_subtracting_days(endDate,0);
if(datepicker1==''){
alert('Please enter Start time');
$("#datepicker1").focus();
}else if(datepicker2==''){
alert('Please enter End Date');
$("#datepicker2").focus();
}else if(discount==''){
alert('Please enter discount amount');
$("#discount").focus();
}else if(startDate > endDate){
alert('Start time gater than or equal to end time');
	$("#datepicker2").focus();	
}else{
	$("#AppcontrolAppDiscountForm").submit();
}



}
</script>
    
    
    
    <script>
	$(document).ready(function() {
		$('#vehicle').DataTable( {
			columnDefs: [ {
				targets: [ 0 ],
				orderData: [ 0, 1 ]
			}, {
				targets: [ 1 ],
				orderData: [ 1, 0 ]
			}, {
				targets: [ 4 ],
				orderData: [ 4, 0 ]
			} ]
		} );
	} );
	</script>
    <script>

function ValidateFileUpload() {

var fuData = document.getElementById('image');
var FileUploadPath = fuData.value;

var type='image';

if (FileUploadPath == '') {
    alert("Please upload an image");

} else {
    var Extension = FileUploadPath.substring(FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

if(type=='audio')
{
	
    if (Extension == "mp3") {          
						if (typeof (fuData.files) != "undefined") {
            var size = parseFloat(fuData.files[0].size / 1024).toFixed(0);
         var mb=size/1024;

									if(mb>10){
										$("#uploaded_file").val('');
										alert("your audio "+mb.toFixed(2)+" mb please choose less than 5 mb");
										
										}
									
        } else {
            alert("This browser does not support HTML5.");
        }					


			
			 } 


else {
		$("#uploaded_file").val('');

        alert("Photo only allows file types of mp3. ");
						
    }
				
	
	}
else if(type=='video')
{
	
    if (Extension == "mp4") {          
								if (typeof (fuData.files) != "undefined") {
            var size = parseFloat(fuData.files[0].size / 1024).toFixed(0);
         var mb=size/1024;

									if(mb>10){
										$("#uploaded_file").val('');
										alert("your image "+mb.toFixed(2)+" mb please choose less than 5 mb");
										
										}
									
        } else {
            alert("This browser does not support HTML5.");
        }			
    } 


else {$("#uploaded_file").val('');
        alert("Photo only allows file types of mp4. ");
    }
				
	
	}
else{

    if (Extension == "png" || Extension == "jpg") {          
										if (typeof (fuData.files) != "undefined") {
            var size = parseFloat(fuData.files[0].size / 1024).toFixed(0);
         var mb=size/1024;

									if(mb>10){
										$("#uploaded_file").val('');
										alert("your image "+mb.toFixed(2)+" mb please choose less than 1 mb");
										
										}
									
        } else {
            alert("This browser does not support HTML5.");
        }
    } 


else {$("#image").val('');
        alert("Please enter jpg or png type image");
    }
				
}
}}
</script>