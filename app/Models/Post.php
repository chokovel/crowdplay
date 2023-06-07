<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use File;

class Post extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;

    protected $dates = [
        'created_at'
    ];

    protected $fillable = [
        'title', 'slug', 'description', 'content', 'image', 'publishe_at', 'user_id', 'category_id' 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);  //one post belongs to one user
    }

    public function sluggable(): array{
        return [
            'slug' => [
              'source' => 'title'
            ]
        ];
    }

    public function deleteImage()
    {
        File::delete($this->image);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // this check if post has tag

    public function hasTag($tagId)
    {
        return in_array($tagId, $this->tags->pluck('id')->toArray());
    }

    public function scopeCreated($query)
    {
        return $query->where('published_at', '<=', now());
    }

    public function scopeSearched($query)
    {
        $search = request()->query('search');

        if(!$search) {
            return $query->created();
        }

        return $query->created()->where('title', 'LIKE', "%{$search}%");
    }

}

