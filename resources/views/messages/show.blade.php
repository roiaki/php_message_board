@extends('layouts.app')

@section('content')

    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th style="width:25%">id</th>
            <td>{{ $message->id }}</td>
        </tr>
        
        <tr>
            <th style="width:25%">タイトル</th>
            <td>{{ $message->title }}</td>
        </tr>
        
        <tr>
            <th style="width:25%">メッセージ</th>
            <td>{{ $message->content }}</td>
        </tr>
    </table>

    {{--// 横並び--}}
    <div class="d-flex justify-content-start">
        
        {!! link_to_route('messages.edit', 'このメッセージを編集', ['id' => $message->id], ['class' => 'btn btn-secondary']) !!}
    
        <div class="ml-3">
            {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
                {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
        
    </div>

@endsection
