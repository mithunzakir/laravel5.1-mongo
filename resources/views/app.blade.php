<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Event & Conference management Software">
        <meta name="keywords" content="Event & Conference management application">

        <link rel="icon" type="image/ico" href="/img/favicon.ico" />
        <title>Event and Conference management Software</title>

        <link href='/css/bootstrap.css' rel="stylesheet">
        <link href='/css/style.css' rel="stylesheet">                

        <script src="/js/jquery-2.1.3.js"></script>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/common.js"></script>
    </head>

    <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img style="height: 30px" alt="Logo" src="/img/logo.png"></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/') }}">Home</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}">Login</a></li>
                        <li><a href="{{ url('/auth/register') }}">Register</a></li>
                        @else
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Customer <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('create_customer') }}">Create Customer</a></li> 
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Collection <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Receipt Print <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Report <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::User()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">   
            <div class="row">
                <div class="col-md-12">
                    @if (Session::has('success_msg'))
                    <div class="alert alert-success" id="success_msg" style="text-align: center; ">{{ Session::get('success_msg') }}<span onclick="success_msg('success_msg')" class="pull-right glyphicon glyphicon-remove" title="close"></span></div>
                    @elseif(Session::has('error_msg'))
                    <div class="alert alert-danger" id="success_msg" style="text-align: center; ">{{ Session::get('error_msg') }}<span onclick="success_msg('success_msg')" class="pull-right glyphicon glyphicon-remove" title="close"></span></div>
                    @endif
                    @if (Session::has('not_fade'))
                    <div class="alert alert-success" id="not_fade" style="text-align: center; ">{{ Session::get('not_fade') }}<span onclick="success_msg('not_fade')" class="pull-right glyphicon glyphicon-remove" title="close"></span></div>
                    @endif
                </div>
            </div>

            @yield('content')
        </div>

        <script>
//            faceout success message
            $("#success_msg").fadeOut(8000);

//            by default display none div success_msg
            function success_msg(data) {
                document.getElementById(data).style.display = 'none';
            }

//            google analytics 


        </script>
    </body>
</html>
