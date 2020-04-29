<?php

namespace Modules\Photo\Entities;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Class Photo
 *
 * @package Softici\Gallery
 * @property int                             $id
 * @property string                          $name
 * @property string|null                     $description
 * @property string                          $path
 * @property int|null                        $gallery_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|\Modules\Gallery\Entities\Photo newModelQuery()
 * @method static Builder|\Modules\Gallery\Entities\Photo newQuery()
 * @method static Builder|\Modules\Gallery\Entities\Photo query()
 * @method static Builder|\Modules\Gallery\Entities\Photo whereCreatedAt($value)
 * @method static Builder|\Modules\Gallery\Entities\Photo whereDescription($value)
 * @method static Builder|\Modules\Gallery\Entities\Photo whereGalleryId($value)
 * @method static Builder|\Modules\Gallery\Entities\Photo whereId($value)
 * @method static Builder|\Modules\Gallery\Entities\Photo whereName($value)
 * @method static Builder|\Modules\Gallery\Entities\Photo wherePath($value)
 * @method static Builder|\Modules\Gallery\Entities\Photo whereUpdatedAt($value)
 * @mixin Eloquent
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
        return \Croppa::url($this->url(), $width, $height);
    }
}
