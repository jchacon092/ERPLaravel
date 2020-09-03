@extends('layout.layout') @section('title','Sucursal')@section('link')
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="css/fontawesome-all.min.css"> @endsection @section('content')
<div class="container">
    <h1 class="text-uppercase mb-0 text-center">Sucursal <i class="fas fa-industry"></i></h1>
    <hr class="star-light">
    <!-- ************************** Buscar Sucursal ************************** -->
    <form role="form" method="POST" action="{{ url('buscarsucursal') }}">
        <div class="row">
            {{ csrf_field() }}
            <div class="col-md-9 col-sm-12">
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ejemplo: Zona 1">
            </div>
            <div class="col-md-3 col-sm-12">
                <!-- agregar margin-top: 0.5em; en sm -->
                <button type="submint" class="btn btn-outline-primary spaceP ">Buscar <i class="fas fa-search"></i></button>
            </div>

        </div>
    </form>

    <!-- ************************** Crear Sucursal ************************** -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Sucursal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="{{ url('createsucursal') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Asignacion" class="col-form-label"> <span style="color:red;">*</span> Id_asignacion:</label>
                            <input type="text" class="form-control" name="Asignacion" id="Asignacion">
                        </div>
                        <div class="form-group">
                            <label for="Sucursal" class="col-form-label"> <span style="color:red;">*</span> Nombre:</label>
                            <input type="text" class="form-control" name="Sucursal" id="Sucursal">
                        </div>
                        <div class="form-group">
                            <label for="Telefono" class="col-form-label"><span style="color:red;">*</span> Teléfono:</label>
                            <input type="text" class="form-control" name="Telefono" id="Telefono">
                        </div>
                        <div class="form-group">
                            <label for="Ciudad" class="col-form-label"><span style="color:red;">*</span> Ciudad:</label>
                            <input type="text" class="form-control" name="Ciudad" id="Ciudad">
                        </div>
                        <div class="form-group">
                            <label for="Direccion" class="col-form-label"><span style="color:red;">*</span> Direccion:</label>
                            <input type="text" class="form-control" name="Direccion" id="Direccion">
                        </div>
                        <div class="form-group">
                            <label for="Central" class="col-form-label"><span style="color:red;">*</span> Central:</label>
                            <input type="number" class="form-control" name="Central" id="Central">
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

    <!-- ************************** Tabla Sucursal ************************** -->
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id_empresa</th>
                    <th scope="col">Id_asignacion</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Central</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empresa as $empresa)
                <tr>
                    <th scope="row">{{$empresa->id_empresa}}</th>
                    <td>{{$empresa ->id_asignacion}}</td>
                    <td>{{$empresa->nombre_empresa}}</td>
                    <td>{{$empresa->telefono_empresa}}</td>
                    <td>{{$empresa->ciudad_empresa}}</td>
                    <td>{{$empresa->direccion_empresa}}</td>
                    <td>{{$empresa->central_empresa}}</td>
                    <td>{{$empresa->estado_empresa}}</td>
                    <td><a class="btn btn-success" href='{{ url("editarempresa/{$empresa->id_empresa}") }}' role="button">Modificar</a></td>
                    <td><a class="btn btn-danger" onclick="return confirm('¿Está seguro que deseas eliminar esta sucursal?');" href='{{ url("eliminarsucursal/{$empresa->id_empresa}") }}' role="button">Eliminar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- ************************** Boton Modal Sucursal ************************** -->
    <div class="row">
        <div class="col-md-3 col-ms-12 ">
            <!-- agregar margin-top: 0.5em; en sm y md -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Agregar sucursal <i class="fas fa-plus"></i></button>
        </div>
    </div>

</div>

@endsection