<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Quem-Somos</title>
    <link rel="stylesheet" type="text/css" href="../style/quemSomos.css" />
    <script type="text/javascript" src="../scripts/app.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="shortcut icon" href="../imagem/dog.png">
</head>
<body class="corpoQuemSomos">

    <div id="navbarMain">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-success">
            <div class="container-fluid">
                <div class="iconLogo">

                </div>
                <div class="espacamentoButtom">
                    <a class="navbar-brand" href="shopp.html">Quero Adotar</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <div class="pagAction">
                                <a class="nav-link active" aria-current="page" href="quemSomos.html">Quem Somos</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Menu</a>
                        </li>
                    </ul>
                    <a class="iconNavBar" href="index.html">
                        <img src="../imagem/dog.png" class="imgNavBar" />
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

    <div class="mapaPai">
        <div class="cabecalhoMapa">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-signpost-2" viewBox="0 0 16 16" style="margin-top: 12px; color:black;">
                <path d="M7 1.414V2H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h5v1H2.5a1 1 0 0 0-.8.4L.725 8.7a.5.5 0 0 0 0
                      .6l.975 1.3a1 1 0 0 0 .8.4H7v5h2v-5h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H9V6h4.5a1 1 0 0 0 .8-.4l.975-1.3a.5.5 0 0 0 0-.6L14.3 2.4a1 1
                      0 0 0-.8-.4H9v-.586a1 1 0 0 0-2 0zM13.5 3l.75 1-.75 1H2V3h11.5zm.5 5v2H2.5l-.75-1 .75-1H14z" />
            </svg>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15016.75149425342!2d-42.147380649999995!3d-19.78963015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!
            5e0!3m2!1spt-BR!2sbr!4v1615577517187!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="mapa"></iframe>
    </div>
    <div class="especificacao">
        <header class="cabecaoTextArea">
            <h3>Alguma Dúvida ? Entre em Contato!</h3>
        </header>

        <div class="listaBotao">
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail">
            </div>
            <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Dúvida/Sugestão"></textarea>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-dark" type="button">Enviar</button>
            </div>
        </div>
    </div>

</body>
</html>