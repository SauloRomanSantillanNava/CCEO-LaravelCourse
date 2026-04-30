@extends('layout.app')

@section('title')
    Posts Creados
@endsection

@section('content')
    <div class="p-6">
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                Lista de Posts creados
            </h2>
            <a class="bg-blue-500 text-white rounded-sm p-2" target="_blank" href="{{ route('post.create') }}">Crear Post</a>
        </div>

        <div class="overflow-x-auto rounded-2xl shadow-md border border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Id</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Title</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Slug</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Description</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Content</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Image</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Posted</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Categoría</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Opciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($posts as $post)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $post->id }}</td>
                            <td class="px-4 py-3 text-sm font-medium text-gray-900">{{ $post->title }}</td>
                            <td class="px-4 py-3 text-sm text-gray-600">{{ $post->slug }}</td>
                            <td class="px-4 py-3 text-sm text-gray-600">{{ $post->description }}</td>
                            <td class="px-4 py-3 text-sm text-gray-600">
                                {{ Str::limit($post->content, 50) }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-600">{{ $post->image }}</td>
                            <td class="px-4 py-3">
                                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-700">
                                    {{ $post->posted }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-700">
                                {{ $post->category->title }}
                            </td>
                            <td>
                                <a class="text-blue-500 text-sm" href="{{ route('post.show', $post) }}">Ver</a>
                                <a class="text-blue-500 text-sm" href="{{ route('post.edit', $post )}}">Editar</a>
                                <form action="{{ route('post.destroy', $post )}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-blue-500 text-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $posts->links() }}
        </div>
    </div>
@endsection
