<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Meme;
use App\Models\Like;

class LikeTableSeeder extends Seeder
{
    public function run()
    {
        $like1 = new Like();

        $like1Author = User::find(2);
        $like1->author()->associate($like1Author);

        $like1Meme = Meme::find(1);
        $like1->meme()->associate($like1Meme);

        $like1->save();


        $like2 = new Like();

        $like2Author = User::find(2);
        $like2->author()->associate($like2Author);

        $like2Meme = Meme::find(2);
        $like2->meme()->associate($like2Meme);

        $like2->save();
    }
}
