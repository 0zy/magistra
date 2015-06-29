@extends('header')

@section('navbar')
    @include('navbar-normal')
@stop

@section('content')
    <div class="container" style="margin-top:100px">
        <div class="row"> <!-- Start row -->
            <!-- Start Left content -->
            <div class="col-sm-3 col-md-3 col-lg-3"></div>

            <div class="col-sm-6 col-md-6 col-lg-6">
                <div style="text-align: center"><a href="#"><img src="img/NCIPE_logo_mobile_0.png" alt="logo"></a></div>
                <div class="text space" style="text-align: center">
                    <h1>{{ Config::get('app.app_name') }}</h1>
                    <h2>{{ Config::get('app.slogan') }}</h2>
                </div>
                <div class="col-md-6">
                <a class="btn btn-block btn-social btn-lg btn-facebook page-scroll wow fadeInDown" data-wow-delay="1s" href="/login/facebook">
                    <i class="fa fa-twitter"></i> Facebook Login
                </a>
                </div>
                <div class="col-md-6">
                <a class="btn btn-block btn-social btn-lg btn-github page-scroll wow fadeInDown" data-wow-delay="1s" href="/login/github">
                    <i class="fa fa-github"></i> Github Login
                </a>
                </div>

            </div> <!-- End left content-->
            <div class="col-sm-2 col-md-2 col-lg-2"></div>

            <br>
        </div> <!-- End row -->
        <br>

    </div>
    <div class="clearfix"></div>
    </section>
@stop

