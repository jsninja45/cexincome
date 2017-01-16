@extends('admin/layouts/default')



{{-- Page title --}}

@section('title')

Beneficiary List

@parent

@stop



{{-- page level styles --}}

@section('header_styles')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/extensions/bootstrap/dataTables.bootstrap.css') }}" />

<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />

@stop





{{-- Page content --}}

@section('content')

<section class="content-header">

    <h1>Beneficiary</h1>

    <ol class="breadcrumb">

        <li>

            <a href="{{ route('dashboard') }}">

                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>

                Dashboard

            </a>

        </li>

        <li>Beneficiary</li>

        <li class="active">Beneficiary</li>

    </ol>

</section>



<!-- Main content -->

<section class="content paddingleft_right15">

    <div class="row">

        <div class="panel panel-primary ">

            <div class="panel-heading">

                <h4 class="panel-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>

                    Beneficiary List

                </h4>

            </div>

            <br />

            <div class="panel-body">

                <table class="table table-bordered " id="table">

                    <thead>

                        <tr class="filters">

                            <th>ID</th>

                            <th>First Name</th>

                            <th>Last Name</th>

                            <th>Contact Number</th>

                            <th>Created At</th>

                            <th>Actions</th>

                        </tr>

                    </thead>

                    <tbody>

                    @foreach ($beneficiary as $beneficiaries)

                    	<tr>

                            <td>{!! $beneficiaries->id !!}</td>

                    		<td>{!! $beneficiaries->FIRST_NAME !!}</td>

            				<td>{!! $beneficiaries->LAST_NAME !!}</td>

            				<td>{!! $beneficiaries->CONTACT_NUMBER !!}</td>


            				<td>{!! $beneficiaries->CREATED_AT !!}</td>

            				<td>

                          

<button type="button" class="btn btn-info"  onclick="window.location='{{ route('beneficiaries.view', $beneficiaries->id) }}'">View</button>

                                <a href="{{ route('beneficiaries.update', $beneficiaries->id) }}"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Edit Sender"></i></a>


                            </td>

            			</tr>
                        
                        
                        <div class="modal fade" id="details{!! $beneficiaries->id !!}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Beneficiary Details</h4>
        </div>
        <div class="modal-body" style="width:100%; display:inline-block">
        


                                    <div class="form-group">
                                        <div class="col-sm-6"><strong>First Name </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 ddate">
                                        {!! $beneficiaries->FIRST_NAME !!}
                                        </div>
                                    </div>

                                        <div class="form-group">
                                        <div class="col-sm-6"><strong>Last Name </strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                          {!! $beneficiaries->LAST_NAME !!}
                                        </div>
                                    </div>
                                           <div class="form-group">
                                        <div class="col-sm-6"><strong>Address </strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                          {!! $beneficiaries->ADDRESS !!}
                                        </div>
                                    </div>
                                           <div class="form-group">
                                        <div class="col-sm-6"><strong>City</strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                          {!! $beneficiaries->CITY !!}
                                        </div>
                                    </div>
                                           <div class="form-group">
                                        <div class="col-sm-6"><strong>State</strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                          {!! $beneficiaries->STATE !!}
                                        </div>
                                    </div>
                                           <div class="form-group">
                                        <div class="col-sm-6"><strong>Country</strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                           {!! $beneficiaries->COUNTRY !!}
                                        </div>
                                    </div>
                                           <div class="form-group">
                                        <div class="col-sm-6"><strong>Post Code </strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                          {!! $beneficiaries->POSTCODE !!}
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        <div class="col-sm-6"><strong>Contact Number</strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                          {!! $beneficiaries->CONTACT_NUMBER !!}
                                        </div>
                                    </div>
                                  @if ($beneficiaries->TRANSFER_TYPE=='Account Transfer')
                                  
                             
                                    
                                    <div class="form-group">
                                        <div class="col-sm-6"><strong>Account Name</strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                          {!! $beneficiaries->ACCOUNT_NAME !!}
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-6"><strong>Account Number</strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                          {!! $beneficiaries->ACCOUNT_NO !!}
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-6"><strong>BSB</strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                          {!! $beneficiaries->BSB !!}
                                        </div>
                                    </div>
                                    
                                         <div class="form-group">
                                        <div class="col-sm-6"><strong>Bank</strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                          {!! $beneficiaries->BANK !!}
                                        </div>
                                    </div>
                                  
                                  @endif
                                       
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

@stop