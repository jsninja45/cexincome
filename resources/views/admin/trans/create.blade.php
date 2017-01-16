@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Submit a Transaction
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css -->


<link rel="stylesheet" href="{{ asset('assets/vendors/wizard/jquery-steps/css/wizard.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/wizard/jquery-steps/css/jquery.steps.css') }}"> 
<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" />



              <link href="{{ asset('assets/css/bootstrap-select.css') }}" rel="stylesheet" />
       

     
    <div id="cover"></div>
        <style>
        #cover {
    background: url("<?php echo url(); ?>/ajax_loader.gif") no-repeat scroll center center #FFF;
	opacity:.8;
        
    position: fixed;
    height: 100%;
    width: 100%;
    z-index: 9999999999;
    display: none;
   
}
    </style>

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
			.wizard > .content > .body input[type="checkbox"]
			{
			display:table !important;
			}
        </style>
{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Submit a Transactionr</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Submit a Transaction</li>
            
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                          Submit a Transaction
                          
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
             
                            <!-- BEGIN FORM WIZARD WITH VALIDATION {{route('Submittransaction/create')}}-->
                            <form class="form-wizard form-horizontal" action="{{route('Submittransaction/dash')}}" method="POST" id="wizard-validation" enctype="multipart/form-data">
                                <!-- CSRF Token -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                
                       

                                <!-- first tab -->
                                <h1>Currency Setup</h1>

                                <section>

                                    <div class="form-group">
                                        <div class="col-sm-6"><strong>Currency </strong>
                                            <br/>
                                            <span>Chose the currency you wish to sell</span>
                                       </div>
                                        <div class="col-sm-6">
                                            <strong>Currency sell</strong> <br/>
                                            <select class="form-control required"   name="currencysell" id="currencysell"  onchange="curckek(this.value);">
                                                <option value="">Select</option>
                                                 <?php
												 foreach($comcurrency as $comcurr)
												 {
												 ?>
                                                    <option value="<?php echo $comcurr->CURRENCY?>"><?php echo $comcurr->CURRENCY?></option>
                                                 <?php }?>
                                              
                                            </select>
                                        </div>
                                    </div>

                                  <div class="form-group">
                                        <div class="col-sm-6"><strong>Currency </strong>
                                            <br/>
                                            <span>Chose the currency you wish to buy.</span>
                                       </div>
                                        <div class="col-sm-6">
                                            <strong>Currency buy</strong> <br/>
                                            <select class="form-control required"  name="currencybuy" id="currencybuy" >
                                              <option value="AUD">AUD</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6"><strong>Amount </strong>
                                            <br/>
                                            <span>Amount of currency you want to buy/sell. </span>
                                       </div>
                                        <div class="col-sm-6">
                                                                              
                                            <input type="text" class=" form-control decimal required" name="amount" id="amount"  placeholder="100000" >

                                       
                                    </div>
                                        
                                        <input type="hidden" class=" form-control decimal " name="cr" id="cr" >
                                         
                                        <input type="hidden" class=" form-control decimal " name="mr" id="mr"   >
                                        
                                        <input type="hidden" class=" form-control decimal " name="bamnt" id="bamnt" >
                                        
                                         <input type="hidden" class=" form-control " name="SESSION_TM" id="SESSION_TM" value="<?php echo time();?>" >
                                         
                                        
                                    </div>
                                    

                                          
                                    
               
                                    


                                </section>

                                
                                


                                <!-- second tab -->
                                <h1>Live Quote</h1>

                                <section>

                                    

                                        
                                           <div class="form-group">
                                        <div class="col-sm-6"><strong>You are selling </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 currencysell">
                                      
                                        </div>
                                    </div>
                                    

                                                    <div class="form-group">
                                        <div class="col-sm-6"><strong>You are buying </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 currencybuy">
                                        
                                        </div>
                                    </div>
                                    
                                   <div class="form-group">
                                        <div class="col-sm-6"><strong>Your Exchange Rate </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 cr">
                                      
                                        </div>
                                    </div>
                                    
    <div class="form-group">
                                        <div class="col-sm-6"><strong>Mid-market Exchange Rate </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 mr">
                                     
                                        </div>
                                    </div>
                                    
                                    
                                     <div class="form-group">
                                        <div class="col-sm-6"><strong>Quote Expiry </strong>
                                           
                                       </div>
                                         <div class="col-sm-6" >
                                             <input id="countdown1" name="countdown1" type="text" class="form-control" readonly="" style="font-size:24px;" />
                                        </div>
                                    </div>
                                    
                                          <div class="form-group">
                                        <div class="col-sm-6">
                                        <strong>I am happy with the quote </strong>
                                        </div>
                                     
                                         <div class="col-sm-6" >
                                           <label class="checkbox-inline"><input type="checkbox" value="happy" id="happy" name="happy" class="form-control required" style="box-shadow:none; height:24px;" onclick="ratesave();"  ></label>
                                            
                                        </div>
                                    </div>
                                    
                                    
                                    
 

                                </section>

                               

                                <!-- third tab -->
                                <h1>Beneficiaries</h1>
                                <section>
                                
                                
                                 <div class="form-group">
                                
                                        <div class="col-sm-4">
                                           
                                              
                                       
                                        </div>
                                        
                                    
                                        
                                         <div class="col-sm-4">
                                            <strong>Total Amount Available </strong> <br/>
                                       
                                              
                                         
                                           
                                           
                                        </div>
                                              <div class="col-sm-4">
                                                       <strong class="currencybuy"></strong> <br/>                            
                                          
                                           
                                       
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                
                                        <div class="col-sm-4">
                                            <strong>Sender</strong> <br/>
                                              
                                       
                                        </div>
                                        
                                         <div class="col-sm-4">
                                            <strong>Beneficiary</strong> <br/>
                                                
                                               
                                           
                                        </div>
                                        
                                         <div class="col-sm-2">
                                            <strong>Amount</strong> <br/>
                                       
                                              
                                         
                                           
                                           
                                        </div>
                                              <div class="col-sm-2">
                                                       <strong>Action</strong> <br/>                            
                                          
                                           
                                       
                                    </div>
                                </div>
                                
                                
                                
                                
                                <div class="form-group" id="dt">
                                
                                        
                                </div>
                                
                                
                                
                                
                                   <?php for($j=0;$j<=15;$j++){?>
                                <div class="form-group" id="frmj<?php echo $j;?>">
                                
                                        <div class="col-sm-4">
                                         
                                              <select class="selectpicker form-control" data-live-search="true"  name="sender<?php echo $j;?>" id="sender<?php echo $j;?>" >
                                                <option value="">Select</option>
                                                 <?php foreach ($sender as $senders)
							                         {
                       
                                                    ?>
                                  <option value="<?php echo $senders->id?>"><?php echo $senders->FIRST_NAME." ";?><?php echo $senders->LAST_NAME?></option>
                                                 <?php }?>
                                  </select>
                                       
                                        </div>
                                        
                                         <div class="col-sm-4">
                                         
                                   
                                                
                                               <select class="selectpicker form-control" data-live-search="true"  name="beneficiary<?php echo $j;?>" id="beneficiary<?php echo $j;?>" >
                                                <option value="">Select</option>
                                              <?php foreach ($beni as $beneficiarys)
							                         {
                       
                                                    ?>
                                  <option value="<?php echo $beneficiarys->id?>"><?php echo $beneficiarys->FIRST_NAME." ";?><?php echo $beneficiarys->LAST_NAME?></option>
                                                 <?php }?>
                                  </select>
                                           
                                        </div>
                                        
                                         <div class="col-sm-2">
                                       
                                             <input type="text" class=" form-control decimal" name="amount_ts<?php echo $j;?>" id="amount_ts<?php echo $j;?>" >
                                           
                                           
                                        </div>
                                              <div class="col-sm-2">
                                                                         
                                            <button type="button" class="btn btn-primary" onclick="subpaym('<?php echo $j;?>');">Ok</button>
                                           
                                       
                                    </div>
                                </div>
                               <?php } ?>
                               <input type="hidden" name="cntj" id="cntj" value="<?php echo $j;?>" />
                               <input type="hidden" name="trand_id" id="trand_id" value="" />
                               
                             <!--  <button type="button" class="btn btn-primary" onclick="showanoth();">Add Another + </button>-->
                               
                                <input type="hidden" name="antc" id="antc" value="1" />
                                
                                 <input type="hidden" name="totamnt" id="totamnt" value="" />
                                
                                
                                <div class="form-group">
                                
                                        <div class="col-sm-4">
                                           
                                              
                                       
                                        </div>
                                        
                                    
                                        
                                         <div class="col-sm-4">
                                            <strong>Remaining Amount </strong> <br/>
                                       
                                              
                                         <?php //$remhav=$transs->BUY_AMOUNT-$payments; ?>
                                           
                                           
                                        </div>
                                              <div class="col-sm-4" id="ra">
                                                                           
                                          
                                           
                                       
                                    </div>
                                </div>
                                 
                                </section>


                                <!-- fourth tab -->
                                <h1>Confirmation</h1>
                           <section>

                                    

                                        
                                           <div class="form-group ">
                                        <div class="col-sm-6"><strong>You are selling </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 currencysell">
                                        
                                        </div>
                                    </div>
                                    

                                                    <div class="form-group">
                                        <div class="col-sm-6"><strong>You are buying </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 currencybuy">
                                       
                                        </div>
                                    </div>
                               
                                              <div class="form-group">
                                        <div class="col-sm-6"><strong>Amount </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 amount">
                                       
                                        </div>
                                    </div>
                               
                               
                                              
                                    
                                   <div class="form-group">
                                        <div class="col-sm-6"><strong>Your Exchange Rate </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 cr">
                                       
                                        </div>
                                    </div>
                                    
    <div class="form-group">
                                        <div class="col-sm-6"><strong>Mid-market Exchange Rate </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 mr">
                                       
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
                                                       <strong class="currencybuy"></strong> <br/>                            
                                          
                                           
                                       
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
                                
                                        
                                </div>
                               
                                   
                               
                               <div class="form-group">
                                
                                        <div class="col-sm-4">
                                           
                                              
                                       
                                        </div>
                                        
                                    
                                        
                                         <div class="col-sm-4">
                                            <strong>Remaining Amount </strong> <br/>
                                       
                                              
                                         <?php   //$remhav=$transs->BUY_AMOUNT-$payments; ?>
                                           
                                           
                                        </div>
                                              <div class="col-sm-4" id="raben">
                                                                           
                                          
                                           
                                       
                                    </div>
                                </div>
                                
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
       <input type="hidden" name="pamt" id="pamt" value="0" />
 <form id="viwee" name="viw" method="post" action="">
                        <input type="hidden" name="totamnts" id="totamnts" value="" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
               <input type="hidden" name="trand_ids" id="trand_ids" value="" />
    </form>
    
    
    
    <div class="modal fade" id="rateaddmod" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Data save</h4>
        </div>
        <div class="modal-body">
          <p>Rates save successfully.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    
    
    <div class="modal fade" id="recordsave" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Data save</h4>
        </div>
        <div class="modal-body">
          <p>Record add in QUOTE Status.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
    
  </div>
    
    
    
      <div class="modal fade" id="valierror" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Error</h4>
        </div>
        <div class="modal-body">
          <p id="suberror"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  
  <div class="modal fade" id="delalert" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Confirmation</h4>
        </div>
        <div class="modal-body">
          <p >Are you sure, want to delete?</p>
        </div>
        <div class="modal-footer">
         <button type="button" class="btn btn-danger" id="delyes" >Yes</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        </div>
      </div>
      
    </div>
  </div>
    
    
    

@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script>

var checkaddd;
var cntd;
var ratesaveck;


function cdownn()
{
 countdown( "countdown1", <?php echo $qe->QE_TIME;?>, 0 );
  
 
}
    function countdown( elementName, minutes, seconds )
{

    var element, endTime, hours, mins, msLeft, time;

    function twoDigits( n )
    {
        return (n <= 9 ? "0" + n : n);
    }

    function updateTimer1()
    {
        msLeft = endTime - (+new Date);
        if ( msLeft < 1000 ) {
		alert("Time over");
	window.location='<?php echo url(); ?>/admin';
           
        } else {
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.value = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            
            //alert(twoDigits( (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() )));
            setTimeout( updateTimer1, time.getUTCMilliseconds() + 500 );
        }
    }

    element = document.getElementById( elementName );
    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
    updateTimer1();
}


</script>



                       
  
    <script type="text/javascript" src="{{ asset('assets/vendors/wizard/jquery-steps/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wizard/jquery-steps/js/jquery.steps.js') }}"></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form_wizard.js') }}"></script>
         <script src="{{ asset('assets/js/bootstrap-select.js') }}"></script>
     
      
            
<script>

    function delconf(val,amoun)
{
	$('#delalert').modal('show');
$("#delyes").click(function(){
delconfirm(val,amoun);
});
}

 function delconfirm(val,amoun)
 {
$('#delalert').modal('hide');
$('#cover').show();
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  } 
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
  {
    funajx();     
pviewdit();

var amt=$("#pamt").val();
					
					$("#pamt").val(Number(amt)-Number(amoun));
					
				 amt=$("#pamt").val();
				 
			
					
					$("#ra").html(((Number($("#totamnts").val())-Number(amt)).toFixed(2))+'('+$("#currencybuy").val()+')');
					
					$("#raben").html(((Number($("#totamnts").val())-Number(amt)).toFixed(2))+'('+$("#currencybuy").val()+')'); 
					  $('#cover').fadeOut(100);
					


  }
  }
