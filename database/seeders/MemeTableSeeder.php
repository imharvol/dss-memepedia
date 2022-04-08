<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Meme;
use App\Models\Tag;
use Illuminate\Database\Seeder;


class MemeTableSeeder extends Seeder
{
    public function run()
    {

        $meme1 = new Meme();
        $meme1->name = 'peepoHappy';
        $meme1->description = 'La famosa rana peepo pero con una sonrisa jajaxd';
        $meme1Author = User::find(1);
        $meme1->author()->associate($meme1Author);
        $meme1->save();

        $meme2 = new Meme();
        $meme2->name = 'peepoClap';
        $meme2->description = 'La famosa rana peepo pero esta vez aplaude hihihiha';
        $meme2Author = User::find(2);
        $meme2->author()->associate($meme2Author);
        $meme2->save();

        $tag1 = new Tag();
        $tag1->name = 'gato';
        $tag1->save();
        $tag1->memes()->save($meme1);
        $tag1->memes()->save($meme2);

        $tag2 = new Tag();
        $tag2->name = 'perro';
        $tag2->save();
        $tag2->memes()->save($meme1);
    }
}
