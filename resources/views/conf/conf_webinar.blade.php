<!doctype html>
<html lang="en">
<head>
    <title>conf_webinar</title>
</head>
@include('components.head')
<body>
<header>
    @include('components.nav')
</header>
<main>
    <div class="container marketing">
        <div class="row">
            <h2 class="featurette-heading">Detalhes<p></p></h2>
            <h2>Webinar de Desinfeção UV-C Zoom</h2>
            <img src="{{asset('img/webinar_desinf.jpg')}}" alt="covid" width="900" height="392">
            <p><br>O mundo vive novamente uma pandemia e os seus impactos são visíveis a nível económico, social e
                político na tomada de medidas extraordinárias para combater a SARS-CoV-2.<br><br>
                Os germes e agentes patogénicos estão presentes em todo o lado e vão aumentar. Segundo o cientista de
                radiação David Brenner, na conferência TED Talk em 2017: “Bactérias resistentes a medicamentos
                conhecidas como superbactérias mataram quase 700.000 pessoas no ano passado e, em 2050, esse número pode
                chegar a 10 milhões”.<br><br>
                Para conhecer mais sobre o tema, convidamos a assistir a Webinar sobre a desinfeção UV-C no dia 14 de
                janeiro pelas 11h na plataforma Zoom.<br><br>
                Abordaremos nesta Webinar vários aspetos:
                Como podemos prevenir e eliminar os germes e agentes patogénicos?
                Quais são as melhores soluções no mercado para a desinfeção?
                O quê a luz ultravioleta UV-C e quais os seus efeitos?
                O quê é Zenzoe e o porquê do ZenZoe?
                O orador da Webinar é o Engenheiro Alberto Vanzeller, membro do CPI e Director Geral da Aura Light
                Portugal, com mais de 20 anos no mercado da iluminação e um dos principais a nível internacional.
                Não perca esta oportunidade de conhecer mais sobre a desinfeção UV-C.<br><br>
            </p>
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <em class="fas fa-calendar-alt"></em></span>
            </div>
            &nbsp 14 de Janeiro de 2021, às 11h
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <em class="fas fa-map-marker-alt"></em></span>
            </div>
            &nbsp Online, via Zoom: https://zoom.us/j/59195189854
        </div>
        @if(Auth::check())
            <a href="/unavailable" class="btn btn-outline-secondary" role="button" aria-pressed="true">Inscrever-me</a>
        @endif
        @if(Auth::guest())
            Registe-se na plataforma para poder inscrever-se nesta e noutras conferências!&nbsp
            <a href="{{ route('register') }}" class="btn btn-dark" role="button" aria-pressed="true">Registar-me</a>
        @endif
    </div>
    @include('components.footer')
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
