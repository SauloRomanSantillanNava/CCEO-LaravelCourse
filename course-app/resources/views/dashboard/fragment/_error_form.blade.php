@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="text-red-500 font-semibold text-sm text-right">
            {{ $error }}
        </div>
    @endforeach
@endif