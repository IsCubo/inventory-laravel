<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalles del Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Detalles del Producto</h1>
                        <a href="{{ route('products.index') }}" class="bg-gray-200 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-300">Volver a la Lista</a>
                    </div>

                    <div class="border-t border-gray-200 dark:border-gray-700 pt-6">
                        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Nombre</dt>
                                <dd class="mt-1 text-lg text-gray-900 dark:text-white">{{ $product->name }}</dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Precio</dt>
                                <dd class="mt-1 text-lg text-gray-900 dark:text-white">${{ number_format($product->price, 2) }}</dd>
                            </div>
                            <div class="sm:col-span-2">
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Descripción</dt>
                                <dd class="mt-1 text-lg text-gray-900 dark:text-white">{{ $product->description }}</dd>
                            </div>
                        </dl>
                    </div>

                    <div class="mt-8 flex justify-end space-x-4">
                        <a href="{{ route('products.edit', $product->id) }}" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Editar</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este producto?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
