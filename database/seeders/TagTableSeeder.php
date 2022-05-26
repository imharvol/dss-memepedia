<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag1 = new Tag();
        $tag1->name = 'blue';
        $tag1->save();

        $tag2 = new Tag();
        $tag2->name = 'big head';
        $tag2->save();

        $tag3 = new Tag();
        $tag3->name = 'php';
        $tag3->save();

        $tag4 = new Tag();
        $tag4->name = 'peepo';
        $tag4->save();

        $tag5 = new Tag();
        $tag5->name = 'nunca-supe-como-se-escribe';
        $tag5->save();

        $tag6 = new Tag();
        $tag6->name = 'Marge';
        $tag6->save();

        $tag7 = new Tag();
        $tag7->name = 'simpsons';
        $tag7->save();

        $tag8 = new Tag();
        $tag8->name = 'evil';
        $tag8->save();

        $tag9 = new Tag();
        $tag9->name = 'goku';
        $tag9->save();

        $tag10 = new Tag();
        $tag10->name = 'vegetta';
        $tag10->save();

        $tag11 = new Tag();
        $tag11->name = 'dragonBall';
        $tag11->save();
    }
}
