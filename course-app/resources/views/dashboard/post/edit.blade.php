@extends('layout.app')

@section('title')
    Editar Post
@endsection

@section('content')
<div>
    <h1 class="font-bold text-2xl mb-10">Editar post</h1>

    <form 
        action="{{ route('post.update', $post->id) }}" 
        method="POST"
        enctype="multipart/form-data"
        class="space-y-3 w-200 mx-auto bg-white p-8 rounded-lg shadow-md"
    >
        @method('PUT')
        @include('dashboard.post._form', ['task' => 'edit'])
    </form>
</div>
@endsection
