<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Artista') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('organizadores.update', $organizador->id) }}" class="row g-3">
                        @csrf
                        @method('PUT')
                        <label for="nombre" class="col-md-2 col-form-label">Nombre:</label>
                        <div class="col-md-10">
                            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $organizador->nombre }}" required>
                        </div>
                        <label for="apellido" class="col-md-2 col-form-label">Apellido:</label>
                        <div class="col-md-10">
                            <input type="text" id="apellido" name="apellido" class="form-control" value="{{ $organizador->apellido }}" required>
                        </div>
                        <label for="email" class="col-md-2 col-form-label">Email:</label>
                        <div class="col-md-10">
                            <input type="email" id="email" name="email" class="form-control" value="{{ $organizador->email }}" required>
                        </div>
                        <label for="telefono" class="col-md-2 col-form-label">Teléfono:</label>
                        <div class="col-md-10">
                            <input type="text" id="telefono" name="telefono" class="form-control" value="{{ $organizador->telefono }}" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-primary w-full">Actualizar Artista</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
