@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
@endsection

@section('content')
    <section>
        <article class="articleMain">
            <div class="postMain">
            </div>
            <div class="botaoPrincipal">
                <div class="d-grid gap-2">
                    <a class="btn btn-dark" href="/shopp" role="button">Adote Agora Seu Pet!</a>
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
                            Adotar um animal é um envolto de imprevisibilidade, nunca se sabe o que esperar, e essa é a
                            melhor parte para quem gosta de
                            novas experiências. O melhor disso tudo é que a maioria das surpresas são positivas. Os cães se
                            mostram muito amáveis,
                            mesmo que no início possam demonstrar alguns problemas decorrentes das dificuldades que já
                            passaram,
                            quando você conquista a confiança desses animais, ganha uma companhia fiel.
                        </p>
                    </div>
                </div>
                <div class="card2">
                    <div class="card bg-success">
                        <div class="card-body">
                            <h5 class="card-title">A Adoção Salva Vidas.</h5>
                            <p class="card-text text-white">
                                Optar por adotar um animal é uma das atitudes mais importantes para diminuir o número
                                exorbitante de cães e gatos abandonados e sujeitos
                                a maus tratos em todo o país. De acordo com a Organização Mundial da Saúde (OMS), existem
                                mais de 30 milhões de animais abandonados vivendo nas ruas
                                do Brasil. Destes, mais de 20 milhões são cachorros. Porém, é crucial que a adoção seja
                                responsável e ofereça os cuidados básicos e fundamentais para
                                assegurar o bem-estar do animal e também dos membros da família.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Evolução do número total de animais recolhidos por abrigos e protetores em
                            Espanha.</h5>
                        <iframe id='ep-chart-6c1a807d-5207-4b89-a96c-3dc7fa2e6abe'
                                src='https://www.epdata.es/embed/6c1a807d-5207-4b89-a96c-3dc7fa2e6abe/450'
                                style='width: 100%; min-height: 450px; overflow: hidden;' frameborder='0' scrolling='no'
                                height='450'></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="container">
        <div class="card bg-dark text-dark">
            <img src="{{ asset('img/cardPlanoDeFundo.jpg') }}" class="card-img" alt="ERRO" style="opacity: 0.9">
            <div class="card-img-overlay">
                <h1 class="card-title">nossa plataforma Te possibilita uma adoção mais fácil e consciente.</h1>
                <div class="paragraph">
                    <p class="card-text">
                        <b>
                            damos total apoio as pessoas que necessitam de um melhor amigo pet, em nossa plataorma você
                            encontrará vários pets, de diferentes raças, genêneros
                            e personalidades. Escolha oque tem mais haver com você e seja feliz.
                        </b>
                    </p>
                </div>
            </div>
        </div>
    </div>
@include('layouts.footer')
@endsection
