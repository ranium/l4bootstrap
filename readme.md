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

## Goodies

### AppHelper class

This is a custom helper class with some useful methods.

#### setJsVar() - Set JS data from controller

Many a times it happens that we need to use some PHP variables (available in route closures or controllers) in our javascript code.

The following code snippets demonstrate how to use `AppHelper::setJsVar()` method to achieve the above.

````php
// In your route closure or controller or anywhere :)
AppHelper::setJsVar('foo', 'bar'); // 'bar' is the value to set and can be a string or an array
````

````javascript
// In your JS code you can get the value set above like this
alert(app.vars.foo);
````

## Theming

L4bootstrap uses the excellent [Theme package by @teeplus](https://github.com/teepluss/laravel4-theme). Please read its documentation to get a better understanding of how the theming works and different features/methods it offers.

The theme files are stored in `public/themes/[themename]` directory. A default `bootstrap` theme is shipped with l4bootstrap.

### Bootstrap theme structure

To customize the default bootstrap theme, you can edit the following views/layotus/partials and create more as per your need.

* Main layout - `public/themes/bootstrap/layouts/default.blade.php`
* Navigation partial - `public/themes/bootstrap/partials/nav/main.blade.php`
* Assets (js/css/fonts) - `public/themes/bootstrap/assets/`