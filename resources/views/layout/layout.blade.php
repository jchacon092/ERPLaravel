<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> @yield('link')

</head>

<body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0 navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar" href="#">CaladiumERP <i class="fas fa-leaf"></i></a>
        <!-- Espacio para trabajar una barra de tareas o busqueda-->
        <div style="color:white;">
            <script type="text/javascript">
                //<![CDATA[
                function makeArray() {
                    for (i = 0; i < makeArray.arguments.length; i++)
                        this[i + 1] = makeArray.arguments[i];
                }
                var months = new makeArray('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
                    'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
                var date = new Date();
                var day = date.getDate();
                var month = date.getMonth() + 1;
                var yy = date.getYear();
                var year = (yy < 1000) ? yy + 1900 : yy;
                document.write("Hoy es " + day + " de " + months[month] + " del " + year);
                //]]>
            </script>
        </div>

        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="cerrar">Cerrar Sesión</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <nav class="navbar navbar-sm size-vertical">
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="cliente">
                                    <i class="fas fa-user"></i> Clientes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="proveedor">
                                    <i class="fas fa-shopping-cart"></i> Proveedor
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="empresa">
                                    <i class="fas fa-industry"></i> Empresa
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sucursal">
                                    <i class="fas fa-industry"></i> Sucursal
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="categoria">
                                    <i class="fas fa-boxes"></i> Categoria
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                </nav>
            </div>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                @yield('content')
            </main>
        </div>
    </div>

    <!--************ Script JS ***********-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>