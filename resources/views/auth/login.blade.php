<!DOCTYPE html>
<html>

<head>
    <title> Detran Chamados</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" href="/assets/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">
</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1>DETRAN-DF</h1>
        </div>
        <div class="login-box">
            <form class="login-form" action="/logar" method="post">
                @csrf
                <h3 class="login-head"><i class="fa-solid fa-lock" style="margin: 10px;"></i>Area Restrita</h3>
                <div class="form-group">
                    <label class="control-label">USERNAME</label>
                    <input class="form-control" name="email" type="text" placeholder="Email" autofocus required="">
                </div>
                <div class="form-group">
                    <label class="control-label">PASSWORD</label>
                    <input class="form-control" type="password" name="password" placeholder="Senha" required="">
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Entrar</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/vendor/sweetalert/sweetalert.all.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="/assets/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="/assets/js/plugins/chart.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
        // Login Page Flipbox control
        $('.login-content [data-toggle="flip"]').click(function() {
            $('.login-box').toggleClass('flipped');
            return false;
        });
    </script>
   
</body>

</html>