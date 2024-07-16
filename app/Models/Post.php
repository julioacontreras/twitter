<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use phpDocumentor\Reflection\Types\Boolean;

class Post extends Model
{
    use HasFactory;

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function video(): MorphOne
    {
        return $this->morphOne(Video::class, 'videoable');
    }

}
