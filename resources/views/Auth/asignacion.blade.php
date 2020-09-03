@extends('layout.layout') @section('title','Empresa')@section('link')
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="css/fontawesome-all.min.css"> @endsection @section('content')
<div class="container">
    <h1 class="text-uppercase mb-0 text-center">Empresa <i class="fas fa-industry"></i></h1>
    <hr class="star-light">
    <!-- ************************** Buscar Proveedor ************************** -->
    <form role="form" method="POST" action="{{ url('buscarasignacion') }}">
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

    <!-- ************************** Crear Empresa ************************** -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Empresa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="{{ url('crearempresa') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Empresa" class="col-form-label"> <span style="color:red;">*</span> Nombre:</label>
                            <input type="text" class="form-control" name="Empresa" id="Empresa">
                        </div>
                        <div class="form-group">
                            <label for="Propietario" class="col-form-label"><span style="color:red;">*</span> Dirección:</label>
                            <input type="text" class="form-control" name="Propietario" id="Propietario">
                        </div>
                        <div class="form-group">
                            <label for="Telefono" class="col-form-label"><span style="color:red;">*</span> Teléfono:</label>
                            <input type="text" class="form-control" name="Telefono" id="Telefono">
                        </div>
                        <div class="form-group">
                            <label for="Email" class="col-form-label"><span style="color:red;">*</span> Email:</label>
                            <input type="email" class="form-control" name="Email" id="Email">
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
                    <th scope="col">Nombre</th>
                    <th scope="col">Propietario</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($asignacion as $asignacion)
                <tr>
                    <th scope="row">{{$asignacion->nombre_cadena}}</th>
                    <td>{{$asignacion->propietario_asignacion}}</td>
                    <td>{{$asignacion->telefono_asignacion}}</td>
                    <td>{{$asignacion->email_asignacion}}</td>
                    <td><a class="btn btn-success" href='{{ url("editarempresa/{$asignacion->id_asignacion}") }}' role="button">Modificar</a></td>
                    <td><a class="btn btn-danger" onclick="return confirm('¿Está seguro que deseas eliminar esta empresa?');" href='{{ url("eliminarasignacion/{$asignacion->id_asignacion}") }}' role="button">Eliminar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- ************************** Boton Modal Proveedor ************************** -->
    <div class="row">
        <div class="col-md-3 col-ms-12 ">
            <!-- agregar margin-top: 0.5em; en sm y md -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Agregar Empresa <i class="fas fa-plus"></i></button>
        </div>
    </div>

</div>

@endsection