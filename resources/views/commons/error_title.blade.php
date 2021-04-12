{{-- タイトルエラー表 --}}
@if ($errors->has('title'))
    @foreach($errors->get('title') as $error)
    <div class="mt-2">
        <p class="alert alert-danger" role="alert">{{ $error }}</p>
    </div>
    @endforeach
@endif