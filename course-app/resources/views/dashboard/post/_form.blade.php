@csrf
@include('dashboard.fragment._error_form')

<div class="flex flex-col gap-1">
    <label class="font-semibold" for="title">Título</label>
    <input
        class="border border-gray-300 rounded-lg p-2"
        maxlength="500"
        type="text"
        name="title"
        id="title"
        value="{{ old('title', $post->title) }}"
        placeholder="Ingrese el título"
    />
</div>

<div class="flex flex-col gap-1">
    <label class="font-semibold" for="slug">Slug</label>
    <input
        class="border border-gray-300 rounded-lg p-2"
        maxlength="500"
        type="text"
        name="slug"
        id="slug"
        value="{{ old('slug', $post->slug) }}"
        placeholder="Ingrese el slug"
    />
</div>

<div class="flex flex-col gap-1">
    <label class="font-semibold" for="content">Contenido</label>
    <textarea
        class="border border-gray-300 rounded-lg p-2"
        name="content"
        id="content"
        rows="5"
    >{{ old('content', $post->content) }}</textarea>
</div>

<div class="flex flex-col gap-1">
    <label class="font-semibold">Categoría</label>
    <select 
        class="border border-gray-300 rounded-lg p-2" 
        name="category_id"
    >
        @foreach($categories as $id => $title )
            <option 
                value="{{ $id }}"
                {{ old('category_id', $post->category_id) == $id ? 'selected' : '' }}
            >
                {{ $title }}
            </option>
        @endforeach
    </select>
</div>

<div class="flex flex-col gap-1">
    <label class="font-semibold" for="description">Descripción</label>
    <textarea
        class="border border-gray-300 rounded-lg p-2"
        name="description"
        id="description"
        rows="5"
    >{{ old('description', $post->description) }}</textarea>
</div>

<div class="flex flex-col gap-1">
    <label class="font-semibold" for="posted">Publicado</label>
    <select 
        class="border border-gray-300 rounded-lg p-2" 
        name="posted" 
        id="posted"
    >
        <option 
            value="yes"
            {{ old('posted', $post->posted) == 'yes' ? 'selected' : '' }}
        >
            Sí
        </option>
        <option 
            value="no"
            {{ old('posted', $post->posted) == 'no' ? 'selected' : '' }}
        >
            No
        </option>
    </select>
</div>

@if( isset($task) && $task == 'edit') 
<label for="image">Imagen</label>
<input type="file" name="image" id="image" />
@endif

<input 
    class="bg-blue-700 hover:bg-blue-800 text-white w-full rounded-full shadow py-3 cursor-pointer" 
    type="submit" 
    value="{{ $post->slug ? 'Editar' : 'Crear' }}"
/>