@extends('layout.layout') @section('title','Cliente')@section('link')
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="css/fontawesome-all.min.css"> @endsection @section('content')
<div class="container">
    <h1 class="text-uppercase mb-0 text-center">Notas <i class="fas fa-user"></i> </h1>
    <hr class="star-light">
    <!-- ************************** Buscar Cliente ************************** -->
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

    <!-- ************************** Crear Nota ************************** -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Nota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="{{ url('#') }}">
                        <!--url traida de la webNombre -->
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="id_producto_detalle" class="col-form-label"> <span style="color:red;">*</span>Producto Detalle:</label>
                            <input type="text" class="form-control" name="pdetalle" id="id_producto_detalle">
                        </div>
                        <div class="form-group">
                            <label for="id_empleado" class="col-form-label"><span style="color:red;">*</span> Empleado:</label>
                            <input type="text" class="form-control" name="empleado" id="id_empleado">
                        </div>
                        <div class="form-group">
                            <label for="nombre_nota" class="col-form-label"><span style="color:red;">*</span>Nombre Nota:</label>
                            <input type="text" class="form-control" name="nit" id="nombre_nota">
                        </div>
                        <div class="form-group">
                            <label for="motivo_nota" class="col-form-label"><span style="color:red;">*</span> Motivo nota</label>
                            <input type="text" class="form-control" name="motivo" id="motivo_nota">
                        </div>
                        <div class="form-group">
                            <label for="fecha" class="col-form-label"><span style="color:red;">*</span>Fecha</label>
                            <input type="date" class="form-control" name="motivo" id="fecha">
                        </div>
                         <div class="form-group">
                            <label for="nota" class="col-form-label"><span style="color:red;">*</span> Descripcion nota</label>
                            <input type="text" class="form-control" name="nota" id="nota">
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

    <!-- ************************** Tabla Notas ************************** -->
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

    <!-- ************************** Boton Modal NOTAA ************************** -->
    <div class="row">
        <div class="col-md-3 col-ms-12 ">
            <!-- agregar margin-top: 0.5em; en sm y md -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Agregar Nota <i class="fas fa-plus"></i></button>
        </div>
    </div>

</div>

@endsection