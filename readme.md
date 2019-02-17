
## About Larapi

Larapi is a simple laravel Api using laravel framework. In this case larapi will make a meeting registration API.


## How to Install Larapi
git clone https://github.com/ligatp/larapi-laravel-API.git
cd larapi-laravel-API
composer install

Database Configuration
open .env
change this

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your database name
DB_USERNAME=database_username
DB_PASSWORD=database_password

then run "php artisan migrate:fresh"
DONE :)

## Larapi Endpoint

+--------+-----------+--------------------------------------------+----------------------+-------------------------------------------------+------------+
| Domain | Method    | URI                                        | Name                 | Action                                          | Middleware |
+--------+-----------+--------------------------------------------+----------------------+-------------------------------------------------+------------+
|        | GET|HEAD  | /                                          |                      | Closure                                         | web        |
|        | GET|HEAD  | api/v1/meeting                             | meeting.index        | App\Http\Controllers\MeetingController@index    | api        |
|        | POST      | api/v1/meeting                             | meeting.store        | App\Http\Controllers\MeetingController@store    | api        |
|        | POST      | api/v1/meeting/registration                | registration.store   | App\Http\Controllers\RegisterController@store   | api        |
|        | DELETE    | api/v1/meeting/registration/{registration} | registration.destroy | App\Http\Controllers\RegisterController@destroy | api        |
|        | GET|HEAD  | api/v1/meeting/{meeting}                   | meeting.show         | App\Http\Controllers\MeetingController@show     | api        |
|        | PUT|PATCH | api/v1/meeting/{meeting}                   | meeting.update       | App\Http\Controllers\MeetingController@update   | api        |
|        | DELETE    | api/v1/meeting/{meeting}                   | meeting.destroy      | App\Http\Controllers\MeetingController@destroy  | api        |
|        | POST      | api/v1/user/register                       |                      | App\Http\Controllers\AuthController@store       | api        |
|        | POST      | api/v1/user/signin                         |                      | App\Http\Controllers\AuthController@signin      | api        |
+--------+-----------+--------------------------------------------+----------------------+-------------------------------------------------+------------+
