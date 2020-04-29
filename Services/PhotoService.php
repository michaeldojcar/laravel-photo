<?php


namespace Modules\Photo\Services;

use Exception;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Modules\Photo\Entities\Photo;

/**
 * Class PhotoService
 *
 * Manages photos (save them to storage and model).
 *
 * @package App\Gallery
 */
class PhotoService
{
    /**
     * Add new photo.
     *
     * @param string       $name
     * @param UploadedFile $file
     * @param string       $description
     *
     * @return Photo
     */
    public function create(string $name, UploadedFile $file, string $description = null): Photo
    {
        // 1. Save photo to storage.
        $image_name = $file->hashName() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/photos', $image_name);

        // 2. Make model.
        $photo = new Photo();
        $photo->name = $name;
        $photo->description = $description;
        $photo->path = 'photos/' . $image_name;

        $photo->save();

        return $photo;
    }


    /**
     * Update photo.
     *
     * @param Photo  $photo
     * @param string $name
     * @param string $description
     *
     * @return Photo
     */
    public function update(Photo $photo, string $name, string $description = null): Photo
    {
        $photo->name = $name;
        $photo->description = $description;

        $photo->save();

        return $photo;
    }

    /**
     * Delete photo.
     *
     * @param Photo $photo
     * @return bool
     * @throws Exception
     */
    public function delete(Photo $photo): bool
    {
        $photo->delete();

        Storage::delete('public/' . $photo->path);

        return true;
    }
}
