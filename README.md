# Photo module
Simple photo module which you can useto upload photos into your project.

It provides Photo model controlled using `Services\PhotoService` class.

Photos are stored in Laravel public storage and their metadata in database (`photos` table).

## Access photo
Get photo public url:
```php
use Modules\Gallery\Entities\Photo;

$photo = Photo::findOrFail(1);
$photo->url();
```

## Get resized photo in blade
WIP
```

```
