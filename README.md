# Photo module

[![Latest Stable Version](https://poser.pugx.org/michaeldojcar/laravel-photo/v)](//packagist.org/packages/michaeldojcar/laravel-photo) [![Total Downloads](https://poser.pugx.org/michaeldojcar/laravel-photo/downloads)](//packagist.org/packages/michaeldojcar/laravel-photo) [![Latest Unstable Version](https://poser.pugx.org/michaeldojcar/laravel-photo/v/unstable)](//packagist.org/packages/michaeldojcar/laravel-photo) [![License](https://poser.pugx.org/michaeldojcar/laravel-photo/license)](//packagist.org/packages/michaeldojcar/laravel-photo)

Simple photo module which you can use to upload and work with photos in your project.

It provides Photo model controlled using `Services\PhotoService` class.

Photos are stored in Laravel public storage and their metadata in database (table `photos`).

## Install

```
php artisan vendor:publish --provider=MichaelDojcar\LaravelPhoto\Providers\PhotoServiceProvider
```

## Access photo

Get photo public url:

```php
use MichaelDojcar\LaravelPhoto\Models\Photo;

$photo = Photo::findOrFail(1);
$photo->url();
```

## Get resized photo URL

You can generate any size of your Photos immediately in blade template.

```php
use MichaelDojcar\LaravelPhoto\Models\Photo;

$photo = Photo::findOrFail(1);
$photo->resize(250, 120); // Specify width and height
```