  <table id="booking1" class="booking_listing">
                    <thead>
                        <tr>
						<td></td>
						<td style="display:none"></td>
                        <th style="width:140px">When</th>
                        <th>Pick Up</th>
                        <th>Drop</th>
                        <th>Booking Id</th>
                        <th style="width:70px">Rate</th>
                        <th style="width:120px">Client Contact</th>
		        <th style="width:200px">Details</th>
			
			<th style="width:130px">Action</th>
                        </tr>
                    </thead>
                    <tbody style="background-color:yellow;">
					      <?php foreach($pending as $book) {
							$r=str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
                            $g=str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
							$b=str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
							$color=$r.$g.$b;

                            if($this->Session->read('newbookingid')==$book['Booking']['id']){
								$newlyaddeddata='newbookingrow';
							}else{
								$newlyaddeddata='';
							}

							
						  ?>
					    <tr class="bookingrecord bookingrow_<?php echo $book['Booking']['id'] ;?> <?php echo $newlyaddeddata; ?>">
						<td style="background:#<?php echo $color; ?>;width:3px;">
						</td>
						<td style="display:none">
						<?php

						$d=date("Y-m-d", strtotime($book['Booking']['Job_date']));
						$t=date("H:i:s", strtotime($book['Booking']['jobTime'])); 
						
						$ctime = $d." ".$t;
	                    echo $ctime = strtotime($ctime);
						
						
						?>
						</td>
						<td>
						<span class="booking_time">
						
						<?php echo  date("H:i A", strtotime($book['Booking']['jobTime'])); ?>
						
						</span>
						<br/>
						<span class="booking_date">
						
						<?php echo date("D dS M", strtotime($book['Booking']['Job_date'])); ?>
						</span> 
						</td>
                        <td>
						<span style="color:#EB812A;font-weight:bold;"><?php echo strtoupper($book['PCity']['town']) ;?></span> 
						<?php if($book['Booking']['pickupStreet']!=""){ echo "<span style='color:#81888A;'> ".$book['Booking']['pickupStreet']."</span>" ; } ?><?php if($book['Booking']['pickupRef']!="") { echo "<span style='color:#3E3F40;'> ".$book['Booking']['pickupRef']."</span>"; } ?> 
						</td>	
                        <td>
						<span style="color:#EB812A;font-weight:bold;"><?php echo strtoupper($book['DCity']['town']) ;?></span>
						<?php if($book['Booking']['dropStreet']!=""){ echo ", ".$book['Booking']['dropStreet'] ; } ?><?php if($book['Booking']['dropRef']!="") { echo ", ".$book['Booking']['dropRef']; } ?> 
						
						
						
                        </td>
                        
                         <td><?php echo strtoupper($book['Booking']['dbookingid']) ;?></td>
                        <td> 
						<span class="listing_rate">
						<?php 
						if($book['Client']['paymentMode']!="cash"){
						echo "A/C";	
						}else{
						echo "€ ".$book['Booking']['price'] ;
						}
						?>
						</span>
						</td>
						
                        <td><?php echo $book['Client']['fName'] ;?> <?php echo $book['Client']['lName'] ;?><br/><?php echo $book['Client']['phone'] ;?></td>
						
						<td>
						<?php if($book['Booking']['nameOnBoard']!="") { echo "" .$book['Booking']['nameOnBoard'].'<br/>' ; } ?>
						<?php if($book['Booking']['flightDetails']!="") { echo "" .$book['Booking']['flightDetails'].'<br/>' ; }?>
						<?php if($book['Booking']['Comment']!="") { echo "" .$book['Booking']['Comment'].'' ; }?>
						
						<?php if($book['Booking']['callerName']!="") { echo "<br/>Caller: " .$book['Booking']['callerName'] ; }?>
						
						<?php if($book['Booking']['reason']!="") { echo "<br/>" .$book['Booking']['reason'] ; }?>
						
						</td>
                       
                         <td style="width:165px;">
                         
                           <!-- Model box Action for accept -->								
									<a title="Accept the booking" class="del btn btn-success"   data-toggle="modal"  data-target=".bs-example-modal-sm1-<?php echo $book['Booking']['id']; ?>"><i class="fa fa-check icon-pos"></i> Accept
									</a>
									
									<div class="modal fade bs-example-modal-sm1-<?php echo $book['Booking']['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-sm1">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
													<h4 class="modal-title" id="mySmallModalLabel">&nbsp;&nbsp;</h4>
												</div>
												<div class="modal-body clearfix">
													<div class="with-padding text-center clearfix">
														<h6>Are you sure you want to accept this Booking?</h6>
															<?php
																echo $this->Form->postLink(
																	'<input type="button" name="" value="OK" class="btn btn-info">',
						array('action' => 'accepted', $book['Booking']['id']),array('escape'=>false,'title'=>''));
												?>  
														<input type="button" name="" value="Cancel" class="btn btn-primary"  data-dismiss="modal">
			 
													</div>
												</div>
											</div>
										</div>
									</div>
					<!-- Model box Action End accept -->   
					  <!-- Model box Action decline -->								
									<a title="Reject the booking" class="del btn btn-danger"  data-toggle="modal"  data-target=".bs-example-modal-sm2-<?php echo $book['Booking']['id']; ?>"><i class="fa fa-close icon-pos"></i>Reject
									</a>
									
									<div class="modal fade bs-example-modal-sm2-<?php echo $book['Booking']['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-sm2">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
													<h4 class="modal-title" id="mySmallModalLabel">&nbsp;&nbsp;</h4>
												</div>
												<div class="modal-body clearfix">
													<div class="with-padding text-center clearfix">
														<h6>Are you sure you want to delcine this Booking?</h6>
															<?php
																echo $this->Form->postLink(
																	'<input type="button" name="" value="OK" class="btn btn-info">',
					array('action' => 'decline',  $book['Booking']['id']),array('escape'=>false,'title'=>''));
												?>  
														<input type="button" name="" value="Cancel" class="btn btn-primary"  data-dismiss="modal">
			 
													</div>
												</div>
											</div>
										</div>
									</div>
					<!-- Model box Action End decline -->   
						
						
                       
						
                       
                      </td>				      
					      
					      </tr>
					      
					      <?php  } ?>
                      
                     
                     
                    </tbody>
                  </table>