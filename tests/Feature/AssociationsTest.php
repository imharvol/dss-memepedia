<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Carbon\Carbon;

use App\Models\User;
use App\Models\Meme;
use App\Models\Evaluation;

class AssociationsTest extends TestCase
{
    /**
     * Comprobar la relacion de que un meme tiene un autor y un autor puede tener varios memes
     *
     * @return void
     */
    public function testAssociationMemeUser()
    {
        $memeUser =  new User();
        $memeUser->name = 'VanOlmen';
        $memeUser->email = 'peepo@gmail.com';
        $memeUser->password = '123';
        $memeUser->nick = 'peepo';
        $memeUser->surname = 'Nico';
        $memeUser->save();

        $meme1 = new Meme();
        $meme1->name = 'peepoHappy';
        $meme1->description = 'La famosa rana peepo pero con una sonrisa jajaxd';
        $meme1->article = 'Rana';
        $meme1->user()->associate($memeUser);
        $memeUser->memes()->save($meme1);

        $meme2 = new Meme();
        $meme2->name = 'peepoClap';
        $meme2->description = 'La famosa rana peepo pero esta vez aplaude hihihiha';
        $meme2->article = 'Rana';
        $meme2->user()->associate($memeUser);
        $memeUser->memes()->save($meme2);

        $this->assertEquals($memeUser->memes[0]->name, 'peepoHappy');
        $this->assertEquals($memeUser->memes[1]->name, 'peepoClap');
        $this->assertEquals($meme1->user->name, 'VanOlmen');
        $this->assertEquals($meme2->user->name, 'VanOlmen');

        $meme1->delete();
        $meme2->delete();
        $memeUser->delete();
    }

    /**
     * Comprobar la relacion de que un Evaluation tiene un autor y un meme
     * Un autor y un meme pueden tener multiples evaluations 
     *
     * @return void
     */
    public function testAssociationsEvaluation()
    {
        $user =  new User();
        $user->name = 'VanOlmen';
        $user->email = 'peepo@gmail.com';
        $user->password = '123';
        $user->nick = 'peepo';
        $user->surname = 'Nico';
        $user->save();

        $meme = new Meme();
        $meme->name = 'peepoHappy';
        $meme->description = 'La famosa rana peepo pero con una sonrisa jajaxd';
        $meme->article = 'Rana';
        $meme->user()->associate($user);
        $user->memes()->save($meme);

        $evaluation = new Evaluation();
        $evaluation->comment = 'Muy bueno jaja';
        $evaluation->rating = 9.5;
        $evaluation->user()->associate($user);
        $evaluation->meme()->associate($meme);
        $user->evaluations()->save($evaluation);
        $meme->evaluations()->save($evaluation);


        $this->assertEquals($evaluation->user->name, 'VanOlmen');
        $this->assertEquals($evaluation->meme->name, 'peepoHappy');
        $this->assertEquals($user->evaluations[0]->comment, 'Muy bueno jaja');
        $this->assertEquals($user->memes[0]->evaluations[0]->comment, 'Muy bueno jaja');

        $evaluation->delete();
        $meme->delete();
        $user->delete();
    }
}
