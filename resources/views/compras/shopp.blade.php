@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/compras/styleShopp.css') }}"/>
@endsection

@section('content')
    <header class="cabecalhoShopp">
        <h1>Dê uma chance para nosso amigo!</h1>
    </header>
    <div class="primeiroCard">
        <div class="card-group">
            <div class="card">
                <a href="{{ route('login') }}">
                    <img src="{{ asset('img/akita.jpg') }}" class="card-img-top" alt="akita">
                </a>
                <div class="card-body">
                    <a href="{{ route('login') }}" class="link1">
                        <h5 class="card-title">Raça: Akita</h5>
                    </a>
                    <p class="card-text">Características: Leal, amigo e brincalhão</p>
                    <p class="card-text">Nível de cuidados: Alto</p>
                    <p class="card-text"><small class="text-muted">Postado agora</small></p>
                </div>
            </div>
            <div class="card">
                <a href="{{ route('login') }}">
                    <img src="../img/basset.jpg" class="card-img-top" alt="basset">
                </a>
                <div class="card-body">
                    <a class="link1" href="{{ route('login') }}">
                        <h5 class="card-title">Raça: Basset hound</h5>
                    </a>
                    <p class="card-text">Características: Paciente, teimoso e charmoso</p>
                    <p class="card-text">Nível de cuidados: Alto</p>
                    <p class="card-text"><small class="text-muted">Postado á 1 dia</small></p>
                </div>
            </div>
            <div class="card">
                <a href="{{ route('login') }}">
                    <img src="../img/beagle.jpg" class="card-img-top" alt="beagle">
                </a>
                <div class="card-body">
                    <a href="{{ route('login') }}" class="link1">
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
                    <a href="{{ route('login') }}" class="link1">
                        <img src="../img/nSeiOnome.jpg" class="card-img-top" alt="bichonFrise">
                    </a>
                </div>
                <div class="card-body">
                    <a href="{{ route('login') }}" class="link1">
                        <h5 class="card-title">Raça: Buldogue</h5>
                    </a>
                    <p class="card-text">Características: Calmo, divertido e dócil</p>
                    <p class="card-text">Nível de cuidados: Alto</p>
                    <p class="card-text"><small class="text-muted">Postado á 6 dias</small></p>
                </div>
            </div>
            <div class="card">
                <div class="card2imagem2">
                    <a href="{{ route('login') }}" class="link1">
                        <img src="../img/labrador.jpg" class="card-img-top" alt="borderCollie" style="height: 100%">
                    </a>
                </div>
                <div class="card-body">
                    <a href="{{ route('login') }}" class="link1">
                        <h5 class="card-title">Raça: Labrador retriever</h5>
                    </a>
                    <p class="card-text">Características: Inteligente, carinhoso e brincalhão</p>
                    <p class="card-text">Nível de cuidados: Médio</p>
                    <p class="card-text"><small class="text-muted">Postado á 7 dias</small></p>
                </div>
            </div>
            <div class="card">
                <div class="card2imagem3">
                    <a href="{{ route('login') }}" class="link1">
                        <img src="../img/chowchow.jpg" class="card-img-top" alt="boxer">
                    </a>
                </div>
                <div class="card-body">
                    <a class="link1" href="{{ route('login') }}">
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
@endsection
