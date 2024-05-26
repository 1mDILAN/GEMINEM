<form method="POST" action="{{ route('locaciones.store') }}">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>
    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" required><br><br>
    <label for="capacidad">Capacidad:</label>
    <input type="number" id="capacidad" name="capacidad" required><br><br>
    <button type="submit">Crear Locación</button>
</form>
