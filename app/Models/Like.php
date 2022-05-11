<?php

namespace App\Models;

use App\Models\User;
use App\Models\Meme;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    // https://laravel.com/docs/8.x/eloquent#mass-assignment
    protected $guarded = [];

    // https://laravel.com/docs/8.x/eloquent-relationships#one-to-many-inverse
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    // https://laravel.com/docs/8.x/eloquent-relationships#one-to-many-inverse
    public function meme()
    {
        return $this->belongsTo(Meme::class);
    }
}
