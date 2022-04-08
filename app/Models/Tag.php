<?php

namespace App\Models;

use App\Models\Meme;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function memes()
    {
        return $this->belongsToMany(Meme::class);
    }
}
