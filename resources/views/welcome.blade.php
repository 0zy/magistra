@extends('header')

@section('preloader')
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
@stop
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
@stop
@section('content')
    <section id="home">
        <div class="container">
            <div class="row"> <!-- Start row -->
                <!-- Start Left content -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="wow fadeInDown"><a href="#"><img src="img/NCIPE_logo_mobile_0.png" alt="logo"></a></div>
                    <div class="text space wow fadeInDown" data-wow-delay=".5s">
                        <h1>{{ Config::get('app.app_name') }} is democratizing education. Join the revolution!</h1>
                    </div>
                    <a href="#overview" class="page-scroll btn btn-learn wow fadeInDown" data-wow-delay="1s">Learn More</a> <!-- Learn more button link-->
                    <a href="#download" class="page-scroll btn btn-download wow fadeInDown" data-wow-delay="1.4s">Download Now</a> <!-- Download more button link-->

                </div> <!-- End left content-->
                <br>

                <!-- Start right content -->
                <div class="col-sm-6 col-md-6  col-lg-6" >
                    <img src="img/ios/07_device.png" class="img-responsive phone-front wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" alt="img"> <!-- Your mobile device image here -->
                    <img src="img/ios/08_device.png" class="img-responsive phone-back wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.5s" alt="img"> <!-- Your mobile device image here -->
                </div> <!-- End right content -->
            </div> <!-- End row -->
        </div>
        <div class="clearfix"></div>
    </section>

    <!--========================
        ===== Features Section =====
        =========================-->
    <section id="features">
        <div class="container"> <!-- Start container -->

            <div class="row"> <!-- Section title and subtitle-->
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 wow fadeInDown" >
                    <h2>Why use <span class="highlight">{{ Config::get("app.app_name") }}</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div> <!-- End section title and subtitle-->

            <div class="row"> <!-- Feature lists row -->

                <div class="feature col-sm-4 col-md-4 col-lg-4 wow fadeInDown" data-wow-delay=".5s"> <!-- Feature 1 -->
                    <i class="fa fa-tablet fa-3x"></i>
                    <h4>Fully <span class="highlight">Responsive</span></h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div> <!-- End feature 1 -->

                <div class="feature col-sm-4 col-md-4 col-lg-4 wow fadeInDown" data-wow-delay="1s"> <!-- Feature 2 -->
                    <i class="fa fa-flag fa-3x"></i>
                    <h4>Font-Awesome <span class="highlight">Lorem Ipsum</span></h4>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos.
                    </p>
                </div> <!-- End feature 2 -->

                <div class="feature col-sm-4 col-md-4 col-lg-4 wow fadeInDown" data-wow-delay="1.5s"> <!-- Feature 3 -->
                    <i class="fa fa-html5 fa-3x"></i>
                    <h4>HTML5 &amp; CSS3 <span class="highlight">Valid</span></h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div> <!-- End feature 3 -->

            </div> <!-- End feature lists row -->

        </div> <!-- End container -->
        <div class="clearfix"></div>
    </section>

    <!--========================
        ===== Overview Section =====
        =========================-->
    <section id="overview" class="bigtriangle-bg">
        <div class="container"> <!--  Start container -->
            <div class="row section-title wow fadeInDown"> <!-- Section title and subtitle-->
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" >
                    <h2>What is Special About <span class="highlight">{{ Config::get("app.app_name") }}</span></h2>
                    <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum.
                    </p>
                </div>
            </div> <!-- End section title and subtitle-->

            <div class="row"> <!-- Start row -->

                <!-- Start Left content -->
                <div class="col-sm-4 col-md-4 ol-lg-4 content-left">
                    <div class="overview wow fadeInLeft" data-wow-delay=".5s">
                        <i class="fa fa-thumbs-o-up fa-3x"></i>
                        <h4>Built with <span class="highlight">Love</span></h4>
                        <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum.
                        </p>
                    </div>

                    <div class="overview wow fadeInLeft" data-wow-delay="1.5s">
                        <i class="fa fa-support fa-3x"></i>
                        <h4><span class="highlight">Endless</span> Learning</h4>
                        <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum.
                        </p>
                    </div>
                </div> <!-- End Left content -->

                <!-- Start center content -->
                <div class="col-sm-4 col-md-4 ol-lg-4 center wow bounceInUp" data-wow-delay="1.5s">
                    <img src="img/ios/02_device.png" class="img-responsive" alt="img">
                </div> <!-- End center content -->

                <!-- Start right content -->
                <div class="col-sm-4 col-md-4 ol-lg-4 content-right">
                    <div class="overview wow fadeInRight" data-wow-delay="0.5s">
                        <i class="fa fa-code fa-3x"></i>
                        <h4><span class="highlight">Self-paced</span> Course</h4>
                        <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum.
                        </p>
                    </div>

                    <div class="overview wow fadeInRight" data-wow-delay="1.5s">
                        <i class="fa fa-wrench fa-3x"></i>
                        <h4>Fully <span class="highlight">Customable</span></h4>
                        <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum.
                        </p>
                    </div>
                </div> <!-- End right content -->

            </div> <!--  End row -->

        </div><!--  End container -->
        <div class="clearfix"></div>
    </section>

    <!--========================
        ==== Screenhots Section ====
        =========================-->
    <section id="screenshots">
        <div class="container"> <!-- Start container -->
            <div class="row">  <!-- Section title and subtitle-->
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 wow fadeInDown" >
                    <h2> <span class="highlight">{{ Config::get("app.app_name") }}</span> Screenshots</h2>
                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                    </p>
                </div>
            </div> <!-- End section title and subtitle-->

            <div class="row"> <!-- Screenshots slider row -->
                <div class="col-sm-12 col-md-12 col-lg-12"> <!-- 12 col -->

                    <div id="owl-screenshots" class="owl-carousel"> <!-- Start Screenshots slider -->

                        <div class="item wow fadeInDown" data-wow-delay=".5s" > <!-- Slider item 1 -->
                            <a href="img/screenshots/iphone1.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="images/gallery1@2x.jpg">
                                <img src="img/screenshots/iphone1.jpg" class="img-responsive img-rounded" alt="img">
                            </a>
                        </div><!-- End slider item 1 -->

                        <div class="item wow fadeInDown" data-wow-delay="1s"> <!-- Slider item 2 -->
                            <a href="img/screenshots/iphone0.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="images/gallery2@2x.jpg">
                                <img src="img/screenshots/iphone0.jpg" class="img-responsive img-rounded" alt="img">
                            </a>
                        </div> <!-- End slider item 2 -->

                        <div class="item wow fadeInDown" data-wow-delay="1.5s"> <!-- Slider item 3 -->
                            <a href="img/screenshots/iphone1.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="images/gallery3@2x.jpg">
                                <img src="img/screenshots/iphone1.jpg" class="img-responsive img-rounded" alt="img">
                            </a>
                        </div> <!-- End slider item 3 -->

                        <div class="item wow fadeInDown" data-wow-delay="2s"> <!-- Slider item 4 -->
                            <a href="img/screenshots/iphone0.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="images/gallery4@2x.jpg">
                                <img src="/img/screenshots/iphone0.jpg" class="img-responsive img-rounded" alt="img">
                            </a>
                        </div> <!-- End slider item 4 -->

                        <div class="item wow fadeInDown" data-wow-delay="2.5s"> <!-- Slider item 5 -->
                            <a href="img/screenshots/iphone1.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="images/gallery5@2x.jpg">
                                <img src="img/screenshots/iphone1.jpg" class="img-responsive img-rounded" alt="img">
                            </a>
                        </div> <!-- End slider item 5 -->

                    </div> <!-- End Screenshots slider -->
                </div> <!-- End 12 col -->

            </div> <!-- End screenshots slider row -->

        </div> <!-- End container -->
        <div class="clearfix"></div>
    </section>

    <!--========================
        ======= Map Section ========
        =========================-->
    <a href="https://goo.gl/maps/kFnTz" target="_blank">
        <div id="map"></div>
    </a>

    <!--========================
    ====== Footer Section ======
    =========================-->
    <section id="footer">
        <div class="container"> <!-- Start container -->
            <div class="row"> <!-- Start row -->

                <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1"> <!-- Start col-->
                    <a href="#home" class="page-scroll wow fadeInDown" data-wow-delay="1s"><img src="img/NCIPE_logo_mobile_0.png" alt=""></a>
                    <div class="social-icons"> <!-- Start social media -->
                        <ul class="space">
                            <li><a href="#"><i class="fa fa-twitter fa-2x wow fadeInDown" data-wow-delay="1.4s"></i></a></li> <!-- Change # with your Twitter Account -->
                            <li><a href="#"><i class="fa fa-facebook fa-2x wow fadeInDown" data-wow-delay="1.8s"></i></a></li> <!-- Change # with your FB Account -->
                            <li><a href="#"><i class="fa fa-google-plus fa-2x wow fadeInDown" data-wow-delay="2s"></i></a></li> <!-- Change # with your Google Account -->
                        </ul> <!-- End social media -->
                    </div>
                    <p class="wow fadeInDown" data-wow-delay="1s">Copyright &copy; 2014 {{ Config::get("app.app_name") }}</p> <!-- Copyright Notice Here -->
                </div> <!-- End col -->

            </div> <!-- End row-->
        </div> <!-- End container -->
        <div class="clearfix"></div>
    </section>
@stop

@section('mobyjs')
    <!-- MobyApp Custom Scripts
       ================================================== -->
    <script src="js/vendor/moby/main.js"></script>
@stop

