<?php

namespace App\Models;

use App\Models\User;
use App\Models\Evaluation;
use App\Models\Tag;
use App\Models\Like;
use Illuminate\Database\Eloquent\Model;

class Meme extends Model
{
    // https://laravel.com/docs/8.x/eloquent#mass-assignment
    protected $guarded = [];

    // https://laravel.com/docs/8.x/eloquent-relationships#one-to-many-inverse
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    // https://laravel.com/docs/8.x/eloquent-relationships#one-to-many
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }

    // https://laravel.com/docs/8.x/eloquent-relationships#one-to-many
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'meme_tag');
    }

    // https://laravel.com/docs/8.x/eloquent-relationships#one-to-many
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
