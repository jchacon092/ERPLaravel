@extends('layout.layout') @section('title','Editar Cliente') @section('link')
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/app.css">
<link rel="stylesheet" href="../css/fontawesome-all.min.css"> @endsection @section('content')
<form role="form" method="POST" action='{{ url("actualizarcliente/{$cliente ->id_cliente}") }}'>
    <!--url traida de la webNombre -->
    {{ csrf_field() }}
    <div class="form-group">
        <label for="cliente" class="col-form-label"> <span style="color:red;">*</span> Nombres :</label>
        <input type="text" class="form-control" name="cliente" id="cliente" value="{{$cliente ->nombre_cliente}}">
    </div>
    <div class="form-group">
        <label for="apellidos" class="col-form-label"><span style="color:red;">*</span> Apellidos:</label>
        <input type="text" class="form-control" name="apellidos" id="apellidos" value="{{$cliente ->apellidos_cliente}}">
    </div>
    <div class="form-group">
        <label for="direccion" class="col-form-label"><span style="color:red;">*</span> Direccion:</label>
        <input type="text" class="form-control" name="direccion" id="direccion" value="{{$cliente ->direccion_cliente}}">
    </div>
    <div class="form-group">
        <label for="telefono" class="col-form-label"><span style="color:red;">*</span> Telefono:</label>
        <input type="text" class="form-control" name="telefono" id="telefono" value="{{$cliente ->telefono_cliente}}">
    </div>
    <div class="form-group">
        <label for="celular" class="col-form-label"><span style="color:red;">*</span> Celular:</label>
        <input type="text" class="form-control" name="celular" id="celular" value="{{$cliente ->celular_cliente}}">
    </div>
    <div class="form-group">
        <label for="email" class="col-form-label"><span style="color:red;">*</span> Email:</label>
        <input type="email" class="form-control" name="email" id="email" value="{{$cliente ->email_cliente}}">
    </div>
    <div class="form-group">
        <label for="nit" class="col-form-label"><span style="color:red;">*</span> Nittt:</label>
        <input type="text" class="form-control" name="nit" id="nit" value="{{$cliente ->NIT}}">
    </div>
    <div class="modal-footer">
        <a class="btn btn-danger" href='{{url("cliente")}}' role="button">Cancelar <i class="fas fa-times"></i></a>
        <button type="submit" class="btn btn-primary">Modificar <i class="fas fa-edit"></i></button>
    </div>
</form>
@endsection