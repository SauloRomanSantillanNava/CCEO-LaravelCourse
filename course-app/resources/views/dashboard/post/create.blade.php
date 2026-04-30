@extends('layout.app')

@section('title')
Crear nuevo post
@endsection

@section('content')
<h2 class="text-center text-4xl font-extrabold mb-5">Crear un nuevo post</h2>
<form 
    action="{{ route('post.store') }}" 
    method="POST"
    class="space-y-3 w-200 mx-auto bg-white p-8 rounded-lg shadow-md"
>
    @include('dashboard.post._form')
</form>
@endsection