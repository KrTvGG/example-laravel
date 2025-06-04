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
        <div class="container mx-auto mt-20 mb-20">
            <h1 class="text-3xl font-bold underline">Новости</h1>
            <br>
            <a href="/"><- Home</a>
        </div>
    </body>
</html>