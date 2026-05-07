@extends('layout.app')

@section('title')
Crear nueva categoria
@endsection

@section('content')
<h2 class="text-center text-4xl font-extrabold mb-5">Crear una nueva categoría</h2>
<form 
    action="{{ route('category.store')}}" 
    method="POST"     
    class="space-y-3 w-200 mx-auto bg-white p-8 rounded-lg shadow-md"
>
    @include('dashboard.category._form')
</form>
@endsection