@include('components.head')
<header>
    @include('components.nav')
</header>
<br>
<br>
<br>
@if((Illuminate\Support\Facades\Auth::user()->admin) ==1)
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-link" href="{{ url('/admin') }}" class="nav-link">
                <button type="button" class="btn btn-outline-secondary">Utilizadores</button>
            </a>
            <a class="nav-link" href="{{ url('/admin_conferences') }}" class="nav-link">
                <button type="button" class="btn btn-outline-secondary">Conferências</button>
            </a>
            <a class="nav-link" href="{{ url('/conf_create') }}" class="nav-link">
                <button type="button" class="btn btn-outline-success">Nova Conferência</button>
            </a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <table class="table table-hover">
                <caption>admin_conf</caption>
                <tr>
                    <th id="id">ID</th>
                    <th id="nome">Nome</th>
                    <th id="descricao">Descrição</th>
                    <th id="local">Local</th>
                    <th id="lotação">lotação</th>
                    <th id="inscritos">Inscrito</th>
                    <th id="data">Data</th>
                </tr>
                </thead>
                <tbody>

                @foreach($conferences as $conference)
                    <tr>
                        <td>{{ $conference->id }}</td>
                        <td>{{ $conference->name }}</td>
                        <td width=300 height=100>{{ $conference->descricao }}</td>
                        <td>{{ $conference->local }}</td>
                        <td>{{ $conference->lotacao }}</td>
                        <td>{{ $conference->inscritos }}</td>
                        <td>{{ $conference->data }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Opções
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="inscricao/{{$conference->id}}">Inscrever-me</a>
                                    <a class="dropdown-item" href="#">Editar Conferência</a>
                                    <a class="dropdown-item" href="#">Ver Inscritos</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $conferences->links() }}
        </div>
    </div>
@else
    Nao tem autorização para ver esta pagina
@endif

@include('components.footer');

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


