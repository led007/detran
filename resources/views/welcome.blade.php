<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap/bootstrap.css">

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

    <title>Produtividade Detran</title>
</head>

<body>
    <div class="content">

        <div class="container">
            <div class="row align-items-stretch no-gutters contact-wrap">
                <div class="col-md-8">
                    <div class="form h-100">
                        <h2>Novo Registro</h2>
                        <form class="mb-5" method="post" id="contactForm" name="contactForm">
                            @csrf
                            <input type="hidden" name="id" value="">
                            <div class="row">
                                <div class="col-md-6 form-group mb-5">
                                    <label class="form-label">Indicador 1</label>
                                    <select name="indicador" class="form-control" value="">
                                        <option value="">Selecione</option>
                                        <option value="">Requisição</option>
                                        <option value="">Interação</option>
                                        <option value="">Feedback</option>
                                        <option value="">Incidente</option>
                                        <option value="">Treinamento</option>
                                        <option value="">Reunião</option>

                                    </select>
                                </div>
                                <div class="col-md-6 form-group mb-5">
                                    <label class="form-label">Indicador 2</label>
                                    <select name="indicador" class="form-control" value="">
                                        <option value="">Selecione</option>
                                        <option value="">Requisição</option>
                                        <option value="">Interação</option>
                                        <option value="">Feedback</option>
                                        <option value="">Incidente</option>
                                        <option value="">Treinamento</option>
                                        <option value="">Reunião</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group mb-5">
                                    <label for="" class="col-form-label">Número do Chamado</label>
                                    <input type="text" class="form-control" name="phone" id="phone">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group mb-5">
                                    <div class="form-group">
                                        <label class="form-label">Data da Abertura</label>
                                        <input type="date" name="data_nasc" class="form-control" required value="">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mb-5">
                                    <label class="form-label">Colaborador</label>
                                    <select name="indicador" class="form-control" value="">
                                        <option value="">Selecione</option>
                                        <option value="">Colaborador 1</option>
                                        <option value="">Colaborador 2</option>
                                        <option value="">Colaborador 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group mb-5">
                                    <label for="message" class="col-form-label">Observações do chamado</label>
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="4"></textarea>
                                </div>
                            </div>


                            <div class="row"  align="end">
                                <div class="col-md-12 form-group">
                                    <button type="submit" class="btn btn-success w-25 hover-shadow">
                                        Salvar
                                        <i class="ti-save" style="margin: 5px;"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info h-100">
                        <img id="logo" src="/assets/img/logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="/assests/js/jquery-3.3.1.min.js"></script>
    <script src="/assests/js/popper.min.js"></script>
    <script src="/assests/js/bootstrap.min.js"></script>
    <script src="/assests/js/jquery.validate.min.js"></script>
    <script src="/assests/js/main.js"></script>

</body>

</html>