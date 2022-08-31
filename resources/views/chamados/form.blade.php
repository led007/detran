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
            <li class="breadcrumb-item"><a href="#">{{ isset($chamado) ? 'Editar' : 'Novo' }} Registro</a>

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
                    <h2><i class="fa-solid fa-ticket" style="margin: 10px;"></i> {{ isset($chamado) ? 'Editar' : 'Novo' }} Registro</h2>
                    <div class="col" align="end">
                        @isset($chamado->id)
                        <a href="/chamados/novo" class="btn btn-primary">
                            Novo Registro
                            <i class="fa-solid fa-plus"></i>
                        </a>
                        @endisset
                    </div>
                </div>
                <form action="/chamados/salvar" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="@isset($chamado){{$chamado->id}}@endisset">
                    <div class="row">
                        <div class="col-5">
                            <div class="form-group">
                                <label class="form-label">N° do Chamado</label>
                                <input type="text" name="chamado" class="form-control" required value="@if(isset($chamado)){{$chamado->chamado}}@else{{old('chamado')}}@endif">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label class="form-label">Indicador 1</label>
                                <select name="indicador1" class="form-control" value="@if(isset($chamado)){{$chamado->indicador1}}@else{{old('incidacor1')}}@endif">
                                    <option value="">Selecione</option>
                                    @foreach ($indicador1 as $key => $tipo)
                                    <option value="{{$tipo}}" @if(isset($chamado) && $chamado->indicador1 == $tipo) selected @elseif(old('indicador1') == $tipo) selected @endif>{{$tipo}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label class="form-label">Indicador 2</label>
                                <select name="indicador2" class="form-control" value="@if(isset($chamado)){{$chamado->indicador2}}@else{{old('incidacor1')}}@endif">
                                    <option value="">Selecione</option>
                                    @foreach ($indicador2 as $key => $tipo)
                                    <option value="{{$tipo}}" @if(isset($chamado) && $chamado->indicador2 == $tipo) selected @elseif(old('indicador2') == $tipo) selected @endif>{{$tipo}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label class="form-label">Data de Abertura</label>
                                <input type="date" name="data_abertura" class="form-control" required value="@if(isset($chamado)){{$chamado->data_abertura}}@else{{old('data_abertura')}}@endif">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label class="form-label">Data de Fechamento</label>
                                <input type="date" name="data_fechamento" class="form-control" required value="@if(isset($chamado)){{$chamado->data_fechamento}}@else{{old('data_fechamento')}}@endif">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label">Colaborador</label>
                                <input type="text" name="colaborador" class="form-control" required value="@if(isset($chamado)){{$chamado->colaborador}}@else{{old('colaborador')}}@endif">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Observações:</label>
                                <textarea style="height: 140px;" class="form-control" name="obs" rows="3">@if(isset($chamado)){{$chamado->obs}}@else{{ old('obs')}}@endif</textarea>
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