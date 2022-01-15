<!doctype html>
<html lang="en">
<head>
    <title>conf_stay</title>
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
            <h2>Stay on Market GCV 2021 - Sales Web Talks</h2>
            <img src="{{asset('img/stay_on_market.jpg')}}" alt="covid" width="900" height="392"> </td>
            <p><br>No âmbito da unidade curricular de Organização de Eventos, os alunos do 2º ano, do Curso Técnico
                Superior Profissional em Gestão Comercial e Vendas, da ESTGV, estão a organizar o evento online Stay on
                Market, que se irá realizar no dia 7 de janeiro de 2021, a partir das 14h30.

                <br><br>Com este evento pretende-se promover o CTeSP em Gestão Comercial e Vendas, realçando as
                mais-valias que
                os seus alunos representam para as empresas que os acolhem, e ainda, divulgar boas práticas
                empresariais, que sejam exemplos de superação e resiliência, face à atual situação económica e social.
            </p>
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <em class="fas fa-calendar-alt"></em></span>
            </div>
            &nbsp 7 de Janeiro de 2021, às 14:30
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <em class="fas fa-map-marker-alt"></em></span>
            </div>
            &nbsp Online, via Zoom: https://zoom.us/j/85702684510
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