xmlhttp.open("GET","<?php echo url(); ?>/admin/Payment/delpay?pid="+val,true);
xmlhttp.send();
}

    
    function curckek(val)
{

var sell=$("#currencysell").val();
var buy=$("#currencybuy").val();
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  } 
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
  {
      
  
   var obj = JSON.parse(xmlhttp.responseText);


   
if(typeof  obj.error_code!== "undefined" && typeof  obj.error_code!== null) {
  
      alert("Unsupported Currency");

     $("#currencysell").val("");


    }
  }
  }
xmlhttp.open("GET","<?php echo url(); ?>/admin/curcheck?buy="+buy+"&sell="+sell,true);
xmlhttp.send();
}
  
    
    
function curcal(sell,buy)
{
    if(sell!='')
    {
     $('#cover').show();
 }
 var bbamnt=$("#amount").val();
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  } 
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
// alert(xmlhttp.responseText);
   var obj = JSON.parse(xmlhttp.responseText);
   
  
   
             $(".currencybuy").html((($("#amount").val()*obj.core_rate).toFixed(2))+ '('+$("#currencybuy").val()+')');
             
              $("#bamnt").val(($("#amount").val()*obj.core_rate));
			  $("#totamnt").val(($("#amount").val()*obj.core_rate));
			  $("#totamnts").val(($("#amount").val()*obj.core_rate));
             
             
              $(".mr").html(obj.mid_market_rate);
                   $(".cr").html(obj.core_rate);
                   
                   $("#mr").val(obj.mid_market_rate);
                   $("#cr").val(obj.core_rate);
				   
				   $("#ra").html((($("#amount").val()*obj.core_rate).toFixed(2))+ '('+$("#currencybuy").val()+')');
					
					$("#raben").html((($("#amount").val()*obj.core_rate).toFixed(2))+ '('+$("#currencybuy").val()+')');
					
					subfrm();
                    $('#cover').fadeOut(100);
					
				
					
    }
  }
