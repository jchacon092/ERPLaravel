@extends('layout.layout') @section('title','Cliente')@section('link')
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="css/fontawesome-all.min.css"> @endsection @section('content')
<div class="container">
    <h1 class="text-uppercase mb-0 text-center">Cliente <i class="fas fa-user"></i> </h1>
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

    <!-- ************************** Crear CLIENTEE ************************** -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="{{ url('creearcliente') }}">
                        <!--url traida de la webNombre -->
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="cliente" class="col-form-label"> <span style="color:red;">*</span> Nombres :</label>
                            <input type="text" class="form-control" name="cliente" id="cliente">
                        </div>
                        <div class="form-group">
                            <label for="apellidos" class="col-form-label"><span style="color:red;">*</span> Apellidos:</label>
                            <input type="text" class="form-control" name="apellidos" id="apellidos">
                        </div>
                        <div class="form-group">
                            <label for="direccion" class="col-form-label"><span style="color:red;">*</span> Direccion:</label>
                            <input type="text" class="form-control" name="direccion" id="direccion">
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="col-form-label"><span style="color:red;">*</span> Telefono:</label>
                            <input type="text" class="form-control" name="telefono" id="telefono">
                        </div>
                        <div class="form-group">
                            <label for="celular" class="col-form-label"><span style="color:red;">*</span> Celular:</label>
                            <input type="text" class="form-control" name="celular" id="celular">
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label"><span style="color:red;">*</span> Email:</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="nit" class="col-form-label"><span style="color:red;">*</span> Nittt:</label>
                            <input type="text" class="form-control" name="nit" id="nit">
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
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nit</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>

                </tr>
            </thead>
            <tbody>
                @foreach($cliente as $cliente)
                <tr>
                    <th scope="row">{{$cliente->nombre_cliente}}</th>
                    <td>{{$cliente->apellidos_cliente}}</td>
                    <td>{{$cliente->direccion_cliente}}</td>
                    <td>{{$cliente->telefono_cliente}}</td>
                    <td>{{$cliente->celular_cliente}}</td>
                    <td>{{$cliente->email_cliente}}</td>
                    <td>{{$cliente->NIT}}</td>
                    <td><a class="btn btn-success" href='{{url("editarcliente/{$cliente ->id_cliente}")}}' role="button">Modificar</a></td>
                    <td><a class="btn btn-danger" onclick="return confirm('¿Está seguro que deseas eliminar este Cliente?');" href='{{url("eliminarcliente/{$cliente ->id_cliente}")}}' role="button">Eliminar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- ************************** Boton Modal Proveedor ************************** -->
    <div class="row">
        <div class="col-md-3 col-ms-12 ">
            <!-- agregar margin-top: 0.5em; en sm y md -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Agregar Cliente <i class="fas fa-plus"></i></button>
        </div>
    </div>

</div>

@endsection