# Laravel Authentication App

A Simple Laravel App with authentication and listing of resources from an external API.

## Prerequisites

1. Composer - https://getcomposer.org/

2. PHP >= 7 
3. MySQL

## How to run

1. Clone repository.
2. Run **composer install**.
3. Create local development environment by running **cp .env.example .env**
4. run **php artisan key:generate**.
5. connect application to local MySQL database by setting .env variables
6. run **php artisan migrate** to migrate tables to database 
7. run **php artisan db:seed --class=UserSeeder** to seed the users table
8. run **php artisan serve**.
9. open localhost:8000 on browser to run app
10. login using credentials, "*testuser*" for username and "*password*" as password.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
