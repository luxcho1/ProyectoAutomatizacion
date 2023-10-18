@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/cliente.css') }}">

<body>
  <h1 style="text-align: center">Registro Clientes</h1>

  <div class="container">
    <h1>Formulario de creacion de producto</h1>
    
    <form action="{{ url('/cliente') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('cliente.formulario',['modo'=>'Ingresar'])
    </form>
    </div>
</body>
@endsection








