<?php

namespace App\Models;

use App\Models\Meme;
use App\Models\Evaluation;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nick',
        'surname'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // https://laravel.com/docs/8.x/eloquent-relationships#one-to-many
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }

    // https://laravel.com/docs/8.x/eloquent-relationships#one-to-many
    public function memes()
    {
        return $this->hasMany(Meme::class);
    }
}
