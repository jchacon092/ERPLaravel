@extends('layout.layout') @section('title','Pagos mixtos')@section('link')
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="css/fontawesome-all.min.css"> @endsection @section('content')
<div class="container">
    <h1 class="text-uppercase mb-0 text-center">Pagos mixtos <i class="far fa-credit-card"></i> <i class="fas fa-money-bill-alt"></i></h1>
    <hr class="star-light">
    <!-- ************************** Buscar Pago Mixto ************************** -->
    <form role="form" method="POST" action="">
        <div class="row">
            {{ csrf_field() }}
            <div class="col-md-9 col-sm-12">
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ejemplo: Tarjeta de credito">
            </div>
            <div class="col-md-3 col-sm-12">
                <!-- agregar margin-top: 0.5em; en sm -->
                <button type="submint" class="btn btn-outline-primary spaceP ">Buscar <i class="fas fa-search"></i></button>
            </div>

        </div>
    </form>

    <!-- ************************** Crear Pago Mixto ************************** -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro de pagos mixtos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Encabezado" class="col-form-label"> <span style="color:red;">*</span> Encabezado:</label>
                            <input type="text" class="form-control" name="Encabezado" id="Encabezado">
                        </div>
                        <div class="form-group">
                            <label for="Pago" class="col-form-label"><span style="color:red;">*</span> Pago:</label>
                            <input type="text" class="form-control" name="Pago" id="Pago">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar <i class="fas fa-times"></i></button>
                            <button type="submit" class="btn btn-primary">Guardar <i class="fas fa-save"></i></button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <br>

    <!-- ************************** Tabla Pago mixto ************************** -->
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Clave encabezado de venta</th>
                    <th scope="col">Clave de pago</th>
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

    <!-- ************************** Boton Modal Pago Mixto ************************** -->
    <div class="row">
        <div class="col-md-3 col-ms-12 ">
            <!-- agregar margin-top: 0.5em; en sm y md -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Agregar registro de pagos mixtos <i class="fas fa-plus"></i></button>
        </div>
    </div>

</div>

@endsection