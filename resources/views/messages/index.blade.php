@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

    @if (count($messages) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                <tr>
                    <!-- 
                       第1引数：ルーティング名、
                    // 第2引数：リンクにしたい文字列、
                    // 第3引数：URL内のパラメータに代入したい値を配列形式で指定、
                    // 第4引数：第4引数：HTML タグの属性を配列形式で指定
                    -->
                    <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}</td>
                    <td>{{ $message->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

   {!! link_to_route('messages.create', '新規メッセージの投稿', [], ['class' => 'btn btn-primary']) !!}
   
@endsection