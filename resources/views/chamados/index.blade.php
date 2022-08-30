@include('layout.header')
@include('layout.sidebar')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa-solid fa-chart-line" style="margin: 10px;"></i>Gerenciador de chamados</h1>
            <p>Controle de chamados registrados</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa-solid fa-ticket"></i></li>
            <li class="breadcrumb-item">Registros</li>
            
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3><i class="fa-solid fa-ticket" style="margin: 10px;"></i> Registros de Chamados</h3>
                <table class="table table-hover ">
                    <div class="row">
                        <div class="col" style="margin: 10px;">
                            <a href="/chamados/novo" class="btn btn-primary">
                                Novo Registro
                                <i class="fa-solid fa-plus" style="margin: 5px;"></i>
                            </a>
                        </div>
                        <div class="col" style="margin: 10px;">
                            <form action="">
                                <div class="input-group input-group float-right " style="width: 250px;">
                                    <input type="text" name="pesquisa" class="form-control" placeholder="Pesquisar" value="">
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
                                <td align="center">Médico</td>
                                <td align="center">Status</td>
                                <td align="center">Especialidade</td>
                                <td align="center">Ações</td>
                            </tr>
                        </thead>
                       
                        <tbody>
                            <td align="center">1</td>
                            <td align="center">TESTE</td>
                            <td align="center">TESTE</td>
                            <td align="center">TESTE</td>
                            <td align="center">
                                <a href="" class="btn btn-info">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <button data-target="" data-toggle="modal" class="btn btn-warning">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <a href="#" class="btn btn-danger" onclick="">
                                    <i class="fa-solid fa-trash"></i>
                                </a>

                            </td>
                        </tbody>
                        <tbody>
                            <td align="center">2</td>
                            <td align="center">TESTE</td>
                            <td align="center">TESTE</td>
                            <td align="center">TESTE</td>
                            <td align="center">
                                <a href="" class="btn btn-info">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <button data-target="" data-toggle="modal" class="btn btn-warning">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <a href="#" class="btn btn-danger" onclick="">
                                    <i class="fa-solid fa-trash"></i>
                                </a>

                            </td>
                        </tbody>
                </table>
            </div>


            @include('layout.footer')