  <div class="content-wrapper">
     
        

        <!-- Main content -->
        <section class="content radio_align">
			
			<h2>Edit Client</h2>
		
          <!-- Main row -->
          <div class="row">
           
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Basic Info</h3><span class="pull-right"><a href=""><i class="fa fa-plus-circle"></i></a></span>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                  <div class="box-body">

				<div class="form-group">
                    <label for="">Name</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text"  id="fname" name="fname" value="<?php echo $client['Client']['fName']; ?>" placeholder="First Name" class="form-control"/>
						</div>
					    <div id="fname_err" class="v-error" style="display:none;">
						</div>
                </div>
					
				
				<div class="form-group">
                    <label for="">Last Name</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" id="lname" name="lname" value="<?php echo $client['Client']['lName']; ?>"  placeholder="Last Name" class="form-control">
						</div>
						<div id="lname_err" class="v-error" style="">
						</div>
					
                </div>	
                
                 <div class="form-group">
                      <label for="">Date Of Birth</label>
					  <div class="clear"></div>  
						<div  class="input-group date" data-date-format="dd-mm-yyyy">
						<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							<input id="dobdatepicker" name="dob" value="<?php echo date('Y/m/d',strtotime($client['Client']['DOB'])); ?>" class="form-control" type="text" readonly />
							
						</div>
						<div id="datepicker_err" class="v-error" style="display:none;">
				        </div>
                    </div> 			
					
				<div class="form-group">
                  
						
				<label for="">Phone 1</label>
				<div class="input-group">
							<input type="hidden" id="MobileCode" name="MobileCode"/>
							<input id="phone" value="<?php echo $client['Client']['phone']; ?>" onkeypress="return validnumberonly(event)"   type="tel" class="contactPhone form-control contactPhone">
						 
							
				</div>	
                 <div id="phone_err" class="v-error" style="display:none;">
				 </div>				
						
					
                </div>

                <?php for($i=2;$i<=5;$i++) {
				$index='phone'.$i;
				$classsname="";
                if($client['Client'][$index]!=""){
					$classsname="";
				}else{
					$classsname="telhideclass";
				}
				?>
				<div class="form-group <?php echo $classsname; ?> tdiv<?php echo $i; ?>">
				
				<label for="">Phone <?php echo $i; ?></label>
				
					<div class="input-group">

						<input type="tel" value="<?php echo $client['Client'][$index]; ?>"   class="contactPhone form-control contactPhone" onkeypress="return validnumberonly(event)" id="phone<?php echo $i; ?>" name="contactPhone<?php echo $i; ?>" style="width:100%;" required/>
						<span class="pull-right">
						
						
						<a href="javascript:void(0)" class="bminus<?php echo $i; ?>" id="btnRemove<?php echo $i; ?>" onClick="remove_secondary_contact(<?php echo $i; ?>)"><i class="fa fa-minus-square s-pos"></i></a>
						</span>
						<input type="hidden" value="" name="hndPhone<?php echo $i; ?>" id="hndPhone<?php echo $i; ?>" />
						
					</div>
					
				<div id="phone_err<?php echo $i; ?>" class="v-error" style="display:none;">
				</div>				
						
				</div>
				<?php } ?>


				<div class="p-icon" ><span class="pull-right expph"> <a  class="pull-right" onClick="add_secondary_contact(1)"><i class="fa fa-plus-circle"></i></a></span> </div>
				
				<div class="form-group">
                    <label for="">Address</label>
						
						
						
						<div class="pick-area">
							<input type="text" placeholder="Town" id="townsearchval" class="form-control" onkeyup="searchtown(this.value,event)" style="display:none;">
							<span id="towntext">
							<?php echo "Town - ".$client['City']['town']; ?><i class="fa fa-remove" onclick="tdelval()"></i>
							</span>
							<div class="name-list town-list" style="display: none;">
                             <ul id="townlist">
							 </ul>
							</div> 
							 <div id="town_err" class="v-error" style="display:none;">
				         </div>
							<input type="hidden" id="town" value="<?php echo $client['Client']['Town']; ?>">
							
							
						</div>

						
						
						<div class="input-group margin-top10">
							<span class="input-group-addon"><i class="fa fa-road"></i></span>
							<input type="text" name="street" id="street" value="<?php echo $client['Client']['Street']; ?>" placeholder="Street" class="form-control">
							
							<div id="street_err" class="v-error" style="display:none;">
				            </div>
						</div>
						
						<div class="input-group margin-top10">
							<span class="input-group-addon"><i class="fa fa-home"></i></span>
							<input type="text" id="refadr" name="refadr" value="<?php echo $client['Client']['RefAdr']; ?>" placeholder="Ref" class="form-control">
							<div id="refadr_err" class="v-error" style="display:none;">
				            </div>
						</div>
					
                </div>
				
				<div class="form-group">
                    <label for="">Balck Listed</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-toggle-on"></i></span>

							<select id="blackList" class="form-control"  name="blackList">
							<option value="1" <?php if($client['Client']['blackList']==1) { echo 'selected';} ?>>Yes</option>
							<option value="0" <?php if($client['Client']['blackList']==0) { echo 'selected';} ?>>No</option>
							</select>
							
						</div>
						<div id="BListed_err" class="v-error" style="display:none;">
                        </div>
					
					</div>
                  </div>

                  
                
              </div>
            </div>
		
