<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>memo show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <p><a href={{ route('memos.index') }}>戻る</a></p>
    <h1>{{ $memo->title }}</h1>
    <P>{!! nl2br(e($memo->body)) !!}</P>
    <div class="button-group">
        <button onclick='location.href="{{ route('memos.edit', $memo) }}"'>編集する</button>

        <form action="{{ route('memos.destroy', $memo) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">

        {{-- onclickでメッセージ出るのはHTMLに元からある機能 --}}

        </form>
    </div>
</body>

</html>
