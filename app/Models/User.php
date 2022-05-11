<?php

namespace App\Models;

use App\Models\Meme;
use App\Models\Like;
use App\Models\Evaluation;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // https://laravel.com/docs/8.x/eloquent#mass-assignment
    protected $guarded = [];

    // https://laravel.com/docs/8.x/eloquent-serialization#hiding-attributes-from-json
    protected $hidden = [
        'password',
        'remember_token'
    ];

    // https://laravel.com/docs/8.x/eloquent-relationships#one-to-many
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class, 'author_id');
    }

    // https://laravel.com/docs/8.x/eloquent-relationships#one-to-many
    public function memes()
    {
        return $this->hasMany(Meme::class, 'author_id');
    }

    // https://laravel.com/docs/8.x/eloquent-relationships#one-to-many
    public function likes()
    {
        return $this->hasMany(Like::class, 'author_id');
    }
}
