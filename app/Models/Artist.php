<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artist extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $dates = ['created_at'];

    protected $fillable = [
        'firstname',
        'stagename',
        'lastname',
        'phone',
        'email',
        'address',
        'artprofession',
        'portfoliolink',
        'image',
        'bio',
        'verified',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
