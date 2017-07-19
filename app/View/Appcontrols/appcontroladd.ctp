         	<?php 
			     	echo $this->Form->create('Appcontrol');
				
	   		?>  
        <div class="content-wrapper">
     
        

        <!-- Main content -->
        <section class="content">
			
			<h2>Add Control</h2>
	     
					
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
							<span class="input-group-addon"><i class="fa fa-mobile-phone"></i></span>
							<?php echo $this->Form->input('startdate',array( 'label'=>false,'type' => 'text','placeholder'=>'start date', 'readonly'=>'readonly', 'class'=>'form-control', 'id'=>'datepicker1','required'=>'required'));?>
						
						</div>
						
					
           </div>
		   
		   
		   <div class="form-group">
                    <label for=""> End Date </label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<?php echo $this->Form->input('enddate',array( 'label'=>false,'type' => 'text','placeholder'=>'End date', 'readonly'=>'readonly', 'class'=>'form-control', 'id'=>'datepicker2','required'=>'required'));?>
						
						
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

			    			
				
				<div class="form-group">
                    <label for="">Start Time</label>
						<div class="input-group">
						<div class="left-area">
					  
				<input type="text"  readonly="readonly" name="data[Appcontrol][starttime]" class="form-control" value="" placeholder="12:00"  id="timecall"  maxlength="5"/><select class="hour" value=""  style="width: auto;" id="hr" onchange="showhr(this.value)">
 <option value="">hour</option>
<?php
$i=00;
while($i<24){
	?>
  <option value="<?php printf("%02d", $i);?>"><?php printf("%02d", $i);?></option>

 
 <?php
	$i++;
	}
?>
</select>
&nbsp;:&nbsp;
<select class="minute"  style="width: auto;" id="min" onchange="showmin(this.value)">
 <option value="">minute</option>
<?php
$k=00;
while($k<60){
	?>
  <option value="<?php printf("%02d", $k);?>"><?php printf("%02d", $k);?></option>

 
 <?php
	$k++;
	}
?>
</select>
					   </div>
							
							
						
						</div>
						
					
           </div>
		   
		   
		   <div class="form-group">
                    <label for=""> End Time </label>
                  <div class="input-group">
						<div class="left-area">
				<input type="text" readonly="readonly" name="data[Appcontrol][endtime]" class="form-control" value="" placeholder="12:00"  id="timecall1"  maxlength="5"/>
<select class="hour"  style="width: auto;" id="hr1" onchange="showhr1(this.value)">
 <option value="">hour</option>
<?php
$ii=00;
while($ii<24){
	?>
  <option value="<?php printf("%02d", $ii);?>"><?php printf("%02d", $ii);?></option>

 
 <?php
	$ii++;
	}
?>
</select>
&nbsp;:&nbsp;
<select class="minute"  style="width: auto;" id="min1" onchange="showmin1(this.value)">
 <option value="">minute</option>
<?php
$kk=00;
while($kk<60){
	?>
  <option value="<?php printf("%02d", $kk);?>"><?php printf("%02d", $kk);?></option>

 
 <?php
	$kk++;
	}
?>
</select>

					   </div>
							
							
						
						</div>
						
			
					
						
					
					</div>
					
				
			
				
				
                  </div>

             
              </div>
            </div>
		