<!--start 2nd box-->


			<div class="col-md-6">
				
			  
			  
			  
			  <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Additional Info</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                 
                    <!-- text input -->
					
					<div class="form-group">
                    <label for="">Payment Term</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
							<select  id="paymentMode" name="paymentMode" class="form-control" onchange="changepaymentterm();">
                                  <option value="">select payment Mode</option>
								  <option value="cash" <?php if($client['Client']['paymentMode']=="cash"){ echo " selected='selected' ";}?>>Cash</option>

								  <option value="cash commission" <?php if($client['Client']['paymentMode']=="cash commission"){ echo " selected='selected' ";}?>>Cash commission</option>

								  <option value="cash referrer" <?php if($client['Client']['paymentMode']=="cash referrer"){ echo " selected='selected' ";}?>>Cash  referrer</option>

								  <option value="credit" <?php if($client['Client']['paymentMode']=="credit"){ echo " selected='selected' ";}?>>Credit</option>

							</select>
							
						</div>
						<div id="paymentMode_err" class="v-error" style="display:none;">
                        </div>
					</div>
                    <div class="form-group pdiscount">
                    <label for="">Personal Discount</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
							<span class="input-group-addon">-</span>
							<input type="text" id="pdiscount" name="pdiscount" value="<?php echo $client['Client']['personalDiscount']; ?>"  placeholder="Discount" class="form-control"  onkeyup="validdecimalnumberonly(this.value)"  maxlength="5" />
							<span class="input-group-addon">%</span>
						</div>
						<div id="pdiscount_err" onkeypress="return validnumberonly(event)" class="v-error" style="display:none;">
                        </div>
					
					</div>
					<div class="form-group discount">
                    <label for="">Incremental Discount</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-toggle-on"></i></span>

							<select id="discount" class="form-control"  name="discount" >
							<option value="1" <?php if($client['Client']['incrementalDiscount']==1) { echo 'selected';} ?>>Yes</option>
							<option value="0" <?php if($client['Client']['incrementalDiscount']==0) { echo 'selected';} ?>>No</option>
							</select>
							
						</div>
						<div id="discount_err" class="v-error" style="display:none;">
                        </div>
					
					</div>
					
					<div class="form-group cdiscount" <?php if($client['Client']['paymentMode']!="credit"){ echo ' style="display:none"';} ?>>
                    <label for="">Car Discount</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
							<span class="input-group-addon">-</span>
							<input type="text" id="cdiscount" onkeypress="return validdecimalnumberonly(event)" name="cdiscount" value="<?php echo $client['Client']['cdiscount']; ?>"  placeholder="Car Discount" class="form-control" maxlength="5" >
							<span class="input-group-addon">%</span>
						</div>
						<div id="cdiscount_err"  class="v-error" style="display:none;">
                        </div>
					
					</div>
					
					<div class="form-group vdiscount" <?php if($client['Client']['paymentMode']!="credit"){ echo ' style="display:none"'; }?>>
                    <label for="">Van Discount</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user-secret"></i></span>
							<span class="input-group-addon">-</span>
							<input type="text" id="vdiscount" onkeypress="return validdecimalnumberonly(event)" name="vdiscount" value="<?php echo $client['Client']['vdiscount']; ?>"  placeholder="Van Discount" class="form-control" maxlength="5" >
							<span class="input-group-addon">%</span>
						</div>
						<div id="vdiscount_err"  class="v-error" style="display:none;">
                        </div>
					
					</div>
					
					<div class="form-group">
                    <label for="">Vat</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-cubes"></i></span>
							<input type="text"   name="vat" id="vat" value="<?php echo $client['Client']['Vat']; ?>" placeholder="Vat" class="form-control">
						</div>
						<div id="vat_err" class="v-error" style="display:none;">
                        </div>
					
					</div>
			         <div class="form-group">
                    <label for="">Note</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-tag"></i></span>
							<input type="text" id="note" name="note" placeholder="Note" value="<?php echo $client['Client']['Note']; ?>" class="form-control">
							<input type="hidden"  name="cid" id="cid" value="<?php echo $client['Client']['id']; ?>" />
						</div>
					    <div id="note_err" class="v-error" style="display:none;">
                        </div>
					</div>
			
			<div class="box-footer">
			        <input  class="btn btn-primary" type="button" id="btn"  name="btn" value="Save" onclick="saveform()" />
                    <span id="ajax_loader"></span>
                  </div>

                  
                </div><!-- /.box-body -->
              </div>
			</div>
			
			
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	  
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>build/css/intlTelInput.css?1456859475147">
    <style>
	.telhideclass{
		display:none;
	}
	.v-error {
   
    color: red;
  
   }
	</style>

 
	<script src="<?php echo $this->webroot; ?>build/js/jquery.min.js"></script> 
    <script src="<?php echo $this->webroot; ?>build/js/intlTelInput.js"></script>
	<!--
	<script src="<?php echo $this->webroot; ?>examples/js/isValidNumber.js"></script>
	-->
	
	

   
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->

    <script src="<?php echo $this->webroot; ?>js/bootstrap.min.js"></script>

    <script src="<?php echo $this->webroot; ?>js/app.min.js"></script>
	
    <script src='<?php echo $this->webroot; ?>js/bootstrap-datepicker.js'></script>

    <script src="<?php echo $this->webroot; ?>js/index.js"></script>
	
	
	
	
	
	
    
	<script>
	function add_secondary_contact(c){

		if($(".tdiv2").hasClass("telhideclass")){
			$(".tdiv2").removeClass('telhideclass');
			$("#btnAdd2").addClass('telhideclass');
			
		}else if($(".tdiv3").hasClass( "telhideclass")){
			$(".tdiv3").removeClass('telhideclass');
			$("#btnAdd3").addClass('telhideclass');
		}else if($(".tdiv4").hasClass( "telhideclass")){
			$(".tdiv4").removeClass('telhideclass');
			$("#btnAdd4").addClass('telhideclass');
		}else if($(".tdiv5").hasClass( "telhideclass")){
			$(".tdiv5").removeClass('telhideclass');
			$("#btnAdd5").addClass('telhideclass');
		}else{
			
		}	

	}

	function remove_secondary_contact(c){

	      $("#phone"+c).val('');
		  $(".tdiv"+c).addClass('telhideclass');

	}
	
	
	</script>
	
	<script>
	function testvalid(){

	         var telInput2 = $("#phone2"),
			 errorMsg2 = $("#error-msg2"),
			 validMsg2 = $("#valid-msg2");
	
			 telInput2.removeClass("error");
             errorMsg2.addClass("hide");
             validMsg2.addClass("hide");
			
			
			
			if ($.trim(telInput2.val())) {
			alert($.trim(telInput2.val()));
				if (telInput2.intlTelInput("isValidNumber")) {
				  validMsg2.removeClass("hide");
				} else {
					
				  telInput2.addClass("error");
				  errorMsg2.removeClass("hide");
				}
			  }
			
	}
	</script>
	
	<script>
	$(document).ready(function(){

		
		
		$(".contactPhone").intlTelInput({
		  initialCountry: "auto",
		  geoIpLookup: function(callback) {
			  
			  callback("<?php echo $client['Client']['phoneCode']; ?>");
			  $("#MobileCode").val("<?php echo $client['Client']['phoneCode']; ?>");
			
		  },
		  utilsScript: "<?php echo $this->webroot; ?>build/js/utils.js" // just for formatting/placeholders etc
		});
		
		/*
		$(".contactPhone").on("countrychange", function(e, countryData) {
	      $(".contactPhone").intlTelInput("setCountry", countryData.iso2);
		  $("#MobileCode").val(countryData.iso2);
        });
		
		*/
		
           
	});
	</script>
	 <script type="text/javascript">
           
			$(function () {
  $("#dobdatepicker").datepicker({ 
        autoclose: true, 
		 format: 'yyyy/mm/dd',
        todayHighlight: true
  }).datepicker('update', '<?php echo date('Y/m/d',strtotime($client['Client']['DOB'])); ?>');
});
        </script>

    <script>
	function saveform(){
		 
		var cflag=$(".selected-flag").attr("title");

		if (typeof cflag != 'undefined') {
			
		
		
		
		 
		$(".v-error").hide();
		var fname=$("#fname").val();
		var lname=$("#lname").val();
		
		var phone=$("#phone").val();
		var phone = $("#phone").intlTelInput("getNumber");
		$('#phone').val($("#phone").intlTelInput("getNumber"));
		
		
		
		var phone2=$("#phone2").val();
		var phone2 = $("#phone2").intlTelInput("getNumber");
		$('#phone2').val($("#phone2").intlTelInput("getNumber"));
		
		
		var phone3=$("#phone3").val();
		var phone3 = $("#phone3").intlTelInput("getNumber");
		$('#phone3').val($("#phone3").intlTelInput("getNumber"));
		
		var phone4=$("#phone4").val();
		var phone4 = $("#phone4").intlTelInput("getNumber");
		$('#phone4').val($("#phone4").intlTelInput("getNumber"));
		
		var phone5=$("#phone5").val();
		var phone5 = $("#phone5").intlTelInput("getNumber");
		$('#phone5').val($("#phone5").intlTelInput("getNumber"));
		
		
		var mobileCode=$("#MobileCode").val();
		
		var town=$("#town").val();
		var db=$("#dobdatepicker").val();
		var refadr=$("#refadr").val();
		
		var pdiscount=$("#pdiscount").val();
		var discount=$("#discount").val();
		
		var paymentMode=$("#paymentMode").val();
		var street=$("#street").val();
		
		var paymentMode=$("#paymentMode").val();
		var vat=$("#vat").val();
		
		var blackList=$("#blackList").val();
		var note=$("#note").val();
		
		var cdiscount=$("#cdiscount").val();
		var vdiscount=$("#vdiscount").val();
		
		
		


		var flag=0;
		
		if(fname.trim()==""){
			$("#fname_err").show();
			$("#fname_err").html("<p>Please enter client first name.</p>");
			flag++;
		}
/*
		if(lname.trim()==""){
			$("#lname_err").show();
			$("#lname_err").html("<p>Please enter client last name.</p>");
			flag++;
		}*/
		
		if(phone.trim()==""){
			$("#phone_err").show();
			$("#phone_err").html("<p>Please enter client primary contact no.</p>");
			flag++;
		}

		/*
		if(town.trim()==""){
			$("#town_err").show();
			$("#town_err").html("<p>Please select client town.</p>");
			flag++;
		}
		*/
		
		if(pdiscount!=""){
			if(pdiscount >=0 && pdiscount <=50){
			
			}else{
				$("#pdiscount_err").show();
				$("#pdiscount_err").html("<p>personal discount should be between 0 to 50.</p>");
				 flag++;
			}
		}
		if(paymentMode.trim()==""){
			$("#paymentMode_err").show();
			$("#paymentMode_err").html("<p>Please select payment mode.</p>");
			flag++;
		}

        
	    if(phone.trim()!=""){	
			if(phone.trim()==phone2.trim() || phone.trim()==phone3.trim() || phone.trim()==phone4.trim() || phone.trim()==phone5.trim()){
			$("#phone_err").show();
			$("#phone_err").html("<p>Please enter unique  primary contact no.</p>");
			
			}
			
			
			
			
			if ($("#phone").intlTelInput("isValidNumber")) { 
			} else {
			  $("#phone_err").show();
			  $("#phone_err").html("<p>Please enter valid  contact no.</p>");
			  flag++;	
			}
           
			
			
			
		}
		if(phone2.trim()!=""){	
			if(phone2.trim()==phone.trim() || phone2.trim()==phone3.trim() || phone2.trim()==phone4.trim() || phone2.trim()==phone5.trim()){
			$("#phone_err2").show();
			$("#phone_err2").html("<p>Please enter unique  contact no.</p>");
			flag++;	
			}
			
			if ($("#phone2").intlTelInput("isValidNumber")) { 
			} else {
			  $("#phone_err2").show();
			  $("#phone_err2").html("<p>Please enter valid contact no.</p>");
			  flag++;	
			}
			
			
		}
		
		if(phone3.trim()!=""){	
			if(phone3.trim()==phone.trim() || phone3.trim()==phone2.trim() || phone3.trim()==phone4.trim() || phone3.trim()==phone5.trim()){
			$("#phone_err3").show();
			$("#phone_err3").html("<p>Please enter unique  contact no.</p>");
			flag++;	
			}
			
			if ($("#phone3").intlTelInput("isValidNumber")) { 
			} else {
			  $("#phone_err3").show();
			  $("#phone_err3").html("<p>Please enter valid  contact no.</p>");
			  flag++;	
			}
			
			
			
		}
		if(phone4.trim()!=""){	
			if(phone4.trim()==phone.trim() || phone4.trim()==phone2.trim() || phone4.trim()==phone3.trim() || phone4.trim()==phone5.trim()){
			$("#phone_err4").show();
			$("#phone_err4").html("<p>Please enter unique contact no.</p>");
			flag++;		
			}
			
			if ($("#phone4").intlTelInput("isValidNumber")) { 
			} else {
			  $("#phone_err4").show();
			  $("#phone_err4").html("<p>Please enter valid  contact no.</p>");
			  flag++;	
			}
			
			
		}
		if(phone5.trim()!=""){	
			if(phone5.trim()==phone.trim() || phone5.trim()==phone2.trim() || phone5.trim()==phone3.trim() || phone5.trim()==phone4.trim()){
			$("#phone_err5").show();
			$("#phone_err5").html("<p>Please enter unique contact no.</p>");
			flag++;		
			}
			
			
			if ($("#phone5").intlTelInput("isValidNumber")) { 
			} else {
			  $("#phone_err5").show();
			  $("#phone_err5").html("<p>Please enter valid  contact no.</p>");
			  flag++;	
			}
			
			
		}
		
		if(paymentMode.trim()==""){
			$("#paymentMode_err").show();
			$("#paymentMode_err").html("<p>Please select payment mode.</p>");
			flag++;
		}else{
			
		  if(paymentMode=="credit"){
			  $(".cdiscount,.vdiscount").show();
			  $(".pdiscount,.discount").hide();
		  }else{
			  $(".cdiscount,.vdiscount").hide();
			  $(".pdiscount,.discount").show();
		  }	
			
          if(paymentMode=="credit" && discount == 1){
			$("#discount_err").show();
			$("#discount_err").html("<p>For credit incremental discount is not allow.</p>");
			flag++;
			
		  }else if(paymentMode=="credit" && pdiscount > 0){
			$("#discount_err").show();
			$("#discount_err").html("<p>Personal discount is not allow.</p>");
			flag++;
			
		  }else if(paymentMode=="cash" && pdiscount > 0 && discount == 1){
			$("#discount_err").show();
			$("#discount_err").html("<p>Incremental Discount / Personal discount not allow for same user.</p>");
			flag++;
			
		  }else if(paymentMode=="credit" && cdiscount==""){
			$("#cdiscount_err").show();
			$("#cdiscount_err").html("<p>Please enter car discount.</p>");
			flag++;
			
		  }else if(paymentMode=="credit" && vdiscount==""){
			$("#vdiscount_err").show();
			$("#vdiscount_err").html("<p>Please enter van discount.</p>");
			flag++;
			
		  }else if(paymentMode=="credit" && cdiscount!="" && (cdiscount < 0 || cdiscount > 50)){
			$("#cdiscount_err").show();
			$("#cdiscount_err").html("<p>Car discount should be between 0 to 50.</p>");
			flag++;
			
		  }else if(paymentMode=="credit" && vdiscount!="" && (vdiscount < 0 || vdiscount > 50)){
			$("#vdiscount_err").show();
			$("#vdiscount_err").html("<p>Van discount should be between 0 to 50.</p>");
			flag++;
			
		  }else{
			
		  }
			
		}
	    
		
		
	
		
		if(flag==0){
			
			
		

			
			
			 $("#ajax_loader").html('<img src="<?php echo $this->webroot;?>images/loading.gif">');
			 $("#btn").hide();
			
			 var cid=$("#cid").val();
			
			 jQuery.ajax({					 
						type: "POST",
						url: "<?php echo $this->webroot; ?>Clients/ajax_edit",
						dataType: "text",
						timeout:1000000,
						data: {fname:fname,lname:lname,phone:phone,phone2:phone2,phone3:phone3,phone4:phone4,phone5:phone5,town:town,db:db,refadr:refadr,pdiscount:pdiscount,discount:discount,paymentMode:paymentMode,vat:vat,street:street,cid:cid,mobileCode:mobileCode,blackList:blackList,note:note,vdiscount:vdiscount,cdiscount:cdiscount},
						success: function (response) {
							    $("#ajax_loader").html('');
							    $("#btn").show();
								
								if(response.trim()=="update"){
									window.location = "<?php echo $this->webroot; ?>Clients/listings";  
								}else{
									alert(response);
								}
				               
				        },
						error: function (xhr, ajaxOptions, thrownError) {
							    $("#ajax_loader").html('');
								$("#btn").show();
						}
			});
		}
		
		}else{
			alert("Please Select Country.");
			
		}
		
		
	}
	</script>
	<script>
	
	function validnumberonly(evt){
	var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode == 8 || charCode == 16 || charCode == 43 || (charCode > 47 && charCode < 58))
    return true;
    return false;
    }
	
	function validdecimalnumberonly(evt){
	var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode == 46 || charCode == 8 || charCode == 16 || charCode == 43 || (charCode > 47 && charCode < 58))
    return true;
    return false;
    }
	</script>
	
		<script>
	
	  function searchtown(charval,evt){
			
		$(".town-list").show();	
		var charCode = (evt.which) ? evt.which : event.keyCode;
			
				if(charCode==40 || charCode==38 || charCode==13 ){
				}else{		
				
						jQuery.ajax({					 
						type: "POST",
						url: "<?php echo $this->webroot; ?>Clients/ajax_town",
						dataType: "html",
						timeout:1000000,
						data: {charval:charval},
						success: function (response) {
							  
							  $("#townlist").html(response);
							  $('#townlist li:first').addClass('selected');
				        },
						error: function (xhr, ajaxOptions, thrownError) {
     
						}
			           });
				
			    }
			
			
		}
	
		   function addTown(id,type){
				$("#towntext").html('Town - '+$("#T_"+id).html()+' <i class="fa fa-remove" onclick="tdelval()"></i>');
				$("#town").val(id);
				$(".town-list").hide();
				$("#townlist").html('');
				$("#townsearchval").hide();
				
		
		   }
		   
		   function tdelval(){
			   $("#towntext").html('');
			   $("#townsearchval").show();
			   $("#town").val('');
		   }
			
	</script>
	<script>
	$(document).ready(function(){
		
	var paymentMode="<?php echo $client['Client']['paymentMode']; ?>";	
	if(paymentMode=="credit"){
			$(".cdiscount,.vdiscount").show();
			$(".pdiscount,.discount").hide();
		}else{
			$(".cdiscount,.vdiscount").hide();
			$(".pdiscount,.discount").show();
	}	
		
		

     $("#townsearchval").keydown(function(e) {

    if (e.keyCode == 38) { // d up
       
			var selected = jQuery('.selected');
			jQuery("#townlist li").removeClass('selected');
			if (selected.prev().length == 0) {
				selected.siblings().last().addClass('selected');
				
			} else {
				selected.prev().addClass('selected');
			}

		$('.town-list ul').animate({
			top: -1 * ($(".town-list ul li.selected").position().top - $(".town-list ul li.selected").height()) + "px"
		}, 200);
		
    }
    if (e.keyCode == 40) { // d down
      
        var selected = jQuery('.selected');
        jQuery("#townlist li").removeClass('selected');
        if (selected.next().length == 0) {
            selected.siblings().first().addClass('selected');
        } else {
            selected.next().addClass('selected');
            console.log(selected.text());
        }
		
		$('.town-list ul').animate({
        top: -1 * ($(".town-list ul li.selected").position().top - $(".town-list ul li.selected").height()) + "px"
    }, 200);
		
		
    }
	if (e.keyCode == 13) { // d enter
       
		var id=$(".town-list ul li.selected").data("id");
		var town=$(".town-list ul li.selected").data("town");
		if(id >0 && town!=""){
			addTown(id,town);
		}
        
    }

    });
	

	});

	</script>
	<script>
	function onpdiscount(val){
		$("#pdiscount_err").hide();
		if(val.trim()!=""){
			var personaldiscount=parseInt(val);
			if(personaldiscount >50){
				$("#pdiscount_err").show();
				$("#pdiscount_err").html("<p>personal discount should be between 0 to 50.</p>");
			}else{
				if(personaldiscount==0){
				$("#paymentMode").val("cash");
				
				}else{
				$("#paymentMode").val("cash");
                $("#discount").val(0);				
				}
			}
		}
		
	}
	
	function changepaymentterm(){
		var paymentMode=$("#paymentMode").val();
		$("#paymentMode_err").hide();
		if(paymentMode.trim()==""){
			$("#paymentMode_err").show();
			$("#paymentMode_err").html("<p>Please select payment mode.</p>");
			
		}else{
			var pdiscount=$("#pdiscount").val();
			
			if(paymentMode=="cash"){
			if(pdiscount.trim()!=""){
				var pd=parseInt(pdiscount);
				if(pd){
					$("#discount").val(0);
				}else{
					$("#discount").val(1);
				}
				
			}else{
				$("#pdiscount").val(0);
				$("#discount").val(1);
			}
			
			}else{
			$("#pdiscount").val(0);	
			$("#discount").val(0);
			}
			
		}
		
		if(paymentMode=="credit"){
			  $(".cdiscount,.vdiscount").show();
			  $(".pdiscount,.discount").hide();
		  }else{
			  $(".cdiscount,.vdiscount").hide();
			  $(".pdiscount,.discount").show();
		  }	
	}
	</script>