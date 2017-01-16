@extends('admin/layouts/default')



{{-- Page title --}}

@section('title')

Transaction

@parent

@stop



{{-- page level styles --}}

@section('header_styles')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/extensions/bootstrap/dataTables.bootstrap.css') }}" />

<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
<style>
.modal-body div
{

padding:5px;
background:#eee;
}
.modal-content
{

background:#eee;
}
table.dataTable thead .sorting_asc::after
{
content:"" !important;
}
table.dataTable thead .sorting::after
{
content:"" !important;
}

</style>

@stop





{{-- Page content --}}

@section('content')

<section class="content-header">

    <h1>Transaction</h1>

    <ol class="breadcrumb">

        <li>

            <a href="{{ route('dashboard') }}">

                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>

                Dashboard

            </a>

        </li>

        <li class="active">Transaction</li>

    </ol>

</section>



<!-- Main content -->

<section class="content paddingleft_right15">

    <div class="row">

        <div class="panel panel-primary ">

            <div class="panel-heading">

                <h4 class="panel-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>

                    Transaction List

                </h4>

            </div>

            <br />

            <div class="panel-body">

                <table class="table table-bordered " id="table">

                    <thead>

                        <tr class="filters">

                            <th>Buy Amount</th>

                            <th>Sell Amount</th>

                            <th>Exchange Rate</th>

                            <th>Mid Market Rate</th>

                            <th>Transfar Type</th>

                            <th>Details</th>

                          

                        </tr>

                    </thead>

                    <tbody>
                    

                    @foreach ($trans as $transs)
                    
                    <?php $snd = DB::table('Senders')
            ->where('id','=',$transs->SENDER_ID)->first(); ?>
            
             <?php $bnf = DB::table('Beneficiaries')
            ->where('id','=',$transs->BENEFICIARY_ID)->first(); ?>

                    	<tr>

                            <td>{!! $transs->BUY_AMOUNT !!} {!!$transs->CURRENCY_BUY !!}</td>

                    		<td>{!! $transs->SELL_AMOUNT !!} {!!$transs->CURRENCY_SELL !!}</td>

            				<td>{!! $transs->EXCHANAGE_RATE !!}</td>

            				<td>{!! $transs->MID_MARKET_RATE !!}</td>


                            <td>{!! $transs->TRANSFER_TYPE !!}</td>

                    		<td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#details{!! $transs->id !!}">Quick View</button>
                            
                                                     <a href="{{ route('Submittransaction.update', $transs->id) }}"><i class="livicon" data-name="view" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="View Transaction"></i></a>
                            </td>

            	

            					

            			</tr>
                        
                        <div class="modal fade" id="details<?php echo $transs->id;?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Transaction Details</h4>
        </div>
        <div class="modal-body" style="width:100%;">
        


                                    <div class="form-group">
                                        <div class="col-sm-6"><strong>Delivery Date </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 ddate">
                                        {!! $transs->DELIVERY_DATE !!}
                                        </div>
                                    </div>

                                        <div class="form-group">
                                        <div class="col-sm-6"><strong>Settlement Date </strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                          {!! $transs->DELIVERY_DATE !!}
                                        </div>
                                    </div>
                                           <div class="form-group ">
                                        <div class="col-sm-6"><strong>You are selling </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 currencysell">
                                       {!! $transs->SELL_AMOUNT !!} {!!$transs->CURRENCY_SELL !!}
                                        </div>
                                    </div>
                                    

                                                    <div class="form-group">
                                        <div class="col-sm-6"><strong>You are buying </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 currencybuy">
                                       {!! $transs->BUY_AMOUNT !!} {!!$transs->CURRENCY_BUY !!}
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
                                        <div class="col-sm-6"><strong>Payment </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 payment1">
                                        {!! $transs->PAYMENT !!}
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
                                        <div class="col-sm-6"><strong>Transfer type </strong>
                                           
                                       </div>
                                        <div class="col-sm-6 ttype">
                                     {!! $transs->TRANSFER_TYPE !!}
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <div class="col-sm-12" style="font-size: 20px;"><strong> Beneficiary Personal Details: </strong>
                                           
                                       </div>
                                       
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6"><strong>Beneficiary First Name  </strong>
                                           
                                       </div>
                                        <div class="col-sm-6 bfn">
                                          {!! $bnf->FIRST_NAME !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6"><strong>Beneficiary Last Name  </strong>
                                           
                                       </div>
                                        <div class="col-sm-6 bln">
                                        {!! $bnf->LAST_NAME !!}
                                        </div>
                                    </div>
                                    
                                       <div class="form-group">
                                        <div class="col-sm-6"><strong>Beneficiary Address </strong>
                                           
                                       </div>
                                        <div class="col-sm-6 badd">
                                          {!! $bnf->ADDRESS !!}
                                        </div>
                                    </div>
                               
                                   <div class="form-group">
                                        <div class="col-sm-6"><strong>City </strong>
                                           
                                       </div>
                                        <div class="col-sm-6 city">
                                          {!! $bnf->CITY !!}
                                        </div>
                                    </div>
                               
                               
                                   <div class="form-group">
                                        <div class="col-sm-6"><strong>State</strong>
                                           
                                       </div>
                                        <div class="col-sm-6 state">
                                          {!! $bnf->STATE !!}
                                        </div>
                                    </div>
                               
                                   <div class="form-group">
                                        <div class="col-sm-6"><strong>Post Code</strong>
                                           
                                       </div>
                                        <div class="col-sm-6 zip">
                                          {!! $bnf->POSTCODE !!}
                                        </div>
                                    </div>
                               
                               
                               
                                      <div class="form-group">
                                        <div class="col-sm-6"><strong>Beneficiary Contact Number  </strong>
                                           
                                       </div>
                                        <div class="col-sm-6 bcn">
                                      {!! $bnf->CONTACT_NUMBER !!}
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <div class="col-sm-6"><strong>Payout Amount </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 pamount">
                                            {!! $transs->PAYOUT_AMOUNT !!}
                                        </div>
                                    </div>
                                    
                                    
                                   <?php if($transs->TRANSFER_TYPE=='Cash'){?>
                                    <div class="form-group sd">
                                            <div class="col-sm-12" style="font-size: 20px;"><strong> Senders Details: </strong>
                                           
                                       </div>
                                       
                                    </div>
                                    
                                    
                                        <div class="form-group sd">
                                        <div class="col-sm-6"><strong>Senders First Name  </strong>
                                           
                                       </div>
                                        <div class="col-sm-6 sname">
                                       {!! $snd->FIRST_NAME !!}
                                        </div>
                                    </div>
                                        <div class="form-group sd">
                                        <div class="col-sm-6"><strong>Senders Last Name  </strong>
                                           
                                       </div>
                                        <div class="col-sm-6 sadd">
                                     {!! $snd->LAST_NAME !!}
                                        </div>
                                    </div>
                                   
                                    <?php } else {?>
                                    
                                   
                                    <div class="form-group ba">
                                            <div class="col-sm-12" style="font-size: 20px;"><strong> Beneficiary Bank Details: </strong>
                                           
                                       </div>
                                       
                                    </div>
                                    
                                    
                                        <div class="form-group ba">
                                        <div class="col-sm-6"><strong>Account Name  </strong>
                                           
                                       </div>
                                        <div class="col-sm-6 acnm">
                                        {!! $snd->ACCOUNT_NAME !!}
                                        </div>
                                    </div>
                                        <div class="form-group ba">
                                        <div class="col-sm-6"><strong>Account Number  </strong>
                                           
                                       </div>
                                        <div class="col-sm-6 acnmum">
                                       {!! $snd->ACCOUNT_NUMBER !!}
                                        </div>
                                    </div>
                                        
                                           <div class="form-group ba">
                                        <div class="col-sm-6"><strong>BSB  </strong>
                                          
                                       </div>
                                        <div class="col-sm-6 bsb">
                                     {!! $snd->BSB !!}
                                        </div>
                                    </div>
                                        
                                        
                                                <div class="form-group ba">
                                        <div class="col-sm-6"><strong>Bank  </strong>
                                           
                                       </div>
                                        <div class="col-sm-6 bnk">
                                      {!! $snd->BANK !!}
                                        </div>
                                    </div>
                                        <?php }?>
                                   
                                    
                                          <div class="form-group ba">
                                        <div class="col-sm-6"><strong>Purpose of Transaction </strong>
                                           
                                       </div>
                                        <div class="col-sm-6 pots">
                                  {!! $transs->PURPOSE !!}
                                        </div>
                                    </div>
                                    
                                   
                                    


                           

            			
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

                    @endforeach

                        

                    </tbody>

                </table>

            </div>

        </div>

    </div>    <!-- row-->

</section>

@stop



{{-- page level scripts --}}

@section('footer_scripts')

<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/vendors/datatables/extensions/bootstrap/dataTables.bootstrap.js') }}"></script>



<script>

$(document).ready(function() {

	$('#table').DataTable();

});

</script>



<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">

	<div class="modal-dialog">

    	<div class="modal-content"></div>

  </div>

</div>

<script>

$(function () {

	$('body').on('hidden.bs.modal', '.modal', function () {

		$(this).removeData('bs.modal');

	});

});

</script>

@stop