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
            <li class="breadcrumb-item">Registro</li>
            <li class="breadcrumb-item">Novo Registro</li>

        </ul>
    </div>
    <div style="margin: 5px;">
        <a href="/chamados" class="btn btn-secondary">
            <i class="fa-solid fa-arrow-left-long" style="margin: 5px;"></i>
            Voltar

        </a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="row">
                    <h2><i class="fa-solid fa-ticket" style="margin: 10px;"></i> Novo Registro</h2>
                    <div class="col" align="end">
                        <a href="/chamados/novo" class="btn btn-primary">
                            Novo Registro
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
                <form action="/chamados/salvar" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="">
                    <div class="row">
                        <div class="col-5">
                            <div class="form-group">
                                <label class="form-label">N° do Chamado</label>
                                <input type="text" name="nome" class="form-control" required value="">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label class="form-label">Indicador 1</label>
                                <select name="sexo" class="form-control" value="">
                                    <option value="">Selecione</option>
                                    <option value="">Requisição</option>
                                    <option value="">Interação</option>
                                    <option value="">Feedback</option>
                                    <option value="">Incidente</option>
                                    <option value="">Monitoria</option>
                                    <option value="">Treinamento</option>
                                    <option value="">Reunião</option>
                                    <option value="">Auditoria</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label class="form-label">Indicador 2</label>
                                <select name="sexo" class="form-control" value="">
                                    <option value="">Selecione</option>
                                    <option value="">Requisição</option>
                                    <option value="">Interação</option>
                                    <option value="">Feedback</option>
                                    <option value="">Incidente</option>
                                    <option value="">Monitoria</option>
                                    <option value="">Treinamento</option>
                                    <option value="">Reunião</option>
                                    <option value="">Auditoria</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label class="form-label">Data de Abertura</label>
                                <input type="date" name="data_nasc" class="form-control" required value="">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label class="form-label">Data de Fechamento</label>
                                <input type="date" name="data_nasc" class="form-control" required value="">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label class="form-label">Colaborador</label>
                                <input type="text" name="nome" class="form-control" required value="">
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