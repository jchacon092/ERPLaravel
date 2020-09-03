@extends('layout.layout')  @section('title','Home') @section('link')
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/app.css">
<link rel="stylesheet" href="css/fontawesome-all.min.css"> @endsection @section('content')
<div class="container">
    <h1 class="text-uppercase mb-0 text-center">CaladiumERP  <i class="fas fa-leaf"></i> 2018 </h1>
    <hr class="star-light">
    <h2 class="font-weight-light mb-0 text-justify">Sistemas de planificación de recursos empresariales e inventario</h2>
    <hr class="star-light">
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <h3 class="text-center">Inventario <i class="fas fa-th-list"></i></h3>
            <p class="text-justify"> El sistema maneja inventario de productos normales y productos perecederos. Además, las funciones principales de un inventario.
            </p>
        </div>
        <div class="col-sm-3">
            <h3 class="text-center">Cuentas <i class="far fa-money-bill-alt"></i></h3>
            <p class="text-justify"> Trabaja cuentas por cobrar y por pagar, además, de deudas acumuladas, moras, devoluciones y más
            </p>
        </div>
        <div class="col-sm-3">
            <h3 class="text-center">Reportes <i class="far fa-file-alt"></i></h3>
            <p class="text-justify"> Los reportes presentes son los principales trabajados en un sistema de tipo ERP y están enfocados a la toma de decisiones
            </p>
        </div>
        <div class="col-sm-3">
            <h3 class="text-center">Libre <i class="fab fa-github"></i></h3>
            <p class="text-justify"> El desarrollo de este software libre esta aprovado bajo la marca Methriks y los desarrolladores Joaquin Chacón, Edwin Sac y Alexander Pisquiy. <a href="#">Ir al repositorio</a>
            </p>
        </div>
    </div>
</div>
@endsection