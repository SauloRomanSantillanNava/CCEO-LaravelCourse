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
        value="{{ old('title', $category->title) }}"
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
        value="{{ old('slug', $category->slug) }}"
        placeholder="Ingrese el slug"
    />
</div>

<input 
    class="bg-blue-700 hover:bg-blue-800 text-white w-full rounded-full shadow py-3 cursor-pointer" 
    type="submit" 
    value="{{ $category->slug ? 'Editar' : 'Crear' }}"
/>