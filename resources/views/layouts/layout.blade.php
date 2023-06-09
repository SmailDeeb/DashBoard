<!DOCTYPE html>
<html lang="en">

<head>
    <meta chart="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite('node_modules/@fortawesome/fontawesome-free/css/all.min.css')
    @vite('node_modules/bootstrap/dist/css/bootstrap.min.css')
    @vite('resources/css/app.css')
    @yield('headerStyles')
    @yield('headerScripts')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container"><a class="navbar-brand" href="{{ url('/') }}">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admins.index') }}">Admins</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('analyes') }}">Analyes
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">REQUESTS
                                    <span class="sr-only">(current)</span></a>
                            </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        REPORTS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">VIEW REPORTS</a></li>
                        <li><a class="dropdown-item" href="#">SEND REPORTS</a></li>
                        </ul>
                    </li>
                    @auth

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <span class="mx-2">{{ auth()->user()->name }}</span>
                        <button class="btn btn-outline-danger" type="submit">Logout</button>
                    </form>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    @vite('node_modules/jquery/dist/jquery.min.js')
    @vite('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')
    @yield('scripts')
</body>

</html>