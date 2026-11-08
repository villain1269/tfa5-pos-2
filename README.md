# TFA5 — Laravel POS Foundations

A four-page Laravel application built for IT0049 Web System Technologies,
Technical Formative Assessment 5: "From Zero to Four Pages, Again."

## Pages

| Route       | Controller                      | View                       | Notes                          |
|-------------|---------------------------------|----------------------------|--------------------------------|
| `/`         | `PageController@landing`        | `landing.blade.php`        | Landing page                   |
| `/about`    | `PageController@about`          | `about.blade.php`          | About page                     |
| `/customers`| `CustomerController@index`      | `customers.blade.php`      | 5 static customer records      |
| `/users`    | `UserController@index`          | `users.blade.php`          | 5 static user records          |

The `/customers` and `/users` views loop through their controllers' static PHP
arrays using Blade's `@foreach` directive.

## Requirements

- PHP 8.1+
- Composer

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve