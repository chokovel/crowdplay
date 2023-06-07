<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use File;

class Album extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'slug', 'name', 'description', 'cover_image'
    ];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function sluggable(): array{
        return [
            'slug' => [
              'source' => 'name'
            ]
        ];
    }
}
