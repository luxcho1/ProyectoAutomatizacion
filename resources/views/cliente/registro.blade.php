@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/cliente.css') }}">

<body>
  <h1 style="text-align: center">Registro Clientes</h1>
    <form action="{{ url('/cliente') }}" method="post">
    @csrf
        <div class="container">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach( $errors->all() as $error )
                            <li>{{ $error }}</li> 
                        @endforeach
                    </ul>
                </div>
            @endif


            
            <div class="form-group">
                <label for="rut">RUT: </label>
                <input class="form-control" type="text" name="rut" id="rut">        
            </div>
            <br>

            <div class="form-group">
                <label for="nombre">Nombre: </label>
                <input class="form-control" type="text" name="nombre" id="nombre">        
            </div>
            <br>

            <div class="form-group">
                <label for="apellido">Apellido: </label>
                <input class="form-control" type="text" name="apellido" id="apellido">        
            </div>
            <br>

            <div class="form-group">
                <label for="direccion">Direccion: </label>
                <input class="form-control" type="text" name="direccion" id="direccion">        
            </div>
            <br>

            <div class="form-group">
                <label for="comuna">Comuna: </label>
                <input class="form-control" type="text" name="comuna" id="comuna">        
            </div>
            <br>

            <div class="form-group">
                <label for="telefono">Telefono: </label>
                <input class="form-control" type="text" name="telefono" id="telefono">        
            </div>
            <br>

            <div class="form-group">
                <label for="nombre_usuario">Nombre Usuario: </label>
                <input class="form-control" type="text" name="nombre_usuario" id="nombre_usuario">        
            </div>
            <br>

            <div class="form-group">
                <label for="contraseña">Contraseña: </label>
                <input class="form-control" type="text" name="contraseña" id="contraseña">        
            </div>
            <br>
            
            <div>
                    <input class="btn btn-success" type="submit" value="Ingresar">
                    <a class="btn btn-primary" href="{{ url('/') }}">Regresar</a>
            </div>
        </div>
    </form>
</body>
@endsection








