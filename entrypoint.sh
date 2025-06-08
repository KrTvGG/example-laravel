#! /bin/sh

composer install
npm i
php artisan key:generate --ansi
php artisan migrate --seed
npm run dev & 
php artisan serve --host=0.0.0.0 --port=8000