xmlhttp.open("GET","<?php echo url(); ?>/admin/api?buy="+buy+"&sell="+sell+"&amnt="+bbamnt,true);
xmlhttp.send();
}

function subfrm()
{

if(checkaddd!=1)
{


   $.ajax({
                    url:'<?php echo url(); ?>/admin/Submittransaction/create',
                    type:'POST',
                    data:$("#wizard-validation").serialize(),
                    success:function(result){
					$("#trand_ids").val(result.trim());
					$("#trand_id").val(result.trim());
					
					    $('#recordsave').modal('show'); 
					
                     //alert("Record add in QUOTE Status");
                         checkaddd=1;
                    }

            });
			}
}
function ratesave()
{

if(ratesaveck!=1)
{
$("#happy").attr("disabled", true);

   $.ajax({
                    url:'<?php echo url(); ?>/admin/Submittransaction/rateadd',
                    type:'POST',
                    data:$("#wizard-validation").serialize(),
                    success:function(result){
					
					 ratesaveck=1;
					    $('#rateaddmod').modal('show'); 
					
                     
                        
                    }

            });
			}
}





</script>
		

    <script type="text/javascript">
	
	function subpaym(val)
		{
		
		$("#cntj").val(val);
		
		
		var flags=1;
		var htmlerror="";
		
		 if($("#sender"+val).val()=='')
		{
		htmlerror=htmlerror+"Sender field required <br/>"
		flags=0;
		
		}
		 if($("#beneficiary"+val).val()=='')
		{
		
		htmlerror=htmlerror+"Beneficiary field required <br/>"
		flags=0;
		}
		
		
	
		if($("#amount_ts"+val).val()=='' || Number($("#amount_ts"+val).val())<=0)
		{
		
		htmlerror=htmlerror+"Amount Must be grater than 0 <br/>"
	flags=0;
		}
		
		
			var amt=$("#pamt").val();
					
					$("#pamt").val(Number(amt)+Number($("#amount_ts"+val).val()));
					
				 amt=$("#pamt").val();
				 if(Number($("#totamnts").val())-Number($("#pamt").val())<0)
				 {
							 	htmlerror=htmlerror+"Amount must be less than remaining amount <br/>"
	flags=0;
				 $("#pamt").val(Number(amt)-Number($("#amount_ts"+val).val()));
				 
				 }
				 
		if(flags==0)
		{
		$('#suberror').html(htmlerror);
		$('#valierror').modal('show');
		 
		return false;
		}
				 $('#cover').show();
		 $.ajax({
                    url:'<?php echo url(); ?>/admin/Payment/create',
                    type:'POST',
                    data:$("#wizard-validation").serialize(),
                    success:function(result){
					
				
				 
			
					
					$("#ra").html(((Number($("#totamnts").val())-Number($("#pamt").val())).toFixed(2))+'('+$("#currencybuy").val()+')');
					
					$("#raben").html(((Number($("#totamnts").val())-Number($("#pamt").val())).toFixed(2))+'('+$("#currencybuy").val()+')');
					
				
					
					
					
					$("#dt").html(result);
					
					 $("#sender"+val).val("");
					 $("#beneficiary"+val).val("");
					 $('.selectpicker').selectpicker('val', '');
                      $("#amount_ts"+val).val("");
					  $('#cover').fadeOut(100);
                    }

            });
		}
		




		

		
		function pviewdit()
		{
		$('#cover').show();
			 $.ajax({
                    url:'<?php echo url(); ?>/admin/Payment/pviewdit',
                    type:'POST',
                    data:$("#viwee").serialize(),
                    success:function(result){
					
					$("#dtben").html(result);
					$('#cover').fadeOut(100);
                    }

            });
			}
	
	function funajx()
		{  	$('#cover').show();
		
			 $.ajax({
                    url:'<?php echo url(); ?>/admin/Payment/pview',
                    type:'POST',
                    data:$("#viwee").serialize(),
                    success:function(result){
					
			
					$("#dt").html(result);
					
					
					$('#cover').show();
                      
                    }

            });
			}
        
        
        
     
            $(function () {
                
				
							//funajx();
			for(var k=1;k<=15;k++)
			{
			$("#frmj"+k).hide();
			}

                $('.decimal').keyup(function(){
                 
    var val = $(this).val();
    if(isNaN(val)){
         val = val.replace(/[^0-9\.]/g,'');
         if(val.split('.').length>2) 
             val =val.replace(/\.+$/,"");
    }
    $(this).val(val); 
})
   
                
         
             
                
                
               
            });
        </script>

  
   
@stop