<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>NossoAmigoPet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/dog.png') }}">
    @yield('styles')
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>

<body>
<div id="navbarMain">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid">
            <div class="espacamentoButtom {{ (\Illuminate\Support\Facades\Route::current()->uri == 'shopp' || \Illuminate\Support\Facades\Route::current()->uri == 'shoppPag2') ? 'pagAction' : '' }}">
                <a class="navbar-brand" href="{{ route('shopp') }}">Quero Adotar</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
                    <li class="nav-item">
                        <div class="{{ \Illuminate\Support\Facades\Route::current()->uri == 'quem-somos' ? 'pagAction' : ''}}">
                            <a class="nav-link active" aria-current="page" href="{{ route('quem-somos') }}">Quem Somos</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="{{ \Illuminate\Support\Facades\Route::current()->uri == '/' ? 'pagAction' : ''}}">
                            <a class="nav-link" href="{{ url('/') }}">Menu</a>
                        </div>
                    </li>
                </ul>
                <a class="iconNavBar" href="{{ url('/') }}">
                    <img src="{{ asset('img/dog.png') }}" class="imgNavBar"/>
                </a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">
                        <div class="iconLupa">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0
                                          1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </nav>
</div>

    @yield('content')
</body>

</html>

