@extends('layouts.app')
@section('content')
<head>
    <h1 style="text-align: center">Mostrar clientes</h1>
    <a class="btn btn-primary" href="{{ url('/cliente/create') }}">Ingresar Cliente</a>
     <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>RUT</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Comuna</th>
                    <th>Telefono</th>
                    <th>Nombre Usuario</th>
                    <th>Contraseña</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cliente as $clientes)
                    <tr>
                        <td>{{ $clientes->rut }}</td>
                        <td>{{ $clientes->nombre }}</td>
                        <td>{{ $clientes->apellido }}</td>
                        <td>{{ $clientes->direccion }}</td>
                        <td>{{ $clientes->comuna }}</td>
                        <td>{{ $clientes->telefono }}</td>
                        <td>{{ $clientes->nombre_usuario }}</td>
                        <td>{{ $clientes->contraseña }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ url('/') }}">Regresar</a>
     </div>
</div>
</head>
@endsection