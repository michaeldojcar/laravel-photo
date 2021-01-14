<?php

namespace MichaelDojcar\LaravelPhoto\Models;

use Croppa;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Photo
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
        return Croppa::url($this->url(), $width, $height);
    }
}
