@extends('admin/layouts/default')



{{-- Page title --}}

@section('title')

Senders List

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

    <h1>Senders</h1>

    <ol class="breadcrumb">

        <li>

            <a href="{{ route('dashboard') }}">

                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>

                Dashboard

            </a>

        </li>

        <li>Senders</li>

        <li class="active">Senders</li>

    </ol>

</section>



<!-- Main content -->

<section class="content paddingleft_right15">

    <div class="row">

        <div class="panel panel-primary ">

            <div class="panel-heading">

                <h4 class="panel-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>

                    Senders List

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

                    @foreach ($sender as $senders)

                    	<tr>

                            <td>{!! $senders->id !!}</td>

                    		<td>{!! $senders->FIRST_NAME !!}</td>

            				<td>{!! $senders->LAST_NAME !!}</td>

            				<td>{!! $senders->CONTACT_NO !!}</td>


            				<td>{!! $senders->CREATED_AT !!}</td>

            				<td>

                          

<button type="button" class="btn btn-info" onclick="window.location='{{ route('senders.view', $senders->id) }}'"  >View</button>

                                <a href="{{ route('senders.update', $senders->id) }}"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Edit Sender"></i></a>


                            </td>

            			</tr>
                        
                        
                        <div class="modal fade" id="details{!! $senders->id !!}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sender Details</h4>
        </div>
        <div class="modal-body" style="width:100%; display:inline-block">
        


                                    <div class="form-group">
                                        <div class="col-sm-6"><strong>First Name </strong>
                                            
                                       </div>
                                        <div class="col-sm-6 ddate">
                                        {!! $senders->FIRST_NAME !!}
                                        </div>
                                    </div>

                                        <div class="form-group">
                                        <div class="col-sm-6"><strong>Last Name </strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                          {!! $senders->LAST_NAME !!}
                                        </div>
                                    </div>
                                           <div class="form-group">
                                        <div class="col-sm-6"><strong>Address </strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                          {!! $senders->ADDRESS !!}
                                        </div>
                                    </div>
                                           <div class="form-group">
                                        <div class="col-sm-6"><strong>City</strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                          {!! $senders->CITY !!}
                                        </div>
                                    </div>
                                           <div class="form-group">
                                        <div class="col-sm-6"><strong>State</strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                          {!! $senders->STATE !!}
                                        </div>
                                    </div>
                                           <div class="form-group">
                                        <div class="col-sm-6"><strong>Country</strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                          {!! $senders->COUNTRY !!}
                                        </div>
                                    </div>
                                           <div class="form-group">
                                        <div class="col-sm-6"><strong>Post Code </strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                          {!! $senders->POST_CODE !!}
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        <div class="col-sm-6"><strong>Contact Number</strong>
                                         
                                       </div>
                                        <div class="col-sm-6 ddate">
                                          {!! $senders->CONTACT_NO !!}
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

@stop