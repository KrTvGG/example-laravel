<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div class="container">
        @session('message')
            <div class="success-message">
                {{ session('message') }}
            </div>
        @endsession
        {{ $slot }}
    </div>
</body>
</html>