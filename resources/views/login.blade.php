@extends('header')

@section('navbar')
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobyapp">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="index.html"><img src="img/NCIPE_logo_mobile_0.png" alt=""></a> Your logo here -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="mobyapp">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="#home">Home</a></li>
                    <li><a class="page-scroll" href="#features">Search</a></li>
                    <li><a class="page-scroll" href="#overview">Profile</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
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

