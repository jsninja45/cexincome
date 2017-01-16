@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Add Sender
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
        <h1>Add New Sender</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Sender</li>
            <li class="active">Add New Sender</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Add New Sender
                        </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                    </div>
                    <div class="panel-body">

                        <!-- errors  -->
           

                        <!--main content-->
                        <div class="col-md-12">

                            <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                            <form class="form-wizard form-horizontal" action="{{ route('create/sender') }}" method="POST"  id="wizard-validation"  enctype="multipart/form-data">
                                <!-- CSRF Token -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                <!-- first tab -->
                               
                          <h1 style="display:none;">Sender Profile</h1>
                                <section style="height:880px;">

                                    <div class="form-group">
                                        <label for="first_name" class="col-sm-2 control-label">First Name *</label>
                                        <div class="col-sm-10">
                                            <input id="first_name" name="first_name" type="text"  class="form-control required" value="{!! Input::old('first_name') !!}" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="last_name" class="col-sm-2 control-label">Last Name *</label>
                                        <div class="col-sm-10">
                                            <input id="last_name" name="last_name" type="text"  class="form-control required" value="{!! Input::old('last_name') !!}" />
                                        </div>
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="postal" class="col-sm-2 control-label">Contact Number *</label>
                                        <div class="col-sm-10">
                                            <input id="contact_number" name="contact_number" type="text" class="form-control required" value="{!! Input::old('contact_number') !!}" />
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="address" class="col-sm-2 control-label">Address *</label>
                                        <div class="col-sm-10">
                                            <input id="address" name="address" type="text" class="form-control required" value="{!! Input::old('address') !!}" />
                                        </div>
                                    </div>
                                    
                                        <div class="form-group">
                                        <label for="city" class="col-sm-2 control-label">City *</label>
                                        <div class="col-sm-10">
                                            <input id="city" name="city" type="text" class="form-control required" value="{!! Input::old('city') !!}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="state" class="col-sm-2 control-label">State *</label>
                                        <div class="col-sm-10">
                                            <input id="state" name="state" type="text" class="form-control required" value="{!! Input::old('state') !!}" />
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
                                               <option value="<?php echo $name?>"><?php echo $name?></option>
                                            <?php } ?>
                                            
                                            </select>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="postal" class="col-sm-2 control-label">Postal/zip *</label>
                                        <div class="col-sm-10">
                                            <input id="postal" name="postal" type="text" class="form-control required" value="{!! Input::old('postal') !!}" />
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
@stop