@if ($errors->has('content'))
    @foreach($errors->get('content') as $error)
    
    {{-- 上に0.50remのマージン --}}
    <div class="mt-2">
        <p class="alert alert-danger" role="alert">{{ $error }}</p>
    </div>
    @endforeach
@endif