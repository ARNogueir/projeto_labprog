@include('components.head')
<body>
<header>
    @include('components.nav')
</header>
<main>
    <div class="container marketing">
        <div class="row">
            <h2 class="featurette-heading">Detalhes<p></p></h2>
            <h2>Conversas com História: Ricardo Araújo Pereira</h2>
            <img src="img/conversa_rap.jpg" alt="COVID-19" width="500" height="500">
            <p><br>A historiadora Raquel Varela recebe no dia 3 de Fevereiro, no âmbito do ciclo Conversas com História,
                Ricardo Araújo Pereira. O humorista vai-nos ajudar a pensar o que é isto do humor, como e quando nos
                começámos a rir na longa linha do tempo do género humano, e abordaremos a inevitável pergunta: «há
                limites para o humor?»<br><br>

                Neste ciclo, cada conversa, informal, parte de uma pergunta inquietante da atualidade para, através do
                passado – explicado para o grande público –, nos ajudar a compreender o presente.<br><br>

                A democracia é o menos imperfeito dos regimes? Entre a educação repressiva e a cultura permissiva, há
                alternativa? Não existem diferenças entre sexos? São construções culturais? A próxima crise económica é
                inevitável? A religião é um ópio ou uma expressão do sofrimento? Freud tinha razão quando «culpou» as
                mães pelos erros dos filhos?<br><br>

                O ciclo Conversas com História convida-vos a estar presentes nesta série de entrevistas sem tabus, sobre
                temas da atualidade. O público será convidado a questionar, criticar e debater connosco o futuro. Não
                conseguimos mudar o passado – mas sem o conhecer não podemos transformar o futuro.<br><br>

                <strong>Ricardo Araújo Pereira</strong><br><br>
                Ricardo Araújo Pereira (Lisboa, 1974) é licenciado em Comunicação Social pela Universidade Católica, e
                começou a sua carreira como jornalista no Jornal de Letras. É guionista desde 1998. Em 2003, com Miguel
                Góis, Zé Diogo Quintela e Tiago Dores, formou o Gato Fedorento. Escreve semanalmente na Visão (Portugal)
                e na Folha de S. Paulo (Brasil) e é um dos elementos do Governo Sombra. É coautor e apresentou Gente Que
                Não Sabe Estar (TVI).<br><br>
                Com a Tinta da china, publicou seis livros de crónicas — entre os quais, Novas Crónicas da Boca do
                Inferno (Grande Prémio de Crónica APE 2009), Reaccionário com Dois Cês (2017) e Estar Vivo Aleija (2018)
                —, além de três volumes de Mixórdia de Temáticas e um ensaio: A Doença, o Sofrimento e a Morte Entram
                num Bar (2016, também publicado no Brasil). No Brasil está ainda publicada a coletânea de crónicas Se
                não entenderes eu conto de novo, pá (Tinta da china, 2012).<br><br>
                Coordena a coleção de Literatura de Humor da Tinta da china, que publicou livros de Charles Dickens,
                Denis Diderot, Jaroslav Hasek, Ivan Gontcharov e José Sesinando, entre outros.
                É o sócio n.º 12 049 do Sport Lisboa e Benfica.<br><br>Fonte:

                <a href="https://www.ccb.pt/Default/pt/Programacao/LiteraturaEPensamento?a=1895">https://www.ccb.pt/Default/pt/Programacao/LiteraturaEPensamento?a=1895</a>
            </p>
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <em class="fas fa-calendar-alt"></em></span>
            </div>
            &nbsp 3 de Fevereiro de 2021
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <em class="fas fa-map-marker-alt"></em></span>
            </div>
            &nbsp CCB - Centro Cultural de Belém
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
