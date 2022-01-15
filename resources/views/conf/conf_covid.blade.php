@include('components.head')
<body>
<header>
    @include('components.nav')
</header>
<main>
    <div class="container marketing">
        <div class="row">
            <h2 class="featurette-heading">Detalhes<p></p></h2>
            <h2>COVID-19: Implicações em Crianças e Jovens</h2>
            <img src="img/covid.jpg" alt="COVID-19" width="500" height="300">
            <p><br>O Rotary Club Porto Aliados está a organizar palestra virtual "Implicações da Covid-19 na Saúde das
                Crianças e Jovens", na qual participarão o Prof. Dr. Carlos Neto, catedrático da Faculdade de
                Motricidade Humana da Universidade de Lisboa e Alexandre Homem Cristo, colunista, politólogo e autor do
                estudo "Escolas para o Século XXI". <br><br> O encontro acontecerá na próxima sexta-feira, dia 15 de
                Janeiro,
                pelas 19h. O objetivo desta sessão é debatermos as consequências da pandemia na saúde física e mental
                das crianças e jovens, neste mês da Educação Básica e Alfabetização.<br><br>
                Contamos com a vossa participação!</p>
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <em class="fas fa-calendar-alt"></em></span>
            </div>
            &nbsp 15 de Janeiro de 2021, às 19:00
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <em class="fas fa-map-marker-alt"></em></span>
            </div>
            &nbsp Online, via Zoom: https://zoom.us/j/95471843563
        </div>
        @if(Auth::check())
            <a href="/unavailable" class="btn btn-outline-secondary" role="button" aria-pressed="true">Inscrever-me</a>
        @endif
            @if(Auth::guest())
                Registe-se na plataforma para poder inscrever-se nesta e noutras conferências!&nbsp
            <a href="{{ route('register') }}" class="btn btn-dark" role="button" aria-pressed="true">Registar-me</a>
        @endif
    </div>
@include('components/footer')
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
