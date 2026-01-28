<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Lista de Productos</h1>
                        <input
                            type="text"
                            id="search"
                            placeholder="Buscar..."
                            class="border border-gray-300 dark:border-gray-600 px-3 py-2 w-100 rounded-2xl pl-4 bg-gray-50 dark:bg-gray-700 text-gray-800 dark:text-gray-300">

                        <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Crear Producto</a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white dark:bg-gray-800" id="products-table">
                            <thead class="bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-300 uppercase text-sm leading-normal">
                                <tr>
                                    <th class="py-3 px-6 text-left">Nombre</th>
                                    <th class="py-3 px-6 text-left">Descripción</th>
                                    <th class="py-3 px-6 text-center">Precio</th>
                                    <th class="py-3 px-6 text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-gray-300 text-sm font-light">
                                @forelse ($products as $product)
                                <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $product->name }}</td>
                                    <td class="py-3 px-6 text-left">{{ Str::limit($product->description, 60) }}</td>
                                    <td class="py-3 px-6 text-center font-mono">${{ $product->price }}</td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center space-x-4">
                                            <a href="{{ route('products.show', $product->id) }}" class="text-blue-500 hover:text-blue-700"><x-iconpark-eyes class="w-5 h-5" /></a>
                                            <a href="{{ route('products.edit', $product->id) }}" class="text-green-500 hover:text-green-700"><x-bxs-edit class="w-5 h-5" /></a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este producto?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700 cursor-pointer"><x-bxs-trash class="w-5 h-5" /></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4">No hay productos registrados.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-6">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
