@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Conciertos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('conciertos.create') }}" class="btn btn-outline-primary w-full">Crear Concierto</a>
                    <table class="table table-hover table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID Concierto</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Fecha de inicio</th>
                                <th scope="col">Fecha de fin</th>
                                <th scope="col">Ubicación</th>
                                <th scope="col">Total de Entradas</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($conciertos as $concierto)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $concierto->id }}</td>
                                    <td>{{ $concierto->nombre }}</td>
                                    <td>{{ $concierto->descripcion }}</td>
                                    <td>{{ $concierto->fecha_inicio }}</td>
                                    <td>{{ $concierto->fecha_fin }}</td>
                                    <td>{{ $concierto->ubicacion }}</td>
                                    <td>{{ $concierto->total_entradas }}</td>
                                    <td>
                                        <div class="btn-group w-full">
                                            <a href="{{ route('conciertos.edit', $concierto->id) }}"
                                                class="btn btn-outline-warning">Editar</a>
                                            <form method="POST"
                                                action="{{ route('conciertos.destroy', $concierto->id) }}"
                                                style="display: none;" id="delete-form-{{ $concierto->id }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <a href="#" class="btn btn-outline-danger"
                                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $concierto->id }}').submit();">
                                                Eliminar
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">No se encontraron conciertos.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
