<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                
            </style>
        @endif
        <title>Новости</title>
    </head>
    <body>
        <div class="container">
            <div class="news">
                <h1>Новости</h1>
                <a href="/"><- Home</a>
                <div class="news-list">
                    <? 
                        $posts = App\Models\Post::all();
                        foreach ($posts as $key => $post) : ?>
                            <a href="/" class="news-item">
                                <div class="news-item__name">{{ $post->title }}</div>
                                <div class="news-item__content">{{ $post->content }}</div>
                            </a>
                    <? endforeach; ?>
                </div>
            </div>
        </div>
    </body>
</html>