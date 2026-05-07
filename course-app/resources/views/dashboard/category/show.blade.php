@extends('layout.app')

@section('title')
    Página del post {{ $category->id }}
@endsection

@section('content')
    <div class="max-w-4xl mx-auto p-6">
        <div class="bg-white shadow-lg rounded-2xl p-8 border border-gray-200">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">
                {{ $category->title }}
            </h1>

            <p class="text-sm text-gray-500 mb-6">
                Slug: {{ $category->slug }}
            </p>

            <div class="text-sm text-gray-400 mt-6">
                ID de la categoría: {{ $category->id }}
            </div>
        </div>
    </div>
@endsection
