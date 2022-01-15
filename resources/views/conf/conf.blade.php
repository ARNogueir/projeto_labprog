<!doctype html>
<html lang="en">
<head>
    <title>conf</title>
</head>
@include('components.head')

<body>
<header>
    @include('components.nav')
</header>

<div class="container marketing">
    <div class="row">

        <div class="row featurette">
            <h2 class="featurette-heading">Stay on Market<p></p></h2>
            <img src="{{asset('img/stay_on_market.jpg')}}" alt="Stay on Market" width="900" height="392">
            <p class="lead"><br>No âmbito da unidade curricular de Organização de Eventos, os alunos do 2º ano, do Curso
                Técnico Superior Profissional em Gestão Comercial e Vendas, da ESTGV, estão a organizar o evento
                online Stay on Market, que se irá realizar no dia 7 de janeiro de 2021, a partir das 14h30. </p>
            <p><a class="btn btn-secondary" href="/conf_stay" role="button">Detalhes &raquo;</a></p>
        </div>

        <div class="row featurette">
            <h2 class="featurette-heading">Violência contra a Mulher em debate na Casa da Juventude</h2>
            <img src="{{asset('img/violencia_mulher.jpg')}}"
                 alt="Violência contra a Mulher em debate na Casa da Juventude" width="900" height="392">
            <p class="lead"><br>“O Flagelo da Violência contra a Mulher” é o mote para a iniciativa “Leituras
                Partilhadas”, promovida Associação Dínamo em conjunto com a Câmara Municipal de Sintra, que irá
                acontecer no dia 8 de janeiro, às 19h00, na Casa da Juventude.</p>
            <p><a class="btn btn-secondary" href="/conf_viol" role="button">Detalhes &raquo;</a></p>
        </div>

        <div class="row featurette">
            <h2 class="featurette-heading">Webinar de Desinfeção UV-C Zoom</h2>
            <img src="{{asset('img/webinar_desinf.jpg')}}" alt="Webinar de Desinfeção UV-C Zoom" width="900"
                 height="392">
            <p class="lead">O mundo vive novamente uma pandemia e os seus impactos são visíveis a nível económico,
                social e político na tomada de medidas extraordinárias para combater a SARS-CoV-2.
            <p><a class="btn btn-secondary" href="/conf_web" role="button">Detalhes &raquo;</a></p>
        </div>
    </div>
</div>
@include('components.footer')

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
