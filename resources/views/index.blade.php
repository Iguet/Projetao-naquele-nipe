<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>NossoAmigoPet</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css" />
    <script type="text/javascript" src="../scripts/app.js" charset="utf-8"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="shortcut icon" href="../imagem/dog.png">
</head>
<body class="corpoShopp">
    <div id="navbarMain">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-success">
            <div class="container-fluid">
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
                            <a class="nav-link active" aria-current="page" href="quemSomos.html">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <div class="pagAction">
                                <a class="nav-link" href="index.html">Menu</a>
                            </div>
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

    <section>
        <article class="articleMain">
            <div class="postMain">
            </div>
            <div class="botaoPrincipal">
                <div class="d-grid gap-2">
                    <a class="btn btn-dark" href="shopp.html" role="button" onmouseover="aumentaFonte(this)" onmouseout="voltaNormal(this)">Adote Agora Seu Pet!</a>
                </div>
            </div>
        </article>
    </section>

    <div class="cardIndex">
        <div class="row">
            <div class="col-sm-6">
                <div class="card bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Porquê Devemos Adotar Um Pet?</h5>
                        <p class="card-text text-white">
                            Adotar um animal é um envolto de imprevisibilidade, nunca se sabe o que esperar, e essa é a melhor parte para quem gosta de
                            novas experiências. O melhor disso tudo é que a maioria das surpresas são positivas. Os cães se mostram muito amáveis,
                            mesmo que no início possam demonstrar alguns problemas decorrentes das dificuldades que já passaram,
                            quando você conquista a confiança desses animais, ganha uma companhia fiel.
                        </p>
                    </div>
                </div>
                <div class="card2">
                    <div class="card bg-success">
                        <div class="card-body">
                            <h5 class="card-title">A Adoção Salva Vidas.</h5>
                            <p class="card-text text-white">
                                Optar por adotar um animal é uma das atitudes mais importantes para diminuir o número exorbitante de cães e gatos abandonados e sujeitos
                                a maus tratos em todo o país. De acordo com a Organização Mundial da Saúde (OMS), existem mais de 30 milhões de animais abandonados vivendo nas ruas
                                do Brasil. Destes, mais de 20 milhões são cachorros. Porém, é crucial que a adoção seja responsável e ofereça os cuidados básicos e fundamentais para
                                assegurar o bem-estar do animal e também dos membros da família.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Evolução do número total de animais recolhidos por abrigos e protetores em Espanha.</h5>
                        <iframe id='ep-chart-6c1a807d-5207-4b89-a96c-3dc7fa2e6abe' src='https://www.epdata.es/embed/6c1a807d-5207-4b89-a96c-3dc7fa2e6abe/450' style='width: 100%; min-height: 450px; overflow: hidden;' frameborder='0' scrolling='no' height='450'></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="container">
        <div class="card bg-dark text-dark">
            <img src="../imagem/cardPlanoDeFundo.jpg" class="card-img" alt="ERRO" style="opacity: 0.9">
            <div class="card-img-overlay">
                <h1 class="card-title">nossa plataforma Te possibilita uma adoção mais fácil e consciente.</h1>
                <div class="paragraph">
                    <p class="card-text">
                        <b>
                            damos total apoio as pessoas que necessitam de um melhor amigo pet, em nossa plataorma você encontrará vários pets, de diferentes raças, genêneros
                            e personalidades. Escolha oque tem mais haver com você e seja feliz.
                        </b>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer class="rodape">
        <div class="paragraphFooter">
            <p><b>&copy;Projeto Integrador</b></p>
        </div>
    </footer>

</body>
</html>