<!--start 2nd box-->


			<div class="col-md-6">
				<div class="box box-primary">
               
                <div class="box-body">
                 
                    <!-- text input -->
                    
					
					<div class="form-group">
                    <label for="">Comment </label>
						<div class="input-group">
							
						<?php echo $this->Form->input('comment',array('label'=>false,'type' => 'textarea','placeholder'=>'comment', 'class'=>'form-control', 'id'=>'type'));?>
						
						</div>
						<div id="verr3" class="v-error" style="display:none;">
						 <p>Enter Vechile Type</p>
						</div>
					
					</div>	
					
					
			
					<div class="box-footer">
					<input type="button" onclick="savecall()" id="btnfrm" value="Save" name="Save" class="btn btn-primary">
                  
                  </div>

             
                </div><!-- /.box-body -->
              </div>
			  
			  
			</div>
			
			
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->     
           
           <?php echo $this->Form->end(); ?>        
     
 
       
     
    <!-- Bootstrap 3.3.5 -->
      	<script src="<?php echo $this->webroot; ?>build/js/jquery.min.js"></script>  
     <script src="<?php echo $this->webroot; ?>js/bootstrap.min.js"></script>

    <script src="<?php echo $this->webroot; ?>js/app.min.js"></script>
	
    <script src='<?php echo $this->webroot; ?>js/bootstrap-datepicker.js'></script>

    <script src="<?php echo $this->webroot; ?>js/index.js"></script>
    
     <script src='<?php echo $this->webroot; ?>js/bootstrap-timepicker.min.js'></script>
    
     <link rel="stylesheet" href="<?php echo $this->webroot; ?>css/bootstrap-timepicker.css"/>
   
     <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                var date = new Date();
                date.setDate(date.getDate()-0);
                
                $('#datepicker1').datepicker({ 
                    startDate: date, format: 'yyyy-mm-dd',
      autoclose: true

                });
                
                $('#datepicker2').datepicker({ 
                    startDate: date, format: 'yyyy-mm-dd',
  autoclose: true
                });
                
                

            });
        </script>
   
     <script type="text/javascript">
            $(function () {



    $('#timepicker1').timepicker({showMeridian: false });
  
  $('#timepicker2').timepicker({showMeridian: false });




            });
        </script> 
        
    <!-- jQuery UI 1.11.4 -->
    
    <script type="text/javascript" >
      var startDate=null;
		var endDate=null;
		$(document).ready(function(){
			$('#datepicker1').datepicker()
				.on('changeDate', function(ev){
					startDate=new Date(ev.date.getFullYear(),ev.date.getMonth(),ev.date.getDate(),0,0,0);
					if(endDate!=null&&endDate!='undefined'){
						if(endDate<startDate){
								alert("End Date is less than Start Date");
								$("#datepicker1").val("");
						}
					}
				});
			$("#datepicker2").datepicker()
				.on("changeDate", function(ev){
					endDate=new Date(ev.date.getFullYear(),ev.date.getMonth(),ev.date.getDate(),0,0,0);
					if(startDate!=null&&startDate!='undefined'){
						if(endDate<startDate){
							alert("End Date is less than Start Date");
							$("#datepicker2").val("");
						}
					}
				});
		});


    </script>
  <script>
function showhr(){
	
var hr=	document.getElementById("hr").value;
document.getElementById("timecall").value=hr+':';
	}
	function showmin(){
	var mins=	document.getElementById("min").value;
	var hr=	document.getElementById("hr").value;

document.getElementById("timecall").value=hr+':'+mins;

	
	}
	function showhr1(){
	
var hr1=	document.getElementById("hr1").value;
document.getElementById("timecall1").value=hr1+':';
	}
	function showmin1(){
	var mins1=	document.getElementById("min1").value;
	var hr1=	document.getElementById("hr1").value;

document.getElementById("timecall1").value=hr1+':'+mins1;

	
	}



	
function savecall(){

var datepicker1=$("#datepicker1").val();
var datepicker2=$("#datepicker2").val();
var type=$("#type").val();
var timecall=$("#timecall").val();
var timecall1=$("#timecall1").val();

var hra=timecall.split(":");

var minsa=timecall.split(":");


var hrb=timecall1.split(":");



var minsb=timecall1.split(":");


if(datepicker1==''){
	alert('Please enter Start Date');
	$("#datepicker1").focus();
	}
else if(datepicker1==''){
	alert('Please enter Start Date');
	$("#datepicker1").focus();
	}
	else if(datepicker2==''){
	alert('Please enter End Date');
	$("#datepicker2").focus();
	}
	else if(type==''){
	alert('Please enter Comment');
	$("#type").focus();
	}
	else if(timecall==''){
	alert('Please enter Start Time');
	$("#timecall").focus();
	$("#hr").focus();


	}		else if(timecall.length<5){
	alert('Please enter proper Start Time with Hour and Minutes');
	$("#timecall").focus();
	$("#min").focus();


	}	
	
	else if(timecall1==''){
	alert('Please enter End Time');
	$("#timecall1").focus();
	$("#hr1").focus();

	}	else if(timecall1.length<5){
	alert('Please enter proper End Time with Hour and Minutes');
	$("#timecall").focus();
	$("#min1").focus();

	}	
		else if(datepicker1==datepicker2 && hra[0]>=hra[1] && minsa[0]>=minsb[1]){



	alert('Start Time should not be Greater than or equal to End Time');
	$("#timecall").focus();
	$("#min1").focus();





		

}
	
	else{
		
		
		$("#AppcontrolAppcontroladdForm").submit();
		}
	
	
	
}



</script>
  
  