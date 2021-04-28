<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Cadastro-Usuário</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style_cadastro_login.css') }}" />
        <link rel="shortcut icon" href="{{ asset('img/dog.png') }}">
    </head>

    <body>
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
                            <img src="{{ asset('img/dog.png') }}" class="imgNavBar"/>
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

        <section class="tituloParaCadastro">
          <h1>Titulo para cadastro</h1>
        </section>

        <div class="form_cadastro">
            <form class="row g-3">
                <div class="col-md-6">
                  <label class="form-label" style="color: beige;">Email</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                  <label class="form-label" style="color: beige;">Senha</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label class="form-label" style="color: beige;">Logradouro</label>
                  <input type="text" class="form-control" id="inputAddress">
                </div>
                <div class="col-12">
                  <label class="form-label" style="color: beige;">Complemento</label>
                  <input type="text" class="form-control" id="inputAddress2">
                </div>
                <div class="col-md-6">
                  <label class="form-label" style="color: beige;">Cidade</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                  <label class="form-label" style="color: beige;">Estado</label>
                  <select id="inputState" class="form-select">
                    <option selected>MG</option>
                    <option>SP</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label class="form-label" style="color: beige;">Telefone</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" style="color: beige;">
                       Enivar Notificações por e-mail
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </body>
</html>