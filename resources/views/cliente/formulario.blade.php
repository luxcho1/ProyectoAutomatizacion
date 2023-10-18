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
        <input class="form-control" type="text" name="rut" value="{{ isset($cliente->rut)?$cliente->rut:old('rut') }}" id="rut">        
    </div>
    <br>

    <div class="form-group">
        <label for="nombre">Nombre: </label>
        <input class="form-control" type="text" name="nombre" value="{{ isset($cliente->nombre)?$cliente->nombre:old('nombre') }}" id="nombre">        
    </div>
    <br>

    <div class="form-group">
        <label for="apellido">Apellido: </label>
        <input class="form-control" type="text" name="apellido" value="{{ isset($cliente->apellido)?$cliente->apellido:old('apellido') }}" id="apellido">        
    </div>
    <br>

    <div class="form-group">
        <label for="direccion">Direccion: </label>
        <input class="form-control" type="text" name="direccion" value="{{ isset($cliente->direccion)?$cliente->direccion:old('direccion') }}" id="direccion">        
    </div>
    <br>

    <div class="form-group">
        <label for="comuna">Comuna: </label>
        <input class="form-control" type="text" name="comuna" value="{{ isset($cliente->comuna)?$cliente->comuna:old('comuna') }}" id="comuna">        
    </div>
    <br>

    <div class="form-group">
        <label for="telefono">Telefono: </label>
        <input class="form-control" type="text" name="telefono" value="{{ isset($cliente->telefono)?$cliente->telefono:old('telefono') }}" id="telefono">        
    </div>
    <br>

    <div class="form-group">
        <label for="nombre_usuario">Nombre Usuario: </label>
        <input class="form-control" type="text" name="nombre_usuario" value="{{ isset($cliente->nombre_usuario)?$cliente->nombre_usuario:old('nombre_usuario') }}" id="nombre_usuario">        
    </div>
    <br>

    <div class="form-group">
        <label for="contraseña">Contraseña: </label>
        <input class="form-control" type="text" name="contraseña" value="{{ isset($cliente->contraseña)?$cliente->contraseña:old('contraseña') }}" id="contraseña">        
    </div>
    <br>

    <div>
        <input class="btn btn-success" type="submit" value="{{ $modo }} Cliente">
            <a class="btn btn-primary" href="{{ url('/') }}">Regresar</a>
    </div>