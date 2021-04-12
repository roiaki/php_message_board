@extends('layouts.app')

@section('content')
    
    {{-- エラーメッセージ表示
    @if (count($errors) > 0)
        <ul class="alert alert-danger" role="alert">
            @foreach ($errors->get('content') as $error)
                <li class="ml-4">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    --}}   
    
    <h1>メッセージ新規作成ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($message, ['route' => 'messages.store']) !!}
        
        
                <div class="form-group">
                    {!! Form::label('title', 'タイトル:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                        
                    @include('commons.error_title')
                    
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    
                    @include('commons.error_content')   
                    
                </div>
        
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
        
@endsection