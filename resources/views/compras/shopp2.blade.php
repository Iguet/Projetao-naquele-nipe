@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/compras/styleShopp2.css') }}"/>
@endsection

@section('content')
    <div class="corpoShopp">
        <div class="primeiroCard">
            <div class="card-group">
                <div class="card">
                    <a href="#">
                        <img src="../img/Shiba.jpg" class="card-img-top" alt="akita">
                    </a>
                    <div class="card-body">
                        <a class="link1" href="#">
                            <h5 class="card-title">Raça: Shiba</h5>
                        </a>
                        <p class="card-text">Características: Independente, leal e alerta</p>
                        <p class="card-text">Nível de cuidados: Baixo</p>
                        <p class="card-text"><small class="text-muted">Postado á 11 dia</small></p>
                    </div>
                </div>
                <div class="card">
                    <a href="#">
                        <img src="../img/husky.jpg" class="card-img-top" alt="basset">
                    </a>
                    <div class="card-body">
                        <a class="link1" href="#">
                            <h5 class="card-title">Raça: Husky siberiano</h5>
                        </a>
                        <p class="card-text">Características: Amigável, trabalhador e extrovertido</p>
                        <p class="card-text">Nível de cuidados: Médio</p>
                        <p class="card-text"><small class="text-muted">Postado á 12 dia</small></p>
                    </div>
                </div>
                <div class="card">
                    <a href="#">
                        <img src="../img/Jack russell terrier.jpg" class="card-img-top" alt="beagle">
                    </a>
                    <div class="card-body">
                        <a href="#" class="link1">
                            <h5 class="card-title">Raça: Jack russell terrier</h5>
                        </a>
                        <p class="card-text">Características: Amigável, atlético e alerta</p>
                        <p class="card-text">Nível de cuidados: Médio</p>
                        <p class="card-text"><small class="text-muted">Postado á 13 dias</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="segundoCard">
            <div class="card-group">
                <div class="card">
                    <div class="card2imagem1">
                        <a href="#">
                            <img src="../img/Lhasa apso.jpg" class="card-img-top" alt="bichonFrise">
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="link1">
                            <h5 class="card-title">Raça: Lhasa apso</h5>
                        </a>
                        <p class="card-text">Características: Esperto, confiante e independente</p>
                        <p class="card-text">Nível de cuidados: Médio</p>
                        <p class="card-text"><small class="text-muted">Postado á 14 dias</small></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card2imagem2">
                        <a href="#">
                            <img src="../img/Pequinês.jpg" class="card-img-top" alt="borderCollie" style="height: 100%">
                        </a>
                    </div>
                    <div class="card-body">
                        <a class="link1" href="#">
                            <h5 class="card-title">Raça: Pequinês</h5>
                        </a>
                        <p class="card-text">Características: Afetuoso, leal e elegante</p>
                        <p class="card-text">Nível de cuidados: Médio</p>
                        <p class="card-text"><small class="text-muted">Postado á 15 dias</small></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card2imagem3">
                        <a href="#">
                            <img src="../img/Pinscher.jpg" class="card-img-top" alt="boxer">
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="link1">
                            <h5 class="card-title">Raça: Pinscher</h5>
                        </a>
                        <p class="card-text">Características: Brincalhão, carinhoso e protetor</p>
                        <p class="card-text">Nível de cuidados: Médio</p>
                        <p class="card-text"><small class="text-muted">Postado á 20 dias</small></p>
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
    </div>
@endsection
