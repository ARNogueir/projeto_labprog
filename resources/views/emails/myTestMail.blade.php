<!DOCTYPE html>
<html lang="en">
<head>
    <title>Conferências - Ciência & Sociedade</title>
</head>
<body>
<h1>{{ $title }}</h1>
<p>{{ $body }}</p>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        {{--        <img id="img_logo" src="{{asset('img/navbar_logo.png')}}" alt="logo">--}}
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/conf') }}" class="nav-link">Conferências</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}" class="nav-link">Sobre Nós</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>
