<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>time bank</h1>
        <div class='times'>
            @foreach ($times as $time)
                <div class='time'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='time'>{{ $post->title }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>