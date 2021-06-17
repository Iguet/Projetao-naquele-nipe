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

        <div class="container" id="form_cadastro">
          <form method="POST" action="#">
            <div class="card" id="card_register">
              <div class="card-header" id="header_register">
                <div class="title_card">
                  <h2>FAÇA SEU CADASTRO, E FAÇA A DIFERENÇA !</h2>
                </div>
                <div class="img_header_card">
                  <img src="{{ asset('img/dog.png') }}" class="img_card"/>
                </div>
                <hr>
              </div>
              <div class="card-body">
                <label>Digite seu nome:</label>
                <input type="text" name="nome" class="form-control"/>
                <br><label>Digite seu e-mail:</label>
                <input type="email" name="email" class="form-control"/>
                <br><label>Confirme seu e-mail:</label>
                <input type="email" name="confirmeEmail" class="form-control"/>
                <br><label>Digite seu CPF:</label>
                <input type="text" name="cpf" class="form-control"/>
                <br><label>Digite sua Senha:</label>
                <input type="password" name="senha" class="form-control"/>
                <br><label>Confirme sua Senha:</label>
                <input type="password" name="confirmeSenha" class="form-control"/>
                <hr>
                <label>Selecione o seu Município de Residência: </label>
                <br><select class="form-select">
                  <option selected disabled>Selecione o Município</option>
                  <option value="1">Caratinga</option>
                  <option value="2">Vargem Alegre</option>
                  <option value="3">Ipatinga</option>
                  <option value="4">Bom Jesus</option>
                  <option value="5">Santa Rita</option>
                <br></select>
                <br><label>Digite o seu CEP:</label>
                <input type="text" name="cpf" class="form-control"/>
                <hr>
                <input class="form-check-input" type="checkbox" name="notificacoes">
                <label class="form-check-label"><b>Notificações por email.</b></label><br>
                <br><button type="button" class="btn btn-success">ENVIAR</button>
              </div>
            </div>
          </form>
        </div>
    </body>
</html>