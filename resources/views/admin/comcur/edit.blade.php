@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit Currency
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css -->
<link rel="stylesheet" href="{{ asset('assets/vendors/wizard/jquery-steps/css/wizard.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/wizard/jquery-steps/css/jquery.steps.css') }}">
<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('assets/vendors/wizard/jquery-steps/css/single.css') }}">
<style>
.wizard > .content
{
height:300px !important;
min-height:300px;
}
</style>
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
            <li>Currency</li>
            <li class="active">Edit Currency</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Edit Currency
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
                               
                          <h1 style="display:none;">Currency</h1>
                                <section style="height:400px !important;">

                                    <div class="form-group">
                                        <label for="country" class="col-sm-2 control-label">Company *</label>
                                        <div class="col-sm-10">
                                            <select class="form-control required" id="company" name="company">
                                            
                                            <option value="">Select</option>
                                            <?php
											$company = DB::table('company')->get();
											foreach($company as $cname) 
											{
											?>
                                               <option value="<?php echo $cname->id?>" <?php if($Comcurrency->COMPANY_ID==$cname->id){?>selected="selected" <?php }?>><?php echo $cname->name?></option>
                                            <?php } ?>
                                            
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="country" class="col-sm-2 control-label">Currency *</label>
                                        <div class="col-sm-10">
                                            <select class="form-control required" id="currency" name="currency">
                                            
                                            <option value="" >Select</option>
                                            <?php
											$currency = DB::table('currency')->get();
											foreach($currency as $currency_code) 
											{
											?>
                                               <option value="<?php echo $currency_code->code?>" <?php if($Comcurrency->CURRENCY==$currency_code->code){?>selected="selected" <?php }?>><?php echo $currency_code->code?></option>
                                            <?php } ?>
                                            
                                            </select>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="postal" class="col-sm-2 control-label">From Amount *</label> 
                                        <div class="col-sm-10">
                                            <input id="famnt" name="famnt" type="text" class="form-control decimal required" value="{!! $Comcurrency->FROM_AMOUNT !!}" />
                                        </div>
                                    </div>
                                    
                                       <div class="form-group">
                                        <label for="postal" class="col-sm-2 control-label">To Amount *</label>
                                        <div class="col-sm-10">
                                            <input id="tamnt" name="tamnt" type="text" class="form-control decimal required" value="{!! $Comcurrency->TO_AMOUNT !!}" />
                                        </div>
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="postal" class="col-sm-2 control-label">Multiplier  *</label>
                                        <div class="col-sm-10">
                                            <input id="exrate" name="exrate" type="text" class="form-control decimal required" value="{!! $Comcurrency->MULTIPLIER !!}" />
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
    <script>
      $(function () {
                
				
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