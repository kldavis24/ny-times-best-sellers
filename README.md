<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About

This small API example makes use of the [New York Times Best Seller Books API](https://developer.nytimes.com/docs/books-product/1/overview). Sign up for a free developer API key, and you can fully utilize the endpoints included within this API.

## Setup Steps

- Copy the example environment file with `cp .env.example .env`
- Replace the value of `NY_TIMES_API_KEY` in `.env` with your developer API key
- Ensure the composer packages are present with `composer install`
- Ensure the included node modules are present with `npm i`
- Ensure you have a database connected to the project
    - Update the `DB_*` variables within `.env`, or use the included SQLite config if you're setup to use it properly
- Generate an app key with `php artisan key:generate`
- Run the included Laravel migrations with `php artisan migrate`
- Host the project locally with `php artisan serve`
- Create the initial `Admin` user with `php artisan app:create-admin-user`
    - By default the email is `admin@email.com` and the password is `password`

## Included Endpoints

- `/api/auth/login`
- `/api/v1/ny-times-best-sellers/books`
- `/api/v1/ny-times-best-sellers/lists`
- `/api/v1/ny-times-best-sellers/books/list/{list_name}`
- `/api/v1/ny-times-best-sellers/books/list/{list_name}/published-date/{date}`
