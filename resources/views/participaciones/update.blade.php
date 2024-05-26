<form method="POST" action="{{ route('participaciones.update', $participacion->id) }}">
    @csrf
    @method('PUT')
    <label for="concierto_id">Concierto:</label>
    <select id="concierto_id" name="concierto_id" required>
        @foreach($conciertos as $conciertos)
            <option value="{{ $conciertos->id }}" @if($conciertos->id == $participacion->concierto_id) selected @endif>{{ $conciertos->nombre }}</option>
        @endforeach
    </select>
    <label for="organizador_id">Organizador:</label>
    <select id="organizador_id" name="organizador_id" required>
        @foreach($organizadores as $organizador)
            <option value="{{ $organizador->id }}" @if($organizador->id == $participacion->organizador_id) selected @endif>{{ $organizador->nombre }}</option>
        @endforeach
    </select>
    <label for="rol">Rol:</label>
    <input type="text" id="rol" name="rol" value="{{ $participacion->rol }}" required>
    <button type="submit">Actualizar Entrada</button>
</form>
