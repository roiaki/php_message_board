<?php

// デフォルトのコメント部分は省略

Route::get('/', 'MessagesController@index');

Route::resource('messages', 'MessagesController');