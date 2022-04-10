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
        if (!file_exists('storage/app/public/memes/')) mkdir('storage/app/public/memes/');

        $meme1 = new Meme();
        $meme1->name = 'No Bitches?';
        $meme1->description = 'No Bitches? refers to a series of memes based on an image of character Megamind from the 2010 film of the same name peeking into a peephole while waiting to be let in. Originally used without a caption, in December 2021 the image was captioned "No Bitches?" and achieved virality online, first as a reaction, and later as source material for recaptions and remakes.';
        $meme1Author = User::find(1);
        $meme1->author()->associate($meme1Author);
        copy('database/seeders/memes/1', 'storage/app/public/memes/1');
        $meme1->save();

        $meme2 = new Meme();
        $meme2->name = 'PHP best practices';
        $meme2->description = 'Libro de mejores prácticas de PHP donde, evidentemente, la primera es dejar de usar PHP';
        $meme2Author = User::find(2);
        $meme2->author()->associate($meme2Author);
        copy('database/seeders/memes/2', 'storage/app/public/memes/2');
        $meme2->save();

        $meme3 = new Meme();
        $meme3->name = 'split() vs explode()';
        $meme3->description = 'Mientras que Java, C# y demás lenguajes usan split() para separar strings, PHP ha decidido que esa función se llama explode()';
        $meme3Author = User::find(2);
        $meme3->author()->associate($meme3Author);
        copy('database/seeders/memes/3', 'storage/app/public/memes/3');
        $meme3->save();

        $tagBlue = new Tag();
        $tagBlue->name = 'blue';
        $tagBlue->save();
        $tagBlue->memes()->save($meme1);

        $tagBigHead = new Tag();
        $tagBigHead->name = 'big head';
        $tagBigHead->save();
        $tagBigHead->memes()->save($meme1);

        $tagPhp = new Tag();
        $tagPhp->name = 'php';
        $tagPhp->save();
        $tagPhp->memes()->save($meme2);
        $tagPhp->memes()->save($meme3);
    }
}
