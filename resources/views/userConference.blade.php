<x-app-layout>
    <x-slot name="header">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
              id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/>
        <div class="container">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link" href="{{ url('/dashboard') }}" class="nav-link">Informação Básica</a>
                <a class="nav-link" href="{{ url('/userConference') }} " class="nav-link">Minhas Conferências</a>
                <a class="nav-link" href="{{ url('/conferences') }} " class="nav-link">Todas as Conferências</a>
            </div>
            @foreach($conference as $conference)
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                        <label style="font-weight:bold;"><br>Id</label>
                    </div>
                    <div class="col-md-8 col-6"><br>
                        <td>{{ $conference->id}}</td>



                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                        <label style="font-weight:bold;">Nome</label>
                    </div>
                    <div class="col-md-8 col-6">
                        <td>{{ $conference->name }}</td>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                        <label style="font-weight:bold;">Descrição</label>
                    </div>
                    <div class="col-md-8 col-6">
                        <td width=300 height=100>{{ $conference->descricao }}</td>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                        <label style="font-weight:bold;">Local</label>
                    </div>
                    <div class="col-md-8 col-6">
                        <td>{{ $conference->local }}</td>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                        <label style="font-weight:bold;">Lotação</label>
                    </div>
                    <div class="col-md-8 col-6">
                        <td>{{ $conference->lotacao }}</td>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                        <label style="font-weight:bold;">Inscritos</label>
                    </div>
                    <div class="col-md-8 col-6">
                        <td>{{ $conference->inscritos }}</td>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                        <label style="font-weight:bold;">Data</label>
                    </div>
                    <div class="col-md-8 col-6">
                        <td>{{ $conference->data }}</td>
                    </div>
                </div>

                <hr/>
        @endforeach
        {{--{{ $conference->links() }}--}}
    </x-slot>
</x-app-layout>
