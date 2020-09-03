@extends('layout.layout') @section('title','Proveedor')@section('link')
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="css/fontawesome-all.min.css"> @endsection @section('content')
<form role="form" method="POST" action="{{ url('registrar') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="user" class="col-form-label"> <span style="color:red;">*</span> Usuario:</label>
        <input type="text" class="form-control" name="user" id="user">
    </div>
    <div class="form-group">
        <label for="empleado" class="col-form-label"><span style="color:red;">*</span> Empleado:</label>
        <input type="text" class="form-control" name="empleado" id="empleado">
    </div>
    <div class="form-group">
        <label for="password" class="col-form-label"><span style="color:red;">*</span> Contraseña:</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar <i class="fas fa-times"></i></button>
        <button type="submit" class="btn btn-primary">Guardar <i class="fas fa-save"></i></button>
    </div>
</form>
@endsection