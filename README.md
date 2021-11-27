# laravel-middleware
Create an Admin Middleware in Laravel 8 app
The purpose of this repository is to show good development practices on [Laravel](http://laravel.com/) as well as to present cases of use of the framework's features like:
- [Authentication](https://laravel.com/docs/8.x/authentication)
- [Blade](https://laravel.com/docs/8.x/blade)
- [Migrations](https://laravel.com/docs/8.x/migrations)
- [Seeding & Factories](https://laravel.com/docs/8.x/seeding)

## Installation

Setting up your development environment on your local machine :

```bash
$ git clone https://github.com/Letecode/laravel-middleware.git
$ cd laravel-middleware
$ cp .env.example .env
$ composer install
$ npm install
```

## Before starting
You need to run the migrations after Database has been created :
```bash
$ php artisan migrate
$ php artisan db:seed 
$ php artisan key:generate
```
This will create a new user that you can use to sign in :
```
 email = admin@gmail.com, password = 12345678   
         user@gmail.com, password' =13456
         client@gmail.com, password = '13456'
         
run 
```bash
$ php artisan serve
```
Now you can access the application via [http://localhost:8000](http://localhost:8000).
