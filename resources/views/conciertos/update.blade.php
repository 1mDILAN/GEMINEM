<form method="POST" action="{{ route('conciertos.update', $concierto->id) }}">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="{{ $concierto->nombre }}" required><br><br>
    <label for="descripcion">Descripción:</label>
    <input type="text" id="descripcion" name="descripcion" value="{{ $concierto->descripcion }}" required><br><br>
    <label for="fecha_inicio">Fecha de Inicio:</label>
    <input type="date" id="fecha_inicio" name="fecha_inicio" value="{{ $concierto->fecha_inicio }}" required><br><br>
    <label for="fecha_fin">Fecha de Fin:</label>
    <input type="date" id="fecha_fin" name="fecha_fin" value="{{ $concierto->fecha_fin }}" required><br><br>
    <label for="ubicacion">Ubicación:</label>
    <input type="text" id="ubicacion" name="ubicacion" value="{{ $concierto->ubicacion }}" required><br><br>
    <label for="total_entradas">Total de Entradas:</label>
    <input type="number" id="total_entradas" name="total_entradas" value="{{ $concierto->total_entradas }}" required><br><br>
    <button type="submit">Actualizar Concierto</button>
</form>
