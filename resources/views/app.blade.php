<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('aimeos_header')
    <title>Laravel</title>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    @yield('aimeos_styles')
    <link href="own.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <li><a href="/">Home</a></li>
                <li><a href="/list">Catalog</a></li>
                {{--<li><a href="/admin">Admin</a></li>--}}
                @if (Auth::id())
                    <li><a href="/logout">Logout</a></li>
                    <li><a href="/myaccount">Profil</a></li>
                @else
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                @endif
            </button>
            <a class="navbar-brand" href="/">Laravel</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/list">Catalog</a></li>
                {{--<li><a href="/admin">Admin</a></li>--}}
                @if (Auth::id())
                    <li><a href="/logout">Logout</a></li>
                    <li><a href="/myaccount">Profil</a></li>
                @else
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                @endif
            </ul>
            <div class="navbar-right">
                @yield('aimeos_head')
            </div>
        </div>
    </div>
</nav>
<div class="col-xs-12">
    @yield('aimeos_nav')
    @yield('aimeos_stage')
    @yield('aimeos_body')
    @yield('aimeos_aside')
    @yield('content')
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
@yield('aimeos_scripts')
</body>
</html>