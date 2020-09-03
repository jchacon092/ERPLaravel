@extends('layout.layout') @section('title','Producto')@section('link')
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="css/fontawesome-all.min.css"> @endsection @section('content')
<div class="container">
    <h1 class="text-uppercase mb-0 text-center">Productos <i class="fas fa-shopping-cart"></i></h1>
    <hr class="star-light">
    <!-- ************************** Buscar Producto ************************** -->
    <form role="form" method="POST" action="{{ url('buscarp') }}">
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

    <!-- ************************** Crear Producto ************************** -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="{{ url('#') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="id_categoria" class="col-form-label"> <span style="color:red;">*</span> Id Categoria:</label>
                            <input type="text" class="form-control" name="categoria" id="id_categoria">
                        </div>
                        <div class="form-group">
                            <label for="id_marca" class="col-form-label"><span style="color:red;">*</span> Marca:</label>
                            <input type="text" class="form-control" name="marca" id="id_marca">
                        </div>
                        <div class="form-group">
                            <label for="nombre_producto" class="col-form-label"><span style="color:red;">*</span> Nombre Producto:</label>
                            <input type="text" class="form-control" name="nombrepro" id="nombre_producto">
                        </div>
                        <div class="form-group">
                            <label for="foto_producto" class="col-form-label"><span style="color:red;">*</span> Foto Producto:</label>
                            <input type="email" class="form-control" name="fotoproducto" id="foto_producto">
                        </div>
                        <div class="form-group">
                            <label for="descripcion_producto" class="col-form-label"><span style="color:red;">*</span> Descipcion:</label>
                            <input type="email" class="form-control" name="descripcion" id="descripcion_producto">
                        </div>
                        <div class="form-group">
                            <label for="codigo_barra_producto" class="col-form-label"><span style="color:red;">*</span> Codigo de Barra:</label>
                            <input type="email" class="form-control" name="codigodebarra" id="codigo_barra_producto">
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

    <!-- ************************** Tabla Proveedor ************************** -->
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id Producto</th>
                    <th scope="col">Id Categoria</th>
                    <th scope="col">Id Marca</th>
                    <th scope="col">Nombre producto</th>
                    <th scope="col">Foto producto</th>
                    <th scope="col">Eliminar</th>
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

    <!-- ************************** Boton Modal Proveedor ************************** -->
    <div class="row">
        <div class="col-md-3 col-ms-12 ">
            <!-- agregar margin-top: 0.5em; en sm y md -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Agregar Producto <i class="fas fa-plus"></i></button>
        </div>
    </div>

</div>

@endsection