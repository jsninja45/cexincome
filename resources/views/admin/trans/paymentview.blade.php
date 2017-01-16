  <?php 
  

  
  foreach ($payments as $payment)
							  {
                       
                     ?>
                            <div class="col-sm-4">
                                         <?php
											$Senders = DB::table('Senders')->where('id',"=", $payment->SENDER_ID)->first();
											
									
											   
											 echo $Senders->FIRST_NAME." ".$Senders->LAST_NAME?><br/>
                                              
                                       
                                        </div>
                                        
                                         <div class="col-sm-4">
                                          <?php
											$beneficiary = DB::table('Beneficiaries')->where('id',"=", $payment->BENEFICIARY_ID)->first();
											
									
											   
											 echo $beneficiary->FIRST_NAME." ".$beneficiary->LAST_NAME?><br/>
                                                
                                               
                                           
                                        </div>
                                        
                                         <div class="col-sm-4">
                                           <?php echo $payment->AMOUNT?><br/>
                                       
                                              
                                         
                                           
                                           
                                        </div>
                                              
                                    
                                    <?php } ?>