<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Time-Bank.create</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <!-- HTMLのコンテンツ -->
    <h1>新規画面</h1>
    <form action="/times" method="POST">
        @csrf
                
                <input type="text" name="time[title]" placeholder="資格の勉強">
                <input type="text" name="time[body]" placeholder="3">
                <span class="point-text">h</span>
                <button type="submit">追加</button>
    </form>
   
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</body>
</html>