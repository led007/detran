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

        </ul>
    </div>
 <!-- Modal start -->
 @foreach ($usuarios as $item)
    <div class="modal fade modal-icon" id="modal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Dados do Usuário</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <div class="icon-list-demo" style="width: 13rem;">
                                <img class="card-img-top" src="{{ $item->foto }}">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                Nome:
                                <input class="form-control" readonly type="text" value="{{$item->nome}}">
                            </div>
                            <div class="form-group">
                                Email:
                                <input class="form-control" readonly type="text" value="{{$item->email}}">
                            </div>
                            <div class="form-group">
                                Funçâo:
                                <input class="form-control" readonly type="text" value="{{$item->cargo}}">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Modal end -->
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3><i class="fa-solid fa-users" style="margin: 10px;"></i> Usuários</h3>
                <table class="table table-hover ">
                    <div class="row">
                        <div class="col" style="margin: 10px;">
                            <a href="/usuarios/novo" class="btn btn-primary">
                                Novo Usuário
                                <i class="fa-solid fa-plus" style="margin: 5px;"></i>
                            </a>
                        </div>
                        <div class="col" style="margin: 10px;">
                            <form action="">
                                <div class="input-group input-group float-right " style="width: 250px;">
                                    <input type="text" name="pesquisa" class="form-control" placeholder="Pesquisar" value="{{ $pesquisa }}">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <thead>
                            <tr>
                                <td align="center">#</td>
                                <td align="center">Nome</td>
                                <td align="center">Cargo</td>
                                <td align="center">E-mail</td>
                                <td align="center">Ações</td>
                            </tr>
                        </thead>

                        @foreach ($usuarios as $item)
                        <tbody>
                            <td align="center">{{ $item->id }}</td>
                            <td align="center">{{ $item->nome }}</td>
                            <td align="center">{{ $item->cargo }}</td>
                            <td align="center">{{ $item->email }}</td>
                            <td align="center">
                                <a href="/usuarios/editar/{{ $item->id }}" class="btn btn-info">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <button data-target="#modal{{ $item->id }}" data-toggle="modal" class="btn btn-warning">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <a href="#" class="btn btn-danger" onclick="deleta('/usuarios/deletar/{{ $item->id }}')">
                                    <i class="fa-solid fa-trash"></i>
                                </a>

                            </td>
                        </tbody>
                        @endforeach
                </table>
                <div class="row">
                    <div class="col">
                        {{ $usuarios->links() }}
                        <br>
                    </div>
                </div>
                @if(count($usuarios) < 1) <div class="alert alert-info" style="margin-left: 61px; margin-right: 61px;">
                    Nenhum registro encontrado!
            </div>
            @endif
        </div>


        @include('layout.footer')