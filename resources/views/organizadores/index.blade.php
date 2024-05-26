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
            {{ __('Artistas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('organizadores.create') }}" class="btn btn-outline-primary w-full">Crear Artista</a>
                    <table class="table table-hover table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID Artista</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Email</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($organizadores as $organizador)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $organizador->id }}</td>
                                    <td>{{ $organizador->nombre }}</td>
                                    <td>{{ $organizador->apellido }}</td>
                                    <td>{{ $organizador->email }}</td>
                                    <td>{{ $organizador->telefono }}</td>
                                    <td>
                                        <div class="btn-group w-full">
                                            <a href="{{ route('organizadores.edit', $organizador->id) }}"
                                                class="btn btn-outline-warning">Editar</a>
                                            <form method="POST"
                                                action="{{ route('organizadores.destroy', $organizador->id) }}"
                                                style="display: none;" id="delete-form-{{ $organizador->id }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <a href="#" class="btn btn-outline-danger"
                                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $organizador->id }}').submit();">
                                                Eliminar
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">No se encontraron artistas.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
