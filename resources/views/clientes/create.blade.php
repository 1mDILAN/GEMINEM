<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('clientes.store') }}" class="row g-3">
                        @csrf
                        <label for="nombre" class="col-md-2 col-form-label">Nombre:</label>
                        <div class="col-md-10">
                            <input type="text" id="nombre" name="nombre" class="form-control" required>
                        </div>
                        <label for="apellido" class="col-md-2 col-form-label">Apellido:</label>
                        <div class="col-md-10">
                            <input type="text" id="apellido" name="apellido" class="form-control" required>
                        </div>
                        <label for="email" class="col-md-2 col-form-label">Email:</label>
                        <div class="col-md-10">
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <label for="telefono" class="col-md-2 col-form-label">Teléfono:</label>
                        <div class="col-md-10">
                            <input type="text" id="telefono" name="telefono" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-primary w-full">Crear Cliente</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
