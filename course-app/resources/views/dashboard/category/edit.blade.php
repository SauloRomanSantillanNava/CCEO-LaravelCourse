@extends('layout.app')

@section('title')
    Editar Categoría
@endsection

@section('content')
<div>
    <h1 class="font-bold text-2xl mb-10">Editar categoría</h1>

    <form 
        action="{{ route('category.update', $category->id) }}" 
        method="POST"
        enctype="multipart/form-data"
        class="space-y-3 w-200 mx-auto bg-white p-8 rounded-lg shadow-md"
    >
        @method('PUT')
        @include('dashboard.category._form', ['task' => 'edit'])
    </form>
</div>
@endsection
