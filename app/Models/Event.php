<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use File;


class Event extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;

    protected $fillable = [
        'slug', 'title', 'venue', 'map_url', 'description', 'start', 'end', 'image' 
    ];

    public function sluggable(): array{
        return [
            'slug' => [
              'source' => 'title'
            ]
        ];
    }
}
