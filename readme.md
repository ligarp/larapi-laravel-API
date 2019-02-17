
## About Larapi

Larapi is a simple laravel Api using laravel framework. In this case larapi will make a meeting registration API.


## How to Install Larapi
git clone https://github.com/ligarp/larapi-laravel-API.git
cd larapi-laravel-API
composer install

Database Configuration
open .env
change this

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your database_name
DB_USERNAME=database_username
DB_PASSWORD=database_password

then run "php artisan migrate:fresh"
DONE :)

## Larapi Endpoint
run in terminal
php artisan route:list to see full api endpoint


