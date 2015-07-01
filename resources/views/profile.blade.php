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
                    <div style="text-align:center; padding-top:22px;">
                        <img width="150px" padding-top="10px" class="profile-image img-circle" src="{{ Auth::user()->avatar }}"/>
                    </div>

                <div class="text space" style="text-align: center">
                    @if (Session::has('user_data_updated'))
                        <div style="margin-left: 100px;" class="alert alert-info">Profile Updated.</div>
                    @endif
                        {!! Form::open(['url' => '/profile/edit']) !!}
                        <table style=" width: 100%">
                            <tr>
                                <td style="";>
                                    <h2>Name:</h2>
                                </td>
                                <td>
                                    {!! Form::text('name', Auth::user()->first_name . " " . Auth::user()->last_name, ['readonly' => 'true', 'class' => 'form-control', 'style' => 'width:100%; height:40px']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td style="";>
                                    <h2>Email:</h2>
                                </td>
                                <td>
                                    {!! Form::text('email', Auth::user()->email ,['readonly' => 'true', 'class' => 'form-control', 'style' => 'width:100%; height:40px']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td style="";>
                                    <h2>Location:</h2>
                                </td>
                                <td>
                                    {!! Form::text('location', null, ['class' => 'form-control', 'style' => 'width:100%; height:40px']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td style="";>
                                    <h2>Teacher: </h2>
                                </td>
                                <td style="text-align: left">
                                    {!! Form::text('teacher', Auth::user()->is_teacher ? "Yes": "No", ['disabled'=>'true', 'class' => 'form-control', 'style' => 'width:100%; height:40px']) !!}
                                </td>
                            </tr>
                        </table>
                        <br>
                            <h3 style="margin-left: 100px;"><label style="font-weight: normal">
                                    <input
                                        @if(Auth::user()->notification_opt_out)
                                            checked=true
                                        @endif
                                        name="notification_opt_out" type="checkbox">&nbsp;&nbsp;Opt out of email notifications.</label></h3>
                            <h3 style="margin-left: 100px;"><label style="font-weight: normal">
                                    <input
                                            @if(Auth::user()->tos_accepted)
                                                checked="true"
                                            @endif
                                            name="tos_accepted" type="checkbox" onchange="enableTos()">&nbsp;&nbsp;I accept Terms of Service and Privacy Policy.</label></h3>
                            <div style="margin-left: 100px;">
                            @if(Auth::user()->tos_accepted)
                                {!! Form::submit('Submit',['class'=>'btn btn-primary', 'style' => 'width:100px; height: 50px;font-size:20px;']) !!}
                            @else
                                {!! Form::submit('Submit',['disabled' => 'true', 'class'=>'btn btn-primary', 'style' => 'width:100px; height: 50px;font-size:20px;']) !!}
                            @endif
                            &nbsp; &nbsp;
                            {!! Form::button('Reset',['class'=>'btn btn-reset', 'style' => 'width:100px; height: 50px;font-size:20px;']) !!}
                            </div>
                        {!! Form::close() !!}
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

@section('mobyjs')
    <script>
    function enableTos()
    {
        $obj = $("input[name=tos_accepted]")[0];
        $button = $("input[type=Submit]")[0];

        $button.disabled = !$obj.checked;
    }
    </script>
@stop

