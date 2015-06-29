@extends('header')

@section('navbar')
    @include('navbar-normal')
@stop

@section('content')
    <div class="container" style="margin-top:40px">
        <div class="row"> <!-- Start row -->
            <!-- Start Left content -->
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="text space">
                    <h1>Calendar</h1>
                </div>
            </div> <!-- End left content-->
            <br>
        </div> <!-- End row -->
        <br>
        <div id="calendar">
        </div>
        <div class="row"> <!-- Start row -->
            <!-- Start Left content -->
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="text space">
                    <h1>Classes</h1>
                </div>
            </div> <!-- End left content-->
            <br>
        </div> <!-- End row -->
        <br>
        <div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="display: block;padding:23px;">
            <div class="ui-widget-header ui-corner-all" style="text-transform: none;color:#a8a8a8;font-size:15px;">
                Select a date to view your classes.
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    </section>
@stop

@section('mobyjs')
    <script>
        $('#calendar').datepicker({
            inline: true,
            firstDay: 1,
            showOtherMonths: true,
            dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
            beforeShowDay: dayValid,
            onSelect: showClasses
        });

        function showClasses(day)
        {
            console.log(data);
        }
        function dayValid(day)
        {
            return [false];
        }
    </script>
@stop