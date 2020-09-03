@extends('layout.layout') @section('title','Cliente')@section('link')
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="css/fontawesome-all.min.css"> @endsection @section('content')
<div class="container">
    <h1 class="text-uppercase mb-0 text-center">Empleados <i class="fas fa-user"></i> </h1>
    <hr class="star-light">
    <!-- ************************** Buscar Empleado ************************** -->
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

    <!-- ************************** Crear Empleado ************************** -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Empleado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="{{ url('#') }}">
                        <!--url traida de la webNombre -->
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="id_empresa" class="col-form-label"> <span style="color:red;">*</span>Empresa:</label>
                            <input type="text" class="form-control" name="empresa" id="id_empresa">
                        </div>
                        <div class="form-group">
                            <label for="nombre_empleado" class="col-form-label"> <span style="color:red;">*</span>Nombres:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre_empleado">
                        </div>
                        <div class="form-group">
                            <label for="apellido_empleado" class="col-form-label"> <span style="color:red;">*</span>Apellido:</label>
                            <input type="text" class="form-control" name="apellido" id="apellido_empleado">
                        </div>
                        <div class="form-group">
                            <label for="direccion_empleado" class="col-form-label"> <span style="color:red;">*</span>Direccion:</label>
                            <input type="text" class="form-control" name="direccion" id="direccion_empleado">
                        </div>
                        <div class="form-group">
                            <label for="telefono_empleado" class="col-form-label"> <span style="color:red;">*</span>Telefono:</label>
                            <input type="text" class="form-control" name="telefono" id="telefono_empleado    ">
                        </div>
                        <div class="form-group">
                            <label for="celular_empleado" class="col-form-label"> <span style="color:red;">*</span>Celular:</label>
                            <input type="text" class="form-control" name="celular" id="celular_empleado    ">
                        </div>
                        <div class="form-group">
                            <label for="email_empleado" class="col-form-label"> <span style="color:red;">*</span>Email:</label>
                            <input type="email" class="form-control" name="email" id="email_empleado    ">
                        </div>
                        <div class="form-group">
                            <label for="edad" class="col-form-label"> <span style="color:red;">*</span>Edad:</label>
                            <input type="text" class="form-control" name="edad" id="edad">
                        </div>
                         <div class="form-group">
                            <label for="DPI" class="col-form-label"><span style="color:red;">*</span>DPI</label>
                            <input type="text" class="form-control" name="dpi" id="DPI">
                        </div>
                        <div class="form-group">
                            <label for="fecha_contrato" class="col-form-label"><span style="color:red;">*</span>Fecha contrato</label>
                            <input type="date" class="form-control" name="fcontrato" id="fecha_contrato">
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

    <!-- ************************** Tabla Empleado ************************** -->
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Empresa</th>
                    <th scope="col">Nombres </th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Email</th>
                    <th scope="col">Edad</th>
                    <th scope="col">DPI</th>
                    <th scope="col">Fecha  contrato</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a class="btn btn-success" href='' role="button">Modificar</a></td>
                    <td><a class="btn btn-danger" onclick="return confirm('¿Está seguro que deseas eliminar este empleado?');" href='' role="button">Eliminar</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- ************************** Boton Empleado ************************** -->
    <div class="row">
        <div class="col-md-3 col-ms-12 ">
            <!-- agregar margin-top: 0.5em; en sm y md -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Agregar Empleado <i class="fas fa-plus"></i></button>
        </div>
    </div>

</div>

@endsection