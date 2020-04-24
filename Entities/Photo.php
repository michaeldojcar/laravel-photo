<?php

namespace Modules\Photo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * Class Photo
 *
 * @package Softici\Gallery
 * @property int                             $id
 * @property string                          $name
 * @property string|null                     $description
 * @property string                          $path
 * @property int|null                        $gallery_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Gallery\Entities\Photo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Gallery\Entities\Photo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Gallery\Entities\Photo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Gallery\Entities\Photo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Gallery\Entities\Photo whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Gallery\Entities\Photo whereGalleryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Gallery\Entities\Photo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Gallery\Entities\Photo whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Gallery\Entities\Photo wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Gallery\Entities\Photo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Photo extends Model
{
    /**
     * Generate public photo URL.
     */
    public function url(): string
    {
        return asset(('/storage/' . $this->path));
    }


    /**
     * Generate public photo URL of resized copy.
     *
     * @param $width  int Width of image
     * @param $height int Height of image
     *
     * @return string
     */
    public function size(int $width, int $height): string
    {
        return Croppa::url(Storage::url($this->path), $width, $height);
    }
}
