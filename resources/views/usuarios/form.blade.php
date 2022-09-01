@include('layout.header')
@include('layout.sidebar')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa-solid fa-chart-line" style="margin: 10px;"></i>Gerenciador de chamados</h1>
            <p>Controle de chamados registrados</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa-solid fa-users"></i></li>
            <li class="breadcrumb-item">Usuários</li>
            <li class="breadcrumb-item"><a>{{ isset($chamado) ? 'Editar' : 'Novo' }} Usuário</a>

        </ul>
    </div>
    <div style="margin: 5px;">
        <a href="/usuarios" class="btn btn-secondary">
            <i class="fa-solid fa-arrow-left-long" style="margin: 5px;"></i>
            Voltar

        </a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="row">
                    <h2><i class="fa-solid fa-users" style="margin: 10px;"></i> {{ isset($usuario) ? 'Editar' : 'Novo' }} Usuário</h2>
                    <div class="col" align="end">
                        @isset($usuario->id)
                        <a href="/usuarios/novo" class="btn btn-primary">
                            Novo Usuário
                            <i class="fa-solid fa-plus"></i>
                        </a>
                        @endisset
                    </div>
                </div>
                <form action="/usuarios/salvar" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="@isset($usuario){{$usuario->id}}@endisset">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="float-label">Nome</label>
                                <input type="text" name="nome" class="form-control" required value="@if(isset($usuario)){{$usuario->nome}}@else{{old('nome')}}@endif">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group form-default">
                                <label class="float-label">Email</label>
                                <input type="email" name="email" class="form-control" required value="@if(isset($usuario)){{$usuario->email}}@else{{old('email')}}@endif">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group form-default">
                                <label class="float-label">Cargo</label>
                                <select name="cargo" id="funcao" class="form-control" value="@if(isset($usuario)){{$usuario->cargo}}@else{{old('cargo')}}@endif">
                                    <option value="">Selecione uma Função</option>
                                    @foreach ($tipo_cargo as $key => $tipo)
                                    <option value="{{$tipo}}" @if(isset($usuario) && $usuario->cargo == $tipo) selected @elseif(old('cargo') == $tipo) selected @endif>{{$tipo}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            @if(empty($usuario))
                            <div class="form-group form-default">
                                <label class="float-label">Senha</label>
                                <input type="password" name="password" class="form-control" value="" >
                            </div>
                            @endif
                        </div>
                        <div class="col-5">
                            <label for="foto">Carregar Foto</label>
                            <div>
                                <input type="file" name="foto_temp" class="form-control" value="@if(isset($usuario)){{$usuario->foto}}@else{{old('foto')}}@endif">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card" style="width: 300px;">
                                @if(isset($usuario) && $usuario->foto != '')
                                <img class="card-img-top" src="{{ $usuario->foto }}" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <p class="card-text">{{$usuario->nome}}</p>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col" align="end">
                            <br>
                            <button type="submit" class="btn btn-success w-25 hover-shadow">
                                Salvar
                                <i class="fa-solid fa-floppy-disk" style="margin: 5px;"></i>
                            </button>
                        </div>
                    </div>
                </form>

                @include('layout.footer')