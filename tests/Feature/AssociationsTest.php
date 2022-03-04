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
    public function testAssociationMemeAuthor()
    {
        $user = new User([
            'name' => 'VanOlmen',
            'email' => 'peepo@gmail.com',
            'password' => '123',
            'nick' => 'peepo',
            'surname' => 'Nico',
        ]);
        $user->save();

        $meme1 = new Meme([
            'name' => 'peepoHappy',
            'description' => 'La famosa rana peepo pero con una sonrisa jajaxd',
            'creation_date' => Carbon::parse('02-03-2022'),
            'article' => 'Rana'
        ]);
        $user->memes()->save($meme1);

        $meme2 = new Meme([
            'name' => 'peepoClap',
            'description' => 'La famosa rana peepo pero esta vez aplaude hihihiha',
            'user_id' => 2,
            'creation_date' => Carbon::parse('02-03-2022'),
            'article' => 'Rana'
        ]);
        $user->memes()->save($meme2);

        $this->assertEquals($user->memes[0]->name, 'peepoHappy');
        $this->assertEquals($user->memes[1]->name, 'peepoClap');
        $this->assertEquals($meme1->user->name, 'VanOlmen');
        $this->assertEquals($meme2->user->name, 'VanOlmen');

        $meme1->delete();
        $meme2->delete();
        $user->delete();
    }

    /**
     * Comprobar la relacion de que un Evaluation tiene un autor y un meme
     * Un autor y un meme pueden tener multiples evaluations 
     *
     * @return void
     */
    public function testAssociationsEvaluation()
    {
        $user = new User([
            'name' => 'VanOlmen',
            'email' => 'peepo@gmail.com',
            'password' => '123',
            'nick' => 'peepo',
            'surname' => 'Nico',
        ]);
        $user->save();

        $meme = new Meme([
            'name' => 'peepoHappy',
            'description' => 'La famosa rana peepo pero con una sonrisa jajaxd',
            'creation_date' => Carbon::parse('02-03-2022'),
            'article' => 'Rana'
        ]);
        $user->memes()->save($meme);

        $evaluation = new Evaluation([
            'post_date' => Carbon::parse('04-07-2022'),
            'comment' => 'Muy bueno jaja',
            'rating' => 9.5
        ]);
        $meme->evaluations()->save($evaluation);
        $user->evaluations()->save($evaluation);

        $this->assertEquals($evaluation->user->name, 'VanOlmen');
        $this->assertEquals($evaluation->meme->name, 'peepoHappy');
        $this->assertEquals($user->evaluations[0]->comment, 'Muy bueno jaja');
        $this->assertEquals($user->meme[0]->comment, 'Muy bueno jaja');

        $evaluation->delete();
        $meme->delete();
        $user->delete();
    }
}
