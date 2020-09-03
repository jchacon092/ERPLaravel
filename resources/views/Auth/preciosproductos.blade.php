@extends('layout.layout') @section('title','Precios')@section('link')
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="css/fontawesome-all.min.css"> @endsection @section('content')
<div class="container">
    <h1 class="text-uppercase mb-0 text-center">Precios <i class="fas fa-hand-holding-usd"></i></h1>
    <hr class="star-light">
    <!-- ************************** Buscar Precios ************************** -->
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

    <!-- ************************** Crear Precio ************************** -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Asignacion de precios</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Producto" class="col-form-label"> <span style="color:red;">*</span> Nombre:</label>
                            <input type="text" class="form-control" name="Producto" id="Producto">
                            <!--AQUI DEBERIA SER UN COMBOBOX O ELEMETO DE OPCION MULTIPLE-->
                        </div>
                        <div class="form-group">
                            <label for="Precio_compra" class="col-form-label"><span style="color:red;">*</span> Precio de compra:</label>
                            <input type="text" class="form-control" name="Precio_compra" id="Precio_compra">
                        </div>
                        <div class="form-group">
                            <label for="Precio_venta" class="col-form-label"><span style="color:red;">*</span> Precio de venta:</label>
                            <input type="text" class="form-control" name="Precio_venta" id="Precio_venta">
                        </div>
                        <div class="form-group">
                            <label for="Fecha_compra" class="col-form-label"><span style="color:red;">*</span> Fecha compra:</label>
                            <input type="date" class="form-control" name="Fecha_compra" id="Fecha_compra">
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

    <!-- ************************** Tabla Precios ************************** -->
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio compra</th>
                    <th scope="col">Precio Venta</th>
                    <th scope="col">Fecha compra</th>
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

    <!-- ************************** Boton Modal Proveedor ************************** -->
    <div class="row">
        <div class="col-md-3 col-ms-12 ">
            <!-- agregar margin-top: 0.5em; en sm y md -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Agregar Precio <i class="fas fa-plus"></i></button>
        </div>
    </div>

</div>

@endsection