<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Nuevo Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                {{-- Aquí va el contenido de tu formulario --}}
                                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Crear Nuevo Producto</h1>

                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Nombre</label>
                            <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                            @error('name')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Descripción</label>
                            <textarea id="description" name="description" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="price" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Precio</label>
                            <input type="number" id="price" name="price" step="0.01" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('price') border-red-500 @enderror" value="{{ old('price') }}">
                            @error('price')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end space-x-4">
                            <a href="{{ route('products.index') }}" class="bg-gray-200 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-300 dark:bg-gray-600 dark:text-gray-200 dark:hover:bg-gray-500">Cancelar</a>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Guardar Producto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>