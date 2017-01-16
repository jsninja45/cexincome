@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit  Transaction
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
            <li>Edit Transaction</li>
            
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                          Edit Transaction
                          
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
             
                            <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                            <form class="form-wizard form-horizontal" action="{{route('Submittransaction/dash')}}" method="POST" id="wizard-validation" enctype="multipart/form-data" >
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
                                       
                                             <input type="text" class=" form-control" name="currencysell" id="currencysell2" value=" {!! $transs->CURRENCY_SELL !!}"  readonly="readonly">
                                           
                                        </div>
                                    </div>

                                  <div class="form-group">
                                        <div class="col-sm-6"><strong>Currency </strong>
                                            <br/>
                                            <span>Chose the currency you wish to buy.</span>
                                       </div>
                                        <div class="col-sm-6">
                                            <strong>Currency buy</strong> <br/>
                                       
                                            <input type="text" class=" form-control" name="currencybuy" id="currencybuy2" value=" {!! $transs->CURRENCY_BUY !!}"   readonly="readonly" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6"><strong>Amount </strong>
                                            <br/>
                                            <span>Amount of currency you want to buy/sell. </span>
                                       </div>
                                        <div class="col-sm-6">
                                                                              
                                          <input type="text" class=" form-control decimal required" name="amount" id="amount" value="{!! $transs->SELL_AMOUNT !!}"  placeholder="100000"  readonly="readonly" >

                                       
                                    </div>
                                        
                                        <input type="hidden" class=" form-control decimal " name="cr" id="cr" value="{!! $transs->EXCHANAGE_RATE !!}" >
                                         
                                        <input type="hidden" class=" form-control decimal " name="mr" id="mr"  value="{!! $transs->MID_MARKET_RATE !!}" >
                                        
                                        <input type="hidden" class=" form-control decimal " name="bamnt" id="bamnt" value="{!! $transs->BUY_AMOUNT !!}" >
                                         
                                        
                                    </div>
                                    

                                          
                                    
               
                                    


                                </section>

                                
                                


                                <!-- second tab -->
                                <h1>Live Quote</h1>

                                <section>

                                    

                                        
                                           <div class="form-group">
                                        <div class="col-sm-6"><strong>You are selling </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 currencysell">
                                      {!! $transs->SELL_AMOUNT !!} {!! $transs->CURRENCY_SELL !!}
                                        </div>
                                    </div>
                                    

                                                    <div class="form-group">
                                        <div class="col-sm-6"><strong>You are buying </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 currencybuy">
                                        {!! $transs->BUY_AMOUNT !!} {!! $transs->CURRENCY_BUY !!}
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
                                        <div class="col-sm-6"><strong>Quote Expiry </strong>
                                           
                                       </div>
                                         <div class="col-sm-6" >
                                             <input id="countdown1" name="countdown1" type="text" class="form-control" readonly="" style="font-size:24px;" />
                                        </div>
                                    </div>
                                     <!--<div class="form-group">
                                        <div class="col-sm-6"><strong>Quote Expiry </strong>
                                           
                                       </div>
                                         <div class="col-sm-6" >
                                             <input id="countdown1" name="countdown1" type="hidden" class="form-control" readonly="" />
                                        </div>
                                    </div>-->
                                    


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
                                                       <strong>{!! $transs->BUY_AMOUNT !!} {!! $transs->CURRENCY_BUY !!}</strong> <br/>                            
                                          
                                           
                                       
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
                                         
                                              <select class="selectpicker form-control" data-live-search="true"   name="sender<?php echo $j;?>" id="sender<?php echo $j;?>" >
                                                <option value="">Select</option>
                                                 <?php foreach ($sender as $senders)
							                         {
                       
                                                    ?>
                                  <option value="<?php echo $senders->id?>"><?php echo $senders->FIRST_NAME." ";?><?php echo $senders->LAST_NAME?></option>
                                                 <?php }?>
                                  </select>
                                       
                                        </div>
                                        
                                         <div class="col-sm-4">
                                   
                                                
                                               <select class="selectpicker form-control" data-live-search="true"   name="beneficiary<?php echo $j;?>" id="beneficiary<?php echo $j;?>" >
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
                               <input type="hidden" name="trand_id" id="trand_id" value="<?php echo $transs->id;?>" />
                               
                               <!--<button type="button" class="btn btn-primary" onclick="showanoth();">Add Another + </button>-->
                               
                                <input type="hidden" name="antc" id="antc" value="1" />
                                
                                 <input type="hidden" name="totamnt" id="totamnt" value="<?php echo $transs->BUY_AMOUNT;?>" />
                                
                                
                                <div class="form-group">
                                
                                        <div class="col-sm-4">
                                           
                                              
                                       
                                        </div>
                                        
                                    
                                        
                                         <div class="col-sm-4">
                                            <strong>Remaining Amount </strong> <br/>
                                       
                                              
                                         <?php $remhav=$transs->BUY_AMOUNT-$payments; ?>
                                           
                                           
                                        </div>
                                              <div class="col-sm-4" id="ra">
                                                       <strong>{!! $remhav !!} {!! $transs->CURRENCY_BUY !!}</strong> <br/>                            
                                          
                                           
                                       
                                    </div>
                                </div>
                                 
                                </section>
                                
                                


                                <!-- fourth tab -->
                                <h1>Confirmation</h1>
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
    
       <input type="hidden" name="pamt" id="pamt" value="<?php echo $payments; ?>" />
      <?php
	 
	  
	   foreach ($trans as $transs)
							  {
							 $tm=time();
$exptmm=floor(($transs->EXP_TIME-$tm)/60);

$expsec=floor(($transs->EXP_TIME-$tm)%60);

							  
                     ?>    <form id="viwee" name="viw" method="post" action="">
                        <input type="hidden" name="totamnts" id="totamnts" value="<?php echo $transs->BUY_AMOUNT;?>" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
               <input type="hidden" name="trand_ids" id="trand_ids" value="<?php echo $transs->id;?>" />
    </form>
<?php } ?>


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
				 
			
					
					$("#ra").html(((Number($("#totamnts").val())-Number(amt)).toFixed(2))+'('+$("#currencybuy2").val()+')');
					
					$("#raben").html(((Number($("#totamnts").val())-Number(amt)).toFixed(2))+'('+$("#currencybuy2").val()+')'); 
					  $('#cover').fadeOut(100);
					


  }
  }
