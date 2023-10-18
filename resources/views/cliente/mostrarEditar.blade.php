@extends('layouts.app')
@section('content')

<head>
    <div class="container">
        <h1 style="text-align: center">Editar Clientes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>RUT</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cliente as $clientes)
                    <tr>
                        <td>{{ $clientes->rut }}</td>
                        <td>{{ $clientes->nombre }}</td>
                        <td>{{ $clientes->apellido }}</td>
                        <td><a href="{{ url('/cliente/'.$clientes->id.'/edit') }}" class="btn btn-warning">
                            Editar
                        </a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ url('/') }}">Regresar</a>
    </div>
</head>

@endsection