<form method="POST" action="{{ route('participaciones.store') }}">
    @csrf
    <label for="concierto_id">ID del Concierto:</label>
    <input type="number" id="concierto_id" name="concierto_id" required><br><br>
    <label for="organizador_id">ID del Organizador:</label>
    <input type="number" id="organizador_id" name="organizador_id" required><br><br>
    <label for="rol">Rol:</label>
    <input type="text" id="rol" name="rol" required><br><br>
    <button type="submit">Crear Entrada</button>
</form>
