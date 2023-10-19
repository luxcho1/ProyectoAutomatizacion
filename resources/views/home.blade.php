@extends('layouts.app')
@section('content')
<head>
</head>

<body>
  <h1 style="text-align: center">Sistema de Gestión Taller Mecánico SERVIEXPRESS</h1>

  <div class="container">
    <img class="img-fluid" src="https://www.porschenorthscottsdale.com/static/brand-porsche/Service/porsche-service-header.jpg" alt=""> 
  </div>

  <div class="container text-center" style="margin-top: 3%; margin-bottom: 3%;">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-body" style="background-color: rgb(54, 118, 148);">
            <h2 class="card-title" style="color: aliceblue">Panel Clientes</h2>
            <div class="d-grid gap-2 col-6 mx-auto">
              <a class="btn btn-primary" href="{{ url('/cliente/create') }}">Ingresar Clientes</a>
              <a class="btn btn-primary" href="{{ url('/cliente') }}">Mostrar Clientes</a>
              <a class="btn btn-warning" href="{{ url('/cliente/editar') }}">Editar Clientes</a>
              <a class="btn btn-danger" href="{{ url('/cliente/eliminar') }}">Eliminar Clientes</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" >
          <div class="card-body" style="background-color: rgb(54, 118, 148);">
            <h2 class="card-title" style="color: aliceblue">Panel Registro Horas</h2>
            <div class="d-grid gap-2 col-6 mx-auto">
              <a class="btn btn-primary" href="{{ url('/registro/create') }}">Ingresar Registros de horas</a>
              <a class="btn btn-primary" href="{{ url('/registro') }}">Mostrar Registros de horas</a>
              <a class="btn btn-warning" href="{{ url('/registro/editar') }}">Editar Registros de horas</a>
              <a class="btn btn-danger" href="{{ url('/registro/eliminar') }}">Eliminar Registros de horas</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="text-align: center; margin-top: 4%" >
    <div class="row">
      <div class="col">
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary btn-lg">Contactanos</button>
      </div>
      <div class="col">
      </div>
    </div>
    <div class="row" style="">
      <div class="container">
        <img src="https://www.tiendawebchile.cl/wp-content/uploads/2017/09/logo-webpay-plus-3-copy.png" alt="" style="width: 500px; height: auto;" class="mx-auto d-block">
      </div>
    </div>
  </div>
</body>
@endsection


