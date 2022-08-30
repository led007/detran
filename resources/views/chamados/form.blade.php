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

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3><i class="fa-solid fa-ticket" style="margin: 10px;"></i> Novo Registro</h3>
                
            </div>


            @include('layout.footer')