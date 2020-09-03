<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Caladium</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

</head>

<body class="text-center">
    <form class="form-signin" action="{{ url('ingresar') }}" method="POST">
    {{ csrf_field() }} <!--  -->
        <img class="mb-4" src="img/login-icon.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Ingresar al sistema</h1>
        <input type="text" id="inputUser" name="inputUser" class="form-control" placeholder="Ingresa tu usuario" required autofocus>
        <br>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Ingresa tu contraseña" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
        @if(session()->has('flash'))
        <br>
        <div class="alert alert-info" style="color:red;"><strong> {{Session::get('flash','')}} <i class="fas fa-lock"></i></strong></div>
        @endif
        <p class="mt-5 mb-3 text-muted">&copy; CaladiumERP 2018</p>
    </form>

    <!--************ Script JS ***********-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>