<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Meme;
use Illuminate\Database\Seeder;

class MemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $meme1 = new Meme();
        $meme1->name = 'peepoHappy';
        $meme1->description = 'La famosa rana peepo pero con una sonrisa jajaxd';
        $meme1->article = 'Rana';
        $meme1User = User::find(1);
        $meme1->user()->associate($meme1User);
        $meme1User->memes()->save($meme1);

        $meme2 = new Meme();
        $meme2->name = 'peepoClap';
        $meme2->description = 'La famosa rana peepo pero esta vez aplaude hihihiha';
        $meme2->article = 'Rana';
        $meme2User = User::find(2);
        $meme2->user()->associate($meme2User);
        $meme2User->memes()->save($meme2);
    }
}
