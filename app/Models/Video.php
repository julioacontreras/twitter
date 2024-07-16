<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'url', 'videoable_id', 'videoable_type'
    ];

    public function video(): MorphOne
    {
        return $this->morphOne(Image::class, 'videoable');
    }    
}
