@extends('admin/layouts/default')



{{-- Web site Title --}}

@section('title')

Edit Quote Expiry

@parent

@stop



{{-- Content --}}

@section('content')

<section class="content-header">

    <h1>

      Edit Quote Expiry

    </h1>

    <ol class="breadcrumb">

        <li>

            <a href="{{ route('dashboard') }}">

                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>

                Dashboard

            </a>

        </li>

       

        <li class="active">Edit Quote Expiry</li>

    </ol>

</section>



<!-- Main content -->

<section class="content">

    <div class="row">

        <div class="col-lg-12">

            <div class="panel panel-primary ">

                <div class="panel-heading">

                    <h4 class="panel-title"> <i class="livicon" data-name="wrench" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>

                      Edit Quote Expiry

                    </h4>

                </div>

                <div class="panel-body">

                    @if($qe)

                        <form class="form-horizontal" role="form" method="post" action="">

                            <!-- CSRF Token -->

                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />



                            <div class="form-group {{ $errors->

                                first('name', 'has-error') }}">

                                <label for="title" class="col-sm-2 control-label">

                                    Time in minutes

                                </label>

                                <div class="col-sm-5">

                                    <input type="number" id="qetime" name="qetime" class="form-control" placeholder="Time" value="{!!  $qe->QE_TIME !!}" required>

                                </div>

                                

                            </div>

                        

                                 


                      

                        <div class="form-group">

                            <div class="col-sm-offset-2 col-sm-4">

                         

                                <button type="submit" class="btn btn-success">

                                    Update

                                </button>

                            </div>

                        </div>

                    </form>

                    @else

                        <h1>No record exists with that id</h1>

                    @endif

                </div>

            </div>

        </div>

    </div>

    <!-- row-->

</section>



@stop