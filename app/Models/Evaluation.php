<?php

namespace App\Models;

use App\Models\User;
use App\Models\Meme;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'rating',
    ];

    // https://laravel.com/docs/8.x/eloquent-relationships#one-to-many-inverse
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // https://laravel.com/docs/8.x/eloquent-relationships#one-to-many-inverse
    public function meme()
    {
        return $this->belongsTo(Meme::class);
    }
}
