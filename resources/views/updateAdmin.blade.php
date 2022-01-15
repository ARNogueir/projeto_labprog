@include('components.head')
<body>

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
        </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <table class="table table-hover">
                <caption>update_admin</caption>
                <tr>
                    <th id="id">ID</th>
                    <th id="nome">Nome</th>
                    <th id="email">E-mail</th>
                    <th id="perfil">Perfil</th>
                </tr>
                </thead>
                <tbody>

                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->email }}</td>
                        @if($user->admin=='1')
                            <td>Admin</td>
                        @else
                            <td>Utilizador</td>
                        @endif
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Opções
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Ver Perfil</a>
                                    <a class="dropdown-item" href="#">Editar Perfil</a>
                                    <a class="dropdown-item" href="admin/{{$user->id}}">Eliminar Perfil</a>
                                    @if($user->admin=='1')
                                        <a class="dropdown-item" href="updateUser/{{$user->id}}">Tornar Utilizador
                                            Normal</a>
                                    @else
                                        <a class="dropdown-item" href="updateAdmin/{{$user->id}}">Tornar
                                            Administrador</a>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
@else
    Sem permissões para ver esta página.
@endif
@include('components.footer');
</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>admin.blade.php
