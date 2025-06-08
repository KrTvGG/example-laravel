# example-laravel

Простое приложение для создания личных заметок.

## Запуск среды разработки

1. Клонируем реп
1. Прописываем - `docker compose up -d`
1. Открываем [сайт](http://localhost:8000/note)

При первом запуске среды будут автоматически сгенерированы тестовые данные.

## Шпаргалки

1. Вход в контейнер `laravel` - `docker compose exec laravel /bin/sh` 
1. Публикация ресурсов связи с пакетом `Swagger` - `php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"`
1. Генерируем `Swagger API` - `php artisan l5-swagger:generate`
1. Просмотреть `Notes Doc API` можно по [пути](http://localhost:8000/api/documentation) 