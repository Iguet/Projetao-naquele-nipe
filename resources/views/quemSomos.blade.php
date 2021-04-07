@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/quemSomos.css') }}"/>
@endsection

@section('content')
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
@endsection
