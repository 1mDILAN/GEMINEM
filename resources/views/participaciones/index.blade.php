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
            {{ __('Entradas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('participaciones.create') }}" class="btn btn-outline-primary w-full">Crear Entrada</a>
                    <table class="table table-hover table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID Entrada</th>
                                <th scope="col">Concierto ID</th>
                                <th scope="col">Artista ID</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($participaciones as $participacion)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $participacion->id }}</td>
                                    <td>{{ $participacion->concierto_id }}</td>
                                    <td>{{ $participacion->organizador_id }}</td>
                                    <td>{{ $participacion->rol }}</td>
                                    <td>
                                        <div class="btn-group w-full">
                                            <a href="{{ route('participaciones.edit', $participacion->id) }}"
                                                class="btn btn-outline-warning">Editar</a>
                                            <form method="POST"
                                                action="{{ route('participaciones.destroy', $participacion->id) }}"
                                                style="display: none;" id="delete-form-{{ $participacion->id }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <a href="#" class="btn btn-outline-danger"
                                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $participacion->id }}').submit();">
                                                Eliminar
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No se encontraron entradas.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
