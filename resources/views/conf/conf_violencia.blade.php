<!doctype html>
<html lang="en">
<head>
    <title>conf_violencia</title>
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
            <h2>Violência contra a Mulher em debate na Casa da Juventude</h2>
            <img src="{{asset('img/violencia_mulher.jpg')}}" alt="covid" width="900" height="392">
            <p><br>“O Flagelo da Violência contra a Mulher” é o mote para a iniciativa “Leituras Partilhadas”, promovida
                Associação Dínamo em conjunto com a Câmara Municipal de Sintra, que irá acontecer no dia 8 de janeiro,
                às 9h00, na Casa da Juventude.<br><br>

                A iniciativa “Leituras Partilhadas” pretende ser um encontro informal de leitura e troca de impressões e
                reflexões de excertos de textos que mais nos marcam. Os participantes podem levar para as sessões
                livros, poemas, manifestos, artigos, entre outros documentos, associados ao tema em debate.<br><br>

                A Associação Dínamo – Associação de Dinamização Sócio Cultural – é uma associação não-governamental
                juvenil sem fim lucrativos que nasceu em Sintra com a missão de promover e melhorar a participação
                juvenil na sociedade.<br><br>

                Composta por jovens entre os 15 e os 30 anos, a Associação visa empoderar os jovens, desenvolvendo para
                isso diversos projetos e atividades, como por exemplo a defesa dos Direitos Humanos. As suas iniciativas
                pretendem não só chamar a atenção dos jovens, mas também potenciar o crescimento destas ações no
                concelho de Sintra.<br><br>

                A Dínamo compreende que todas estas lutas são, também, compromisso dos jovens, por isso assume como
                prioridade a formação política e cívica dos mesmos, assim como a capacitação para a participação
                juvenil, apoio à mobilidade internacional, iniciativas de educação e mobilização por direitos sociais e
                reivindicações políticas, formação de youth workers e o apoio às associações de estudantes na sua ação –
                lutando por espaços reais e democráticos de decisão para os jovens.<br><br>

                A participação desta atividade carece de inscrição prévia através da <a href="http://www.dinamo.pt/">Associação
                    Dínamo</a>.<br><br>Site:

                <a href="https://cm-sintra.pt/atualidade/agenda/497-violencia-contra-a-mulher-em-debate-na-casa-da-juventude?date=2021-01-08-09-00">https://cm-sintra.pt/atualidade/agenda/497-violencia-contra-a-mulher-em-debate-na-casa-da-juventude?date=2021-01-08-09-00</a>

            </p>
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <em class="fas fa-calendar-alt"></em></span>
            </div>
            &nbsp 8 de Janeiro, às 9:00
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <em class="fas fa-map-marker-alt"></em></span>
            </div>
            &nbsp Casa da Juventude de Sintra
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
