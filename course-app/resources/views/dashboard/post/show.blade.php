@extends('layout.app')

@section('title')
    Página del post {{ $post->id }}
@endsection

@section('content')
    <div class="max-w-4xl mx-auto p-6">
        <div class="bg-white shadow-lg rounded-2xl p-8 border border-gray-200">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">
                {{ $post->title }}
            </h1>

            <p class="text-sm text-gray-500 mb-6">
                Slug: {{ $post->slug }}
            </p>

            <div class="mb-6">
                <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-700">
                    {{ $post->posted }}
                </span>

                <span class="inline-block ml-2 px-3 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-700">
                    {{ $post->category->title }}
                </span>
            </div>

            <div class="mb-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-2">
                    Descripción
                </h2>
                <p class="text-gray-600 leading-relaxed">
                    {{ $post->description }}
                </p>
            </div>

            <div class="mb-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-2">
                    Contenido
                </h2>
                <p class="text-gray-700 leading-relaxed">
                    {{ $post->content }}
                </p>
            </div>

            
                <div class="mb-6">
                    <h2 class="text-lg font-semibold text-gray-700 mb-2">
                        Imagen
                    </h2>
                    @if($post->image)
                    <img 
                        src="{{ asset('uploads/posts/' . $post->image) }}" 
                        alt="{{ $post->title }}"
                        class="rounded-xl shadow-md object-cover w-50 h-50"
                    >
                    @else 
                    <p>Sin imagen</p>
                    @endif
                </div>

            <div class="text-sm text-gray-400 mt-6">
                ID del Post: {{ $post->id }}
            </div>
        </div>
    </div>
@endsection
