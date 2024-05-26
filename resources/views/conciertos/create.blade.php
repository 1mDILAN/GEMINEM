<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Concierto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('conciertos.store') }}" class="row g-3">
                        @csrf
                        <label for="nombre" class="col-md-2 col-form-label">Nombre:</label>
                        <div class="col-md-10">
                            <input type="text" id="nombre" name="nombre" class="form-control" required>
                        </div>
                        <label for="descripcion" class="col-md-2 col-form-label">Descripción:</label>
                        <div class="col-md-10">
                            <textarea id="descripcion" name="descripcion" class="form-control" required></textarea>
                        </div>
                        <label for="fecha_inicio" class="col-md-2 col-form-label">Fecha de Inicio:</label>
                        <div class="col-md-10">
                            <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control" required>
                        </div>
                        <label for="fecha_fin" class="col-md-2 col-form-label">Fecha de Fin:</label>
                        <div class="col-md-10">
                            <input type="date" id="fecha_fin" name="fecha_fin" class="form-control" required>
                        </div>
                        <label for="ubicacion" class="col-md-2 col-form-label">Ubicación:</label>
                        <div class="col-md-10">
                            <input type="text" id="ubicacion" name="ubicacion" class="form-control" required>
                        </div>
                        <label for="total_entradas" class="col-md-2 col-form-label">Total de Entradas:</label>
                        <div class="col-md-10">
                            <input type="number" id="total_entradas" name="total_entradas" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-primary w-full">Crear Concierto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
