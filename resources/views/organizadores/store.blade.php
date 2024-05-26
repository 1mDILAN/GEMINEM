<form method="POST" action="{{ route('organizadores.store') }}">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" required><br><br>
    <button type="submit">Crear Artista</button>
</form>
