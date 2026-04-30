@extends('layout.app')

@section('title')
Categorías Creadas
@endsection

@section('content')

<div class="flex justify-between items-center">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">
        Lista de Categorías creadas
    </h2>
    <a class="bg-blue-500 text-white rounded-sm p-2" target="_blank" href="{{ route('category.create') }}">Crear Categoría</a>
</div>

<div class="overflow-x-auto rounded-2xl shadow-md border border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Id</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Title</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Slug</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($categories as $category)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $category->id }}</td>
                            <td class="px-4 py-3 text-sm font-medium text-gray-900">{{ $category->title }}</td>
                            <td class="px-4 py-3 text-sm text-gray-600">{{ $category->slug }}</td>
                            <td>
                                <a class="text-blue-500 text-sm" href="{{ route('category.show', $category) }}">Ver</a>
                                <a class="text-blue-500 text-sm" href="{{ route('category.edit', $category) }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $categories->links() }}
        </div>

@endsection