<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="Start | Sociale Kaart"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Start') | Sociale kaart</title>
    @section('styles')
        <link rel="stylesheet" type="text/css" href="{{asset("../css/socialekaart.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("../css/sidebar.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("../css/bootstrap.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("../css/app.css")}}">
        <script type="text/javascript" src="{{asset('../js/app.js') }}"></script>
    @show
</head>
<body>
<header id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">

            <div class="navbar-brand">
                <a href="{{ url('/') }}" class="link">OnsPlatform</a>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ ucfirst(Auth::user()->name)}} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('account')}}">Account</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<nav class="sidebar toggled">
    <div class="sidebar-wrapper bg-dark">
        <ul class="sidebar-nav">
            <li>
                <a class="nav-link" href="{{ url('/account') }}">Home</a>
            </li>
            <li>
                <a class="nav-link" href="{{url('gebruiker')}}">Gebruikers</a>
            </li>
            <li>
                <a class="nav-link" href="{{url('organisatie')}}">Organisaties</a>
            </li>
        </ul>
    </div>
</nav>
@yield('content')
