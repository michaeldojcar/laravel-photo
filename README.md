# Photo module
Simple photo module which you can useto upload photos into your project.

It provides Photo model controlled using `Services\PhotoService` class.

Photos are stored in Laravel public storage and their metadata in database (`photos` table).

## Install
```
php artisan acore:module

php artisan vendor:publish --provider=Modules\Photo\Providers\PhotoServiceProvider
```

## Access photo
Get photo public url:
```php
use Modules\Gallery\Entities\Photo;

$photo = Photo::findOrFail(1);
$photo->url();
```

## Get resized photo in blade
```php
use Modules\Gallery\Entities\Photo;

$photo = Photo::findOrFail(1);
$photo->resize(250, 120); // Specify width and height
```


## Implementing photo upload into your modules
```
@component('photo::components.add_modal', ['model' => $item, 'action' => 'items::items.photo.store'])@endcomponent
```
