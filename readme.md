*This is a work in progress. Not ready to use as yet.*

# Laravel 4 Bootstrap Application

This is a bootstrap application using [Laravel 4](http://laravel.com) to help you get started with your project quickly

## Features

* Theming - uses [Theme for Laravel 4](https://github.com/teepluss/laravel4-theme)
* A default theme built using Bootstrap 3
* Ardent models - makes validation a breeze and hassle free


## Installation

* Clone or copy this repo to your webroot
* Install [Composer](https://getcomposer.org/), if not already installed
* Make the app storage (and all subdirectories) world writable
* Run `composer.phar install` in the project root
* Put your database credentials in `app/config/database.php` or you can create your [environment specific](http://laravel.com/docs/configuration#environment-configuration) `database.php` as well
* Run `php artisan migrate`