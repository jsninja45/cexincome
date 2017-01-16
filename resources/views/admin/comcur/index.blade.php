@extends('admin/layouts/default')



{{-- Page title --}}

@section('title')

Currency List

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

    <h1>Currency</h1>

    <ol class="breadcrumb">

        <li>

            <a href="{{ route('dashboard') }}">

                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>

                Dashboard

            </a>

        </li>

      

        <li class="active">Currency</li>

    </ol>

</section>



<!-- Main content -->

<section class="content paddingleft_right15">

    <div class="row">

        <div class="panel panel-primary ">

            <div class="panel-heading">

                <h4 class="panel-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>

                    Currency List

                </h4>

            </div>

            <br />

            <div class="panel-body">

                <table class="table table-bordered " id="table">

                    <thead>

                        <tr class="filters">

                       

                            <th>Company</th>

                            <th>Currency</th>
                            
                            <th>From Amount</th>
                            
                            <th>To Amount</th>

                            <th>Exchange Rate</th>

                            <th>Created At</th>

                            <th>Actions</th>

                        </tr>

                    </thead>

                    <tbody>

                    @foreach ($comcurrency as $comcurrencis)

                    	<tr>

                          

                    		<td>
                            <?php $company = DB::table('company')->where("id",'=',$comcurrencis->COMPANY_ID )->first();
							echo $company->name;
							 ?>
                            </td>

            				<td>{!! $comcurrencis->CURRENCY !!}</td>
                            
                            <td>{!! $comcurrencis->FROM_AMOUNT !!}</td>
                            
                           <td>{!! $comcurrencis->TO_AMOUNT !!}</td>

            				<td>{!! $comcurrencis->MULTIPLIER !!}</td>


            				<td>{!! $comcurrencis->CREATED_AT !!}</td>

            				<td>

                          



                                <a href="{{ route('currency.update', $comcurrencis->id) }}"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Edit Sender"></i></a>


                            </td>

            			</tr>
                        
                        
                        

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