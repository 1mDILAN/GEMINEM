<form method="POST" action="{{ route('organizadores.update', $organizador->id) }}">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="{{ $organizador->nombre }}" required><br><br>
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" value="{{ $organizador->apellido }}" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $organizador->email }}" required><br><br>
    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" value="{{ $organizador->telefono }}" required><br><br>
    <button type="submit">Actualizar Artista</button>
</form>
