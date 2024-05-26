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
                    <a href="{{ route('locaciones.create') }}" class="btn btn-outline-primary w-full">Crear Locación</a>
                    <table class="table table-hover table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID Locación</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Capacidad</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($locaciones as $locacion)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $locacion->id }}</td>
                                    <td>{{ $locacion->nombre }}</td>
                                    <td>{{ $locacion->direccion }}</td>
                                    <td>{{ $locacion->capacidad }}</td>
                                    <td>
                                        <div class="btn-group w-full">
                                            <a href="{{ route('locaciones.edit', $locacion->id) }}"
                                                class="btn btn-outline-warning">Editar</a>
                                            <form method="POST"
                                                action="{{ route('locaciones.destroy', $locacion->id) }}"
                                                style="display: none;" id="delete-form-{{ $locacion->id }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <a href="#" class="btn btn-outline-danger"
                                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $locacion->id }}').submit();">
                                                Eliminar
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No se encontraron locaciones.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
