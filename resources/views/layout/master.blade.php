<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
       <nav>
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #99ba99; height:30px">
                <a class="col-md-4 offset-md-5 fw-bold fst-italic" style="color: #196419; font-size:20px">#RIBAKSUDE</a>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #327532; height:50px">
                <div class="container-fluid">
                    <img class="navbar-brand fw-bold" src="https://upload.wikimedia.org/wikipedia/id/0/0c/LogoPSMS.png" style="width: 80px"></img>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            @auth
                            @if (Auth::check() && isset(Auth::user()->roles[0]) && Auth::user()->roles[0]->name == 'superadmin')
                            <li class="nav-item">
                                <a class="nav-link fw-bold " href="{{ route('dashboard.products') }}" >Manage Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold text-primary" href="{{ route('dashboard.users') }}">Manage User</a>
                            </li>
                        @elseif (Auth::check())
                            <li class="nav-item">
                                <a class="nav-link fw-bold text-white" href="{{ route('dashboard.products') }}">Manage Product</a>
                            </li>
                        @endif
                        
    
                                <li class="nav-item">
                                    <a class="nav-link fw-bold text-white" href="{{ route('logout') }}">Logout</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="{{ route('register') }}">Register</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
       </nav>
    </header>
    
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>