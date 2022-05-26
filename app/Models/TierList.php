<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TierList extends Model
{
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function memes()
    {
        return $this->belongsToMany(Meme::class);
    }
}
