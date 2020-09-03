@extends('layout.layout') @section('title','Pagos')@section('link')
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="css/fontawesome-all.min.css"> @endsection @section('content')
<div class="container">
    <h1 class="text-uppercase mb-0 text-center">Pagos <i class="far fa-money-bill-alt"></i></h1>
    <hr class="star-light">
    <!-- ************************** Buscar pago ************************** -->
    <form role="form" method="POST" action="">
        <div class="row">
            {{ csrf_field() }}
            <div class="col-md-9 col-sm-12">
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ejemplo: Coca Cola">
            </div>
            <div class="col-md-3 col-sm-12">
                <!-- agregar margin-top: 0.5em; en sm -->
                <button type="submint" class="btn btn-outline-primary spaceP ">Buscar <i class="fas fa-search"></i></button>
            </div>

        </div>
    </form>

    <!-- ************************** Crear Pago ************************** -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro de pagos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Pago" class="col-form-label"> <span style="color:red;">*</span> Clave de pago:</label>
                            <input type="text" class="form-control" name="Pago" id="Pago">
                        </div>
                        <div class="form-group">
                            <label for="Cuenta" class="col-form-label"><span style="color:red;">*</span> Clave cuenta por pagar:</label>
                            <input type="text" class="form-control" name="Cuenta" id="Cuenta">
                        </div>
                        <div class="form-group">
                            <label for="Saldo" class="col-form-label"><span style="color:red;">*</span> Clave saldo:</label>
                            <input type="text" class="form-control" name="Saldo" id="Saldo">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <br>

    <!-- ************************** Tabla Pago ************************** -->
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Clave de pago:</th>
                    <th scope="col">Clave cuenta por pagar</th>
                    <th scope="col">Clave saldo</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>

                <tr>

                </tr>

            </tbody>
        </table>
    </div>

    <!-- ************************** Boton Modal Pago ************************** -->
    <div class="row">
        <div class="col-md-3 col-ms-12 ">
            <!-- agregar margin-top: 0.5em; en sm y md -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Agregar registro de pagos <i class="fas fa-plus"></i></button>
        </div>
    </div>

</div>

@endsection