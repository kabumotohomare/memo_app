<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
});

//ルーティングの順番は固定ページが先、パラメーターつきページが後
//一覧ページ
Volt::route('/memos/', 'memos.index')->name('memos.index');

//新規作成ページ
Volt::route('/memos/create', 'memos.create')->name('memos.create');

//詳細ページ
Volt::route('/memos/{memo}', 'memos.show')->name('memos.show');