xmlhttp.open("GET","<?php echo url(); ?>/admin/Payment/delpay?pid="+val,true);
xmlhttp.send();

}

function cdown()
{
 countdown( "countdown1", <?php echo $exptmm;?>, <?php echo $expsec;?>);
}

function showanoth()
{
var idc=$("#antc").val();


$("#frmj"+idc).show();

$("#antc").val(Number(idc)+1);

}


  //  function countdown( elementName, minutes, seconds )
//{
//
//    var element, endTime, hours, mins, msLeft, time;
//
//    function twoDigits( n )
//    {
//        return (n <= 9 ? "0" + n : n);
//    }
//
//    function updateTimer1()
//    {
//        msLeft = endTime - (+new Date);
//        if ( msLeft < 1000 ) {
//           
//        } else {
//            time = new Date( msLeft );
//            hours = time.getUTCHours();
//            mins = time.getUTCMinutes();
//            element.value = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
//            
//            //alert(twoDigits( (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() )));
//            setTimeout( updateTimer1, time.getUTCMilliseconds() + 500 );
//        }
//    }
//
//    element = document.getElementById( elementName );
//    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
//    updateTimer1();
//}


</script>


			
                       
  
    <script type="text/javascript" src="{{ asset('assets/vendors/wizard/jquery-steps/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wizard/jquery-steps/js/jquery.steps_edit_ts.js') }}"></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form_wizard.js') }}"></script>
          <script src="{{ asset('assets/js/bootstrap-select.js') }}"></script>
 
      
            
<script>

var checkaddd;
var cntd;
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
				
					$("#ra").html(((Number($("#totamnts").val())-Number($("#pamt").val())).toFixed(2))+'('+$("#currencybuy2").val()+')');
					
					$("#raben").html(((Number($("#totamnts").val())-Number($("#pamt").val())).toFixed(2))+'('+$("#currencybuy2").val()+')');
					
					
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
		{   $('#cover').show();
		
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
		{
			$('#cover').show();
			 $.ajax({
                    url:'<?php echo url(); ?>/admin/Payment/pview',
                    type:'POST',
                    data:$("#viwee").serialize(),
                    success:function(result){
					
			
					$("#dt").html(result);
					
                      $('#cover').fadeOut(100);
                    }

            });
			}
        
     
            $(function () {
			
			funajx();
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