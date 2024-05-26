<form method="POST" action="{{ route('clientes.update', $cliente->id) }}">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="{{ $cliente->nombre }}" required><br><br>
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" value="{{ $cliente->apellido }}" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $cliente->email }}" required><br><br>
    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" value="{{ $cliente->telefono }}" required><br><br>
    <button type="submit">Actualizar Cliente</button>
</form>
