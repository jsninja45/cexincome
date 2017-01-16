@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
View Sender
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css -->
<link rel="stylesheet" href="{{ asset('assets/vendors/wizard/jquery-steps/css/wizard.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/wizard/jquery-steps/css/jquery.steps.css') }}">
<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('assets/vendors/wizard/jquery-steps/css/view.css') }}">
<!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Edit Sender</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Sender</li>
            <li class="active">View Sender</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            View Sender
                        </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                    </div>
                    <div class="panel-body">



                        <!--main content-->
                        <div class="col-md-12">

                            <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                            <form class="form-wizard form-horizontal" action="" method="POST"  id="wizard-validation"  enctype="multipart/form-data">
                                <!-- CSRF Token -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                <!-- first tab -->
                               
                          <h1>Sender Profile</h1>
                                     <section style="height:880px;">

                                    <div class="form-group">
                                        <label for="first_name" class="col-sm-2 control-label">First Name *</label>
                                        <div class="col-sm-10">
                                            <input id="first_name" name="first_name" type="text" readonly="readonly"  class="form-control required" value="{!! $sender_data->FIRST_NAME !!}" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="last_name" class="col-sm-2 control-label">Last Name *</label>
                                        <div class="col-sm-10">
                                            <input id="last_name" name="last_name" type="text"  readonly="readonly"  class="form-control required" value="{!! $sender_data->LAST_NAME !!}" />
                                        </div>
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="postal" class="col-sm-2 control-label">Contact Number *</label>
                                        <div class="col-sm-10">
                                            <input id="contact_number" name="contact_number"  readonly="readonly" type="text" class="form-control required" value="{!! $sender_data->CONTACT_NO !!}" />
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="address" class="col-sm-2 control-label">Address *</label>
                                        <div class="col-sm-10">
                                            <input id="address" name="address" type="text"  readonly="readonly" class="form-control required" value="{!! $sender_data->ADDRESS !!}" />
                                        </div>
                                    </div>
                                    
                                        <div class="form-group">
                                        <label for="city" class="col-sm-2 control-label">City *</label>
                                        <div class="col-sm-10">
                                            <input id="city" name="city" type="text"  readonly="readonly" class="form-control required" value="{!! $sender_data->CITY !!}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="state" class="col-sm-2 control-label">State *</label>
                                        <div class="col-sm-10">
                                            <input id="state" name="state" type="text"  readonly="readonly" class="form-control required" value="{!! $sender_data->STATE !!}" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="country" class="col-sm-2 control-label">Country *</label>
                                        <div class="col-sm-10">
                            
  <input id="country" name="country" type="text"  readonly="readonly" class="form-control required" value="{!! $sender_data->COUNTRY !!}" />
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="postal" class="col-sm-2 control-label">Postal/zip *</label>
                                        <div class="col-sm-10">
                                            <input id="postal" name="postal"  readonly="readonly" type="text" class="form-control required" value="{!! $sender_data->POST_CODE !!}" />
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
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/wizard/jquery-steps/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wizard/jquery-steps/js/jquery.steps_edit.js') }}"></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form_wizard.js') }}"></script>
@stop