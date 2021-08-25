<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">






<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>

<!-- Font Awesome JS -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"> </script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"> </script>


<style>
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #9C27B0;
        color: white;
        text-align: center;
    }
    body {
        background-color: #ffffff
    }

</style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src={{asset('img/logoKubes.png')}} alt="Logo" height="90">

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                    
                        {{-- <li class="nav-item colortest">
                            <a class="nav-link" href="{{ route('photos.index') }}">{{ __('Photos') }}</a>
                        </li> --}}
                        <b style="font-size:125%">
                            <li class="nav-item colortest">
                                <a style="color: rgb(0, 0, 0);" class="nav-link" href="{{ url('aodainfo') }}">{{ __('AODA Course') }}</a>
                            </li>
                            <li class="nav-item colortest">
                                <a style="color: rgb(0, 0, 0);" class="nav-link" href="{{ url('whmisinfo') }}">{{ __('WHMIS Course') }}</a>
                            </li>
                            <li class="nav-item colortest">
                                <a style="color: rgb(0, 0, 0);" class="nav-link" href="{{ url('contact') }}">{{ __('Contact Us') }}</a>
                            </li>
                        </b>

                           

                        
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>

                        @if (Route::has('register'))

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>

                        @endif --}}
                        @else
                        {{-- <li class="nav-item colortest">
                            <a class="nav-link" href="{{ route('photos.index') }}">{{ __('Photos') }}</a>
                        </li> --}}
                        <b style="font-size:125%">
                        <li class="nav-item colortest">
                            <a style="color: rgb(0, 0, 0);" class="nav-link" href="{{ url('aodainfo') }}">{{ __('AODA Course') }}</a>
                        </li>
                        <li class="nav-item colortest">
                            <a style="color: rgb(0, 0, 0);" class="nav-link" href="{{ url('whmisinfo') }}">{{ __('WHMIS Course') }}</a>
                        </li>
                        <li class="nav-item colortest">
                            <a style="color: rgb(0, 0, 0);" class="nav-link" href="{{ url('contact') }}">{{ __('Contact Us') }}</a>
                        </li>
                        <li class="nav-item colortest">

                    </li>
                        <li class="nav-item dropdown logcss">
                            <a style="color: rgb(0, 106, 192);" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a style="color: #ff0000;" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        </b>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
