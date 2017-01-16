@extends('admin/layouts/default')



{{-- Web site Title --}}

@section('title')

@lang('company/title.edit')

@parent

@stop



{{-- Content --}}

@section('content')

<section class="content-header">

    <h1>

        @lang('company/title.edit')

    </h1>

    <ol class="breadcrumb">

        <li>

            <a href="{{ route('dashboard') }}">

                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>

                Dashboard

            </a>

        </li>

       

        <li class="active">@lang('company/title.edit')</li>

    </ol>

</section>



<!-- Main content -->

<section class="content">

    <div class="row">

        <div class="col-lg-12">

            <div class="panel panel-primary ">

                <div class="panel-heading">

                    <h4 class="panel-title"> <i class="livicon" data-name="wrench" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>

                        @lang('company/title.edit')

                    </h4>

                </div>

                <div class="panel-body">

                    @if($company)

                        <form class="form-horizontal" role="form" method="post" action="">

                            <!-- CSRF Token -->

                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />



                            <div class="form-group {{ $errors->

                                first('name', 'has-error') }}">

                                <label for="title" class="col-sm-2 control-label">

                                    @lang('company/form.name')

                                </label>

                                <div class="col-sm-5">

                                    <input type="text" id="name" name="name" class="form-control" placeholder="Company Name" value="{!! Input::old('name', $company->

                                    name) !!}">

                                </div>

                                <div class="col-sm-4">

                                    {!! $errors->first('name', '<span class="help-block">:message</span>') !!}

                                </div>

                            </div>

                        

                                    <input type="hidden" class="form-control" value="{!! $company->slug !!}" readonly  />


                      

                        <div class="form-group">

                            <div class="col-sm-offset-2 col-sm-4">

                                <a class="btn btn-danger" href="{{ route('companyes') }}">

                                    @lang('button.cancel')

                                </a>

                                <button type="submit" class="btn btn-success">

                                    @lang('button.save')

                                </button>

                            </div>

                        </div>

                    </form>

                    @else

                        <h1>No company exists with that id</h1>

                    @endif

                </div>

            </div>

        </div>

    </div>

    <!-- row-->

</section>



@stop