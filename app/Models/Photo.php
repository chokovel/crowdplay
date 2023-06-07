<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use File;

class Photo extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'album_id', 'slug', 'photo', 'title', 'description', 'size'
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function sluggable(): array{
        return [
            'slug' => [
              'source' => 'name'
            ]
        ];
    }
}
