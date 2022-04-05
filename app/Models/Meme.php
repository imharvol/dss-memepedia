<?php

namespace App\Models;

use App\Models\User;
use App\Models\Evaluation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meme extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'article',
    ];

    // https://laravel.com/docs/8.x/eloquent-relationships#one-to-many-inverse
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // https://laravel.com/docs/8.x/eloquent-relationships#one-to-many
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
