<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>{{ Config::get('app.app_name') }} - {{ Config::get('app.slogan') }}</title>
    <meta name="description" content="{{Config::get('app.app_name')}} - {{ Config::get('app.slogan') }}">
    <meta name="keywords" content="{{ Config::get('app.keywords') }}">
    <meta name="author" content=" {{ Config::get('app.author') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- css -->
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- font -->
    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn t work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="js/vendor/bootstrap/modernizr.custom.js"></script>
    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
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
                    <a class="navbar-brand" href="index.html"><img src="img/NCIPE_logo_mobile_0.png" alt=""></a> <!-- Your logo here -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="mobyapp">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#home">Home</a></li>
                        <li><a class="page-scroll" href="#features">Features</a></li>
                        <li><a class="page-scroll" href="#overview">Overview</a></li>
                        <li><a class="page-scroll" href="#screenshots">Shots</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        @yield('content')

    <!-- javascript -->
    <!-- <script type="text/javascript" src="{{ elixir('js/all.js') }}"></script> -->

        <!-- jQuery Version 1.11.0
                ================================================== -->
        <script type="text/javascript" src="js/vendor/bootstrap/jquery-1.11.0.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript
        ================================================== -->
        <script type="text/javascript" src="js/vendor/bootstrap/bootstrap.js"></script>

        <!-- Nivo and Owl JavaScript
        ================================================== -->
        <script type="text/javascript" src="js/vendor/bootstrap/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap/nivo-lightbox.min.js"></script>

        <!-- Other JavaScripts
        ================================================== -->
        <script type="text/javascript" src="js/vendor/bootstrap/jquery.easing.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap/SmoothScroll.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap/wow.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap/matchMedia.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap/jquery.backgroundvideo.min.js"></script>

        <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/
        ================================================== -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&amp;sensor=false"></script>

        <!-- Contact Form
        ================================================== -->
        <script type="text/javascript" src="js/vendor/bootstrap/jqBootstrapValidation.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap/contact.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap/jquery.ajaxchimp.js"></script>

        <!-- MobyApp Custom Scripts
        ================================================== -->
        <script src="js/vendor/moby/main.js"></script>
    </body>

</html>
</head>