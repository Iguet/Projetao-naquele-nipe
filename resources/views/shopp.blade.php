<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Pets</title>
    <!--<script type="text/javascript" src="../scripts/app.js"></script>-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleShopp.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/dog.png') }}">
</head>
<body class="corpoShopp">

    <div id="navbarMain">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-success">
            <div class="container-fluid">
                <div class="pagAction">
                    <a class="navbar-brand" href="/shopp">Quero Adotar</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/quem-somos">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Menu</a>
                        </li>
                    </ul>
                    <a class="iconNavBar" href="/">
                        <img src="{{ asset('img/dog.png') }}" class="imgNavBar" />
                    </a>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">
                            <div class="iconLupa">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0
                                  1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <header class="cabecalhoShopp">
        <h1>Dê uma chance para nosso amigo!</h1>
    </header>
    <div class="primeiroCard">
        <div class="card-group">
            <div class="card">
                <a href="/shopp/login">
                    <img src="{{ asset('img/akita.jpg') }}" class="card-img-top" alt="akita">
                </a>
                <div class="card-body">
                    <a href="/shopp/login" class="link1">
                        <h5 class="card-title">Raça: Akita</h5>
                    </a>
                    <p class="card-text">Características: Leal, amigo e brincalhão</p>
                    <p class="card-text">Nível de cuidados: Alto</p>
                    <p class="card-text"><small class="text-muted">Postado agora</small></p>
                </div>
            </div>
            <div class="card">
                <a href="/shopp/login">
                    <img src="../img/basset.jpg" class="card-img-top" alt="basset">
                </a>
                <div class="card-body">
                    <a class="link1" href="/shopp/login">
                        <h5 class="card-title">Raça: Basset hound</h5>
                    </a>
                    <p class="card-text">Características: Paciente, teimoso e charmoso</p>
                    <p class="card-text">Nível de cuidados: Alto</p>
                    <p class="card-text"><small class="text-muted">Postado á 1 dia</small></p>
                </div>
            </div>
            <div class="card">
                <a href="/shopp/login">
                    <img src="../img/beagle.jpg" class="card-img-top" alt="beagle">
                </a>
                <div class="card-body">
                    <a href="/shopp/login" class="link1">
                        <h5 class="card-title">Raça: Beagle</h5>
                    </a>
                    <p class="card-text">Características: Alegre, companheiro e aventureiro</p>
                    <p class="card-text">Nível de cuidados: Médio</p>
                    <p class="card-text"><small class="text-muted">Postado á 3 dias</small></p>
                </div>
            </div>
        </div>
    </div>

    <div class="segundoCard">
        <div class="card-group">
            <div class="card">
                <div class="card2imagem1">
                    <a href="/shopp/login" class="link1">
                        <img src="../img/nSeiOnome.jpg" class="card-img-top" alt="bichonFrise">
                    </a>
                </div>
                <div class="card-body">
                    <a href="/shopp/login" class="link1">
                        <h5 class="card-title">Raça: Buldogue</h5>
                    </a>
                    <p class="card-text">Características: Calmo, divertido e dócil</p>
                    <p class="card-text">Nível de cuidados: Alto</p>
                    <p class="card-text"><small class="text-muted">Postado á 6 dias</small></p>
                </div>
            </div>
            <div class="card">
                <div class="card2imagem2">
                    <a href="/shopp/login" class="link1">
                        <img src="../img/labrador.jpg" class="card-img-top" alt="borderCollie" style="height: 100%">
                    </a>
                </div>
                <div class="card-body">
                    <a href="/shopp/login" class="link1">
                        <h5 class="card-title">Raça: Labrador retriever</h5>
                    </a>
                    <p class="card-text">Características: Inteligente, carinhoso e brincalhão</p>
                    <p class="card-text">Nível de cuidados: Médio</p>
                    <p class="card-text"><small class="text-muted">Postado á 7 dias</small></p>
                </div>
            </div>
            <div class="card">
                <div class="card2imagem3">
                    <a href="/shopp/login" class="link1">
                        <img src="../img/chowchow.jpg" class="card-img-top" alt="boxer">
                    </a>
                </div>
                <div class="card-body">
                    <a class="link1" href="/shopp/login">
                        <h5 class="card-title">Raça: Chow-chow</h5>
                    </a>
                    <p class="card-text">Características: Calmo, leal e orgulhoso</p>
                    <p class="card-text">Nível de cuidados: Alto</p>
                    <p class="card-text"><small class="text-muted">Postado á 10 dias</small></p>
                </div>
            </div>
        </div>
    </div>

    <footer class="rodape">
        <nav aria-label="...">
            <ul class="pagination pagination-lg">
                <li class="page-item1"><a class="page-link" href="/shopp">1</a></li>
                <li class="page-item2"><a class="page-link" href="/shoppPag2">2</a></li>
                <li class="page-item3"><a class="page-link" href="#">3</a></li>
            </ul>
        </nav>
    </footer>


</body>
</html>