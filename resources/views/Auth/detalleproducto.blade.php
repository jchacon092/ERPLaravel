@extends('layout.layout') @section('title','Cliente')@section('link')
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="css/fontawesome-all.min.css"> @endsection @section('content')
<div class="container">
    <h1 class="text-uppercase mb-0 text-center">Detalle Producto <i class="fas fa-user"></i> </h1>
    <hr class="star-light">
    <!-- ************************** Buscar detalle producto ************************** -->
    <form role="form" method="POST" action="{{ url('buscarcli') }}">
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

    <!-- ************************** Crear detalle producto ************************** -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Detalle producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="{{ url('#') }}">
                        <!--url traida de la webNombre -->
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="id_presentacion_producto" class="col-form-label"> <span style="color:red;">*</span>Prestacion:</label>
                            <input type="text" class="form-control" name="idpresentacion" id="id_presentacion_producto">
                        </div>
                         <div class="form-group">
                            <label for="existencia_maxima" class="col-form-label"><span style="color:red;">*</span>Exostemcoa Maxima</label>
                            <input type="text" class="form-control" name="existenciam" id="existencia_maxima">
                        </div>
                        <div class="form-group">
                            <label for="existencia_minima" class="col-form-label"><span style="color:red;">*</span>Exostemcia minima</label>
                            <input type="text" class="form-control" name="existenciaminima" id="existencia_minima">
                        </div>
                        <div class="form-group">
                            <label for="existencia" class="col-form-label"><span style="color:red;">*</span>Exostencia</label>
                            <input type="text" class="form-control" name="existencia" id="existencia">
                        </div>
                        <div class="form-group">
                            <label for="fecha_vencimiento" class="col-form-label"><span style="color:red;">*</span>fecha De vencimiento</label>
                            <input type="date" class="form-control" name="fecha_vencimiento" id="fecha_vencimiento">
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

    <!-- ************************** Tabla Detalle ************************** -->
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombres</th>
                    <th scope="col">Producto detalle </th>
                    <th scope="col">Nombre nota</th>
                    <th scope="col">Fecha</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a class="btn btn-success" href='' role="button">Modificar</a></td>
                    <td><a class="btn btn-danger" onclick="return confirm('¿Está seguro que deseas eliminar este proveedor?');" href='' role="button">Eliminar</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- ************************** Boton Detalle ************************** -->
    <div class="row">
        <div class="col-md-3 col-ms-12 ">
            <!-- agregar margin-top: 0.5em; en sm y md -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Agregar Detalle <i class="fas fa-plus"></i></button>
        </div>
    </div>

</div>

@endsection