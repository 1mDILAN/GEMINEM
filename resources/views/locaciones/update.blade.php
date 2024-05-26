<form method="POST" action="{{ route('locaciones.update', $locacion->id) }}">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="{{ $locacion->nombre }}" required><br><br>
    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" value="{{ $locacion->direccion }}" required><br><br>
    <label for="capacidad">Capacidad:</label>
    <input type="number" id="capacidad" name="capacidad" value="{{ $locacion->capacidad }}" required><br><br>
    <button type="submit">Actualizar Locación</button>
</form>
