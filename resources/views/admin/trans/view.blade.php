@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
View  Transaction
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css -->


<link rel="stylesheet" href="{{ asset('assets/vendors/wizard/jquery-steps/css/wizard.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/wizard/jquery-steps/css/jquery.steps.css') }}">
<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" />

<link href="{{ asset('assets/datepicker/css/datepicker.css') }}" rel="stylesheet" />

             
       <link rel="stylesheet" href="{{ asset('assets/vendors/wizard/jquery-steps/css/view.css') }}">

     
    

<!--end of page level css-->
@stop

   <style>
       .content
       {
           overflow: hidden;
       }
       #datetimepicker1 li{
           list-style: none;
       }
       .wizard
       {
            overflow: visible !important;
       }
            .wizard > .content
            {
               
               overflow: visible !important;
            }
            .wizard > .content > .body{height:95%;}
        </style>
{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>View Transactionr</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>View Transaction</li>
            
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                          View Transaction
                          
                        </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                    </div>
                    <div class="panel-body">

                        <!-- errors -->
                        <div class="has-error">
                      
                        </div>

                        <!--main content-->
                        <div class="col-md-12">
                              <?php foreach ($trans as $transs)
							  {
                       
                     ?>
                     <form class="form-wizard form-horizontal" action="dssffafassf" method="POST" id="wizard-validation" enctype="multipart/form-data" onsubmit="return false;">
                     
                       <h1>View Transaction</h1>
             <section>

                                 
                                        
                                           <div class="form-group ">
                                        <div class="col-sm-6"><strong>You are selling </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 ">
                                        {!! $transs->SELL_AMOUNT !!}{!! $transs->CURRENCY_SELL !!}
                                        </div>
                                    </div>
                                    

                                                    <div class="form-group">
                                        <div class="col-sm-6"><strong>You are buying </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 ">
                                        {!! $transs->BUY_AMOUNT !!}{!! $transs->CURRENCY_BUY !!}
                                        </div>
                                    </div>
                               
                                              <div class="form-group">
                                        <div class="col-sm-6"><strong>Amount </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 amount">
                                       {!! $transs->SELL_AMOUNT !!}
                                        </div>
                                    </div>
                               
                               
                                              
                                    
                                   <div class="form-group">
                                        <div class="col-sm-6"><strong>Your Exchange Rate </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 cr">
                                       {!! $transs->EXCHANAGE_RATE !!}
                                        </div>
                                    </div>
                                    
    <div class="form-group">
                                        <div class="col-sm-6"><strong>Mid-market Exchange Rate </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 mr">
                                          {!! $transs->MID_MARKET_RATE !!}
                                        </div>
                                    </div>
                                    
                                    
                                     
                                        <div class="form-group">
                                            <div class="col-sm-12" style="font-size: 20px;"><strong> Beneficiary Personal Details: </strong>
                                           
                                       </div>
                                       
                                    </div>
                                    
                                    <div class="form-group">
                                
                                        <div class="col-sm-4">
                                           
                                              
                                       
                                        </div>
                                        
                                    
                                        
                                         <div class="col-sm-4">
                                            <strong>Total Amount Available </strong> <br/>
                                       
                                              
                                         
                                           
                                           
                                        </div>
                                              <div class="col-sm-4">
                                                       <strong class="">{!! $transs->BUY_AMOUNT !!}{!! $transs->CURRENCY_BUY !!}</strong> <br/>                            
                                          
                                           
                                       

                                    </div>
                                </div>
                                    
                                       <div class="form-group">
                                
                                        <div class="col-sm-4">
                                            <strong>Sender</strong> <br/>
                                              
                                       
                                        </div>
                                        
                                         <div class="col-sm-4">
                                            <strong>Beneficiary</strong> <br/>
                                                
                                               
                                           
                                        </div>
                                        
                                         <div class="col-sm-4">
                                            <strong>Amount</strong> <br/>
                                       
                                              
                                         
                                           
                                           
                                        </div>
                                              
                                </div>
                                
                                
                                
                                
                                <div class="form-group" id="dtben">
                                  <?php 
  

  
  foreach ($paymentlist as $payment)
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
                                        
                                </div>
                               
                                   
                               
                               <div class="form-group">
                                
                                        <div class="col-sm-4">
                                           
                                              
                                       
                                        </div>
                                        
                                    
                                        
                                         <div class="col-sm-4">
                                            <strong>Remaining Amount </strong> <br/>
                                       
                                              
                                        
                                           
                                           
                                        </div>
                                              <div class="col-sm-4" id="raben">
                                                                           
                                           <?php echo $remhav=$transs->BUY_AMOUNT-$payments; ?> {!! $transs->CURRENCY_BUY !!}
                                           
                                       
                                    </div>
                                </div>
                                   


                                </section>
                        
</form>
                       
                              <?php } ?>
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
    <script src="{{ asset('assets/vendors/wizard/jquery-steps/js/jquery.steps_edit_ts.js') }}"></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form_wizard.js') }}"></script>
     
      
            


  
   
@stop