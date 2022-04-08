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
        $meme1Author = User::find(1);
        $meme1->author()->associate($meme1Author);
        $meme1Author->memes()->save($meme1);

        $meme2 = new Meme();
        $meme2->name = 'peepoClap';
        $meme2->description = 'La famosa rana peepo pero esta vez aplaude hihihiha';
        $meme2Author = User::find(2);
        $meme2->author()->associate($meme2Author);
        $meme2Author->memes()->save($meme2);
    }
}
