@extends('layouts.app')
@section('content')
<head>
</head>

<body>
  <h1 style="text-align: center">Sistema de Gestión Taller Mecánico SERVIEXPRESS</h1>

  <div class="container">
    <img class="img-fluid" src="https://www.porschenorthscottsdale.com/static/brand-porsche/Service/porsche-service-header.jpg" alt=""> 
  </div>

  <div class="container text-center">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 35rem;">
          <div class="card-body">
            <h2 class="card-title">Panel Clientes</h2>
            <div class="d-grid gap-2 col-6 mx-auto">
              <a class="btn btn-primary" href="{{ url('/cliente') }}">Mostrar Cliente</a>
              <a class="btn btn-primary" href="{{ url('/cliente/create') }}">Ingresar Cliente</a>
              <a class="btn btn-warning" href="{{ url('/cliente/editar') }}">Editar Cliente</a>
              <a class="btn btn-danger" href="{{ url('/cliente/eliminar') }}">Eliminar Cliente</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 35rem;">
          <div class="card-body">
            <h2 class="card-title">Panel Registro Horas</h2>
            <div class="d-grid gap-2 col-6 mx-auto">
              <a class="btn btn-primary" href="{{ url('/cliente') }}">Mostrar Cliente</a>
              <button class="btn btn-primary" type="button">Añadir Reserva</button>
              <button class="btn btn-warning" type="button">Editar Reserva</button>
              <button class="btn btn-danger" type="button">Eliminar Reserva</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

</body>
@endsection








    


