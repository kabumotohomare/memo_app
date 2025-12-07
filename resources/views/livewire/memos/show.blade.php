<?php

use function Livewire\Volt\{state};
use App\Models\Memo;

//ルートモデルバインディング
state(['memo' => fn(Memo $memo) => $memo]);

//編集ページにリダイレクト
$edit = function () {
    return redirect()->route('memos.edit', $this->memo);
};

//デストロイの関数
$destroy = function () {
    $this->memo->delete();
    return redirect()->route('memos.index');
};
?>

<div>
    <p><a href={{ route('memos.index') }}>戻る</a></p>
    <h1>{{ $memo->title }}</h1>
    <p>{!! nl2br(e($memo->body)) !!}</p>
    {{-- 優先度プルダウンの結果 --}}
    <p><strong>優先度:</strong>{{ $memo->priority_text}}</p>

    <button wire:click="edit">編集する</button>
    <button wire:click="destroy" wire:confirm="本当に削除しますか？">削除する</button>
</div>
