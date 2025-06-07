# example-laravel

Простое приложение для создания личных заметок.

## Установка

1. Клонируем реп
1. Создаем `.env` файл - `cp .env.example .env`
1. Изменяем нужные нам данные в созданном `.env`
1. Выполнить установку `composer` - `composer install`
1. Выполнить установку `npm` - `npm i`
1. Установить ключ приложения - `php artisan key:generate --ansi`
1. Выполнение миграций и исходных данных - `php artisan migrate --seed`
1. Запустить сервер `vite` - `npm run dev`
1. Запустить docker контейнер с `postgres_db` - `docker compose up -d`
1. Запускаем `Laravel` - `composer run dev`