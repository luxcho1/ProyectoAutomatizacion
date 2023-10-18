@extends('layouts.app')
@section('content')
<head>
    <div class="container">
        <h1 style="text-align: center">Eliminar Clientes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cliente as $clientes)
                    <tr>
                        <td>{{ $clientes->nombre }}</td>
                        <td>{{ $clientes->apellido }}</td>

                        <td><form action="{{ url('/cliente/'.$clientes->id) }}" class="d-inline" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                        </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ url('/') }}">Regresar</a>
    </div>
</head>
@endsection