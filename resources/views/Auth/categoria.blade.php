@extends('layout.layout') @section('title','Categoria')@section('link')
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="css/fontawesome-all.min.css"> @endsection @section('content')
<div class="container">
    <h1 class="text-uppercase mb-0 text-center">Categoria <i class="fas fa-boxes"></i></h1>
    <hr class="star-light">
    <!-- ************************** Buscar Categoria ************************** -->
    <form role="form" method="POST" action="{{ url('buscarcategoria') }}">
        <div class="row">
            {{ csrf_field() }}
            <div class="col-md-9 col-sm-12">
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ejemplo: Limpieza">
            </div>
            <div class="col-md-3 col-sm-12">
                <!-- agregar margin-top: 0.5em; en sm -->
                <button type="submint" class="btn btn-outline-primary spaceP ">Buscar <i class="fas fa-search"></i></button>
            </div>

        </div>
    </form>

    <!-- ************************** Crear Categoria ************************** -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="{{ url('crearcategoria') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Asignacion" class="col-form-label"> <span style="color:red;">*</span> Nombre:</label>
                            <input type="text" class="form-control" name="Asignacion" id="Asignacion">
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

    <!-- ************************** Tabla Categoria ************************** -->
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id_categoria</th>
                    <th scope="col">Nombre de Categoria</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categoria as $categoria)
                <tr>
                    <th scope="row">{{$categoria->id_categoria}}</th>
                    <td>{{$categoria->nombre_categoria}}</td>
                    <td>{{$categoria->estado_categoria}}</td>
                    <td><a class="btn btn-success" href='{{ url("editarcategoria/{$categoria->id_categoria}") }}' role="button">Modificar</a></td>
                    <td><a class="btn btn-danger" onclick="return confirm('¿Está seguro que deseas eliminar esta categoria?');" href='{{ url("eliminarcategoria/{$categoria->id_categoria}") }}' role="button">Eliminar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- ************************** Boton Modal Categoria ************************** -->
    <div class="row">
        <div class="col-md-3 col-ms-12 ">
            <!-- agregar margin-top: 0.5em; en sm y md -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Agregar Categoria <i class="fas fa-plus"></i></button>
        </div>
    </div>

</div>

@endsection