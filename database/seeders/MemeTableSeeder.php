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
        $meme1Author = User::find(3);
        $meme1->author()->associate($meme1Author);
        copy('database/seeders/memes/1', 'storage/app/public/memes/1');
        $meme1->save();

        $meme1->tags()->attach([1,2]);

        $meme2 = new Meme();
        $meme2->name = 'PHP best practices';
        $meme2->description = 'Libro de mejores prácticas de PHP donde, evidentemente, la primera es dejar de usar PHP';
        $meme2Author = User::find(2);
        $meme2->author()->associate($meme2Author);
        copy('database/seeders/memes/2', 'storage/app/public/memes/2');
        $meme2->save();

        $meme2->tags()->attach([3]);

        $meme3 = new Meme();
        $meme3->name = 'split() vs explode()';
        $meme3->description = 'Mientras que Java, C# y demás lenguajes usan split() para separar strings, PHP ha decidido que esa función se llama explode()';
        $meme3Author = User::find(2);
        $meme3->author()->associate($meme3Author);
        copy('database/seeders/memes/3', 'storage/app/public/memes/3');
        $meme3->save();

        $meme3->tags()->attach([3]);

        $meme4 = new Meme();
        $meme4->name = 'peepoShy';
        $meme4->description = 'Peepo está vergonzoso';
        $meme4Author = User::find(2);
        $meme4->author()->associate($meme4Author);
        copy('database/seeders/memes/4', 'storage/app/public/memes/4');
        $meme4->save();

        $meme4->tags()->attach([4]);

        $meme5 = new Meme();
        $meme5->name = 'marge-simpson';
        $meme5->description = 'Marge simpson(marxismo). Nunca supe cómo se escribe';
        $meme5Author = User::find(3);
        $meme5->author()->associate($meme5Author);
        copy('database/seeders/memes/5', 'storage/app/public/memes/5');
        $meme5->save();

        $meme5->tags()->attach([5,6,7]);

        $meme6 = new Meme();
        $meme6->name = 'evilMatamoros';
        $meme6->description = 'Kiko Matamoros versión evil = pistacho salvamoros.';
        $meme6Author = User::find(3);
        $meme6->author()->associate($meme6Author);
        copy('database/seeders/memes/6', 'storage/app/public/memes/6');
        $meme6->save();

        $meme6->tags()->attach([1,8]);

        $meme7 = new Meme();
        $meme7->name = 'vegettaBuscaGerente';
        $meme7->description = 'Veggeta insulta a goku porque le prejuzga y no cree que sea el gerente cuando en realidad sí lo es.';
        $meme7Author = User::find(3);
        $meme7->author()->associate($meme7Author);
        copy('database/seeders/memes/7', 'storage/app/public/memes/7');
        $meme7->save();

        $meme7->tags()->attach([9,10,11]);

        $meme8 = new Meme();
        $meme8->name = 'angryPeepo';
        $meme8->description = 'Peepo está enfadado y te saca el dedo';
        $meme8Author = User::find(3);
        $meme8->author()->associate($meme8Author);
        copy('database/seeders/memes/8', 'storage/app/public/memes/8');
        $meme8->save();

        $meme8->tags()->attach([4]);

        $meme9 = new Meme();
        $meme9->name = 'peepoLaugh';
        $meme9->description = 'Peepo se está riendo mucho';
        $meme9Author = User::find(3);
        $meme9->author()->associate($meme9Author);
        copy('database/seeders/memes/9', 'storage/app/public/memes/9');
        $meme9->save();

        $meme9->tags()->attach([4]);

        $meme10 = new Meme();
        $meme10->name = 'peepoCovid';
        $meme10->description = 'Peepo con una mascarilla contra el covid';
        $meme10Author = User::find(2);
        $meme10->author()->associate($meme10Author);
        copy('database/seeders/memes/10', 'storage/app/public/memes/10');
        $meme10->save();

        $meme10->tags()->attach([4]);

        $meme11 = new Meme();
        $meme11->name = 'peepoSad';
        $meme11->description = 'Peepo está triste';
        $meme11Author = User::find(3);
        $meme11->author()->associate($meme11Author);
        copy('database/seeders/memes/11', 'storage/app/public/memes/11');
        $meme11->save();

        $meme11->tags()->attach([4]);

        $meme12 = new Meme();
        $meme12->name = 'peepoAngry';
        $meme12->description = 'Peepo está enfadado';
        $meme12Author = User::find(2);
        $meme12->author()->associate($meme12Author);
        copy('database/seeders/memes/12', 'storage/app/public/memes/12');
        $meme12->save();

        $meme12->tags()->attach([4]);
    }
}
