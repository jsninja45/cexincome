@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit Beneficiary
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css -->
<link rel="stylesheet" href="{{ asset('assets/vendors/wizard/jquery-steps/css/wizard.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/wizard/jquery-steps/css/jquery.steps.css') }}">
<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('assets/vendors/wizard/jquery-steps/css/single.css') }}">
<!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Edit Beneficiary</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Beneficiary</li>
            <li class="active">Edit Beneficiary</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Edit Beneficiary
                        </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                    </div>
                    <div class="panel-body">

                        <!-- errors -->
          
                        <!--main content-->
                        <div class="col-md-12">

                            <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                            <form class="form-wizard form-horizontal" action="" method="POST"  id="wizard-validation"  enctype="multipart/form-data">
                                <!-- CSRF Token -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                <!-- first tab -->
                               
                          <h1>Beneficiary Profile</h1>
                                <section style="height:1500px;">

                                    <div class="form-group">
                                        <label for="first_name" class="col-sm-2 control-label">First Name *</label>
                                        <div class="col-sm-10">
                                            <input id="first_name" name="first_name" type="text"  class="form-control required" value="{!! $beneficiaries_data->FIRST_NAME !!}" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="last_name" class="col-sm-2 control-label">Last Name *</label>
                                        <div class="col-sm-10">
                                            <input id="last_name" name="last_name" type="text"  class="form-control required" value="{!! $beneficiaries_data->LAST_NAME !!}" />
                                        </div>
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="postal" class="col-sm-2 control-label">Contact Number *</label>
                                        <div class="col-sm-10">
                                            <input id="contact_number" name="contact_number" type="text" class="form-control required" value="{!! $beneficiaries_data->CONTACT_NUMBER !!}" />
                                        </div>
                                    </div>
                                  
                            
                            
                                    <div class="form-group">
                                        <label for="address" class="col-sm-2 control-label">Address *</label>
                                        <div class="col-sm-10">
                                            <input id="address" name="address" type="text" class="form-control required" value="{!! $beneficiaries_data->ADDRESS !!}" />
                                        </div>
                                    </div>
                                    
                                        <div class="form-group">
                                        <label for="city" class="col-sm-2 control-label">City *</label>
                                        <div class="col-sm-10">
                                            <input id="city" name="city" type="text" class="form-control required" value="{!! $beneficiaries_data->CITY !!}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="state" class="col-sm-2 control-label">State *</label>
                                        <div class="col-sm-10">
                                            <input id="state" name="state" type="text" class="form-control required" value="{!! $beneficiaries_data->STATE !!}" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="country" class="col-sm-2 control-label">Country *</label>
                                        <div class="col-sm-10">
                                            <select class="form-control required" id="country" name="country">
                                            
                                            <option value="">Select</option>
                                            <?php
											$country = DB::table('country')->lists('country_name');
											foreach($country as $name) 
											{
											?>
                                               <option value="<?php echo $name?>" <?php if($beneficiaries_data->COUNTRY==$name){?>selected <?php }?>><?php echo $name?></option>
                                            <?php } ?>
                                            
                                            </select>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="postal" class="col-sm-2 control-label">Postal/zip *</label>
                                        <div class="col-sm-10">
                                            <input id="postal" name="postal" type="text" class="form-control required" value="{!! $beneficiaries_data->POSTCODE !!}" />
                                        </div>
                                    </div>
                                    
                            

                                    <div class="form-group">
                                        <div class="col-sm-6"><strong>Transfer type </strong>
                                           
                                       </div>
                                        <div class="col-sm-6">
                                            <label class="radio-inline"><input type="radio" name="ttype" id="csd" value="Cash" required <?php if($beneficiaries_data->TRANSFER_TYPE=='Cash'){?> checked="checked" <?php }?> > Cash</label>
                                            <label class="radio-inline"><input type="radio" name="ttype"  id="cba" value="Account Transfer" <?php if($beneficiaries_data->TRANSFER_TYPE=='Account Transfer'){?> checked="checked" <?php }?> >Account Transfer</label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ba">
                                            <div class="col-sm-12" style="font-size: 20px;"><strong> Beneficiary Bank Details: </strong>
                                           
                                       </div>
                                       
                                    </div>
                                    
                                    
                                        <div class="form-group ba">
                                        <div class="col-sm-6"><strong>Account Name  </strong>
                                           
                                       </div>
                                        <div class="col-sm-6 ">
                                          <input id="acnm" name="acnm" type="text" class="baf form-control required" value="{!! $beneficiaries_data->ACCOUNT_NAME !!}"  />
                                        </div>
                                    </div>
                                        <div class="form-group ba">
                                        <div class="col-sm-6"><strong>Account Number  </strong>
                                           
                                       </div>
                                        <div class="col-sm-6">
                                          <input id="acnmum" name="acnmum" type="text" class="baf form-control required" value="{!! $beneficiaries_data->ACCOUNT_NO !!}"   />
                                        </div>
                                    </div>
                                        
                                           <div class="form-group ba">
                                        <div class="col-sm-6"><strong>BSB  </strong>
                                           
                                       </div>
                                        <div class="col-sm-6">
                                          <input id="bsb" name="bsb" type="text" class="baf form-control required" value="{!! $beneficiaries_data->BSB !!}"   />
                                        </div>
                                    </div>
                                        
                                        
                                                <div class="form-group ba">
                                        <div class="col-sm-6"><strong>Bank  </strong>
                                           
                                       </div>
                                        <div class="col-sm-6">
                                          <input id="bnk" name="bnk" type="text" class=" baf form-control required" value="{!! $beneficiaries_data->BANK !!}"   />
                                        </div>
                                    </div>
                                 
                                          

                                    <p>(*) Mandatory</p>

                                </section>

                                

                            </form>
                            <!-- END FORM WIZARD WITH VALIDATION -->
                        </div>
                        <!--main content end-->
                    </div>
                </div>
            </div>
        </div>
        <!--row end-->
    </section>
    
   
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/wizard/jquery-steps/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wizard/jquery-steps/js/jquery.steps_edit.js') }}"></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form_wizard.js') }}"></script>

     <script type="text/javascript">
        
        
     
            $(function () {

   
                
                <?php if($beneficiaries_data->TRANSFER_TYPE=='Cash'){?>
                $(".ba").hide();
				   $("#acnm").removeClass("required");
                           $("#acnmum").removeClass("required");
                           $("#bsb").removeClass("required");
                           $("#bnk").removeClass("required");
           <?php } else {?>
			    $('#wizard-validation .content').addClass('importantRule');
			   <?php } ?>
                
                $("#csd").click(function(){
				
				$('#wizard-validation .content').removeClass('importantRule');
				 $("#wizard-validation .content").height(500);   
				   $("#acnm").removeClass("required");
                           $("#acnmum").removeClass("required");
                           $("#bsb").removeClass("required");
                           $("#bnk").removeClass("required");
                         

                    $(".ba").hide();
})
                               $("#cba").click(function(){
                                    $("#wizard-validation .content").height(800);         
                                         
                       $("#acnm").addClass("required");
                           $("#acnmum").addClass("required");
                           $("#bsb").addClass("required");
                           $("#bnk").addClass("required");
                         
    $(".ba").show();
                 
})
             
                
                
             
            });
        </script>
@stop
