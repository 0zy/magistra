    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobyapp">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="index.html"><img src="img/NCIPE_logo_mobile_0.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="mobyapp">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="/home">Home</a></li>
                    <li><a class="page-scroll" href="/calendar">Calendar</a></li>
                    @if (Auth::check())
                        <li><a class="page-scroll" href="/profile">
                                {{ Auth::user()->first_name . " " . Auth::user()->last_name }}
                            </a>
                        </li>
                        <div style="float:left; padding-top:22px;">
                            <img width="50px" padding-top="10px" class="profile-image img-circle" src="{{ Auth::user()->avatar }}"/>
                        </div>
                    @else
                        <li><a class="page-scroll" href="/login">Login</a></li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
