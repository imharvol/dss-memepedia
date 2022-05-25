<?php

namespace Database\Seeders;

use App\Models\TierList;
use App\Models\User;
use App\Models\Meme;
use Illuminate\Database\Seeder;

class TierListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tier1 = new TierList();
        $tier1->name = 'random1';
        $tier1->visits = 100;

        $tier1Author = User::find(1);
        $tier1->author()->associate($tier1Author);

        /*$tier1Meme1 = Meme::find(1);
        $tier1->memes()->attach($tier1Meme1->id);
        $tier1Meme2 = Meme::find(2);
        $tier1->memes()->attach($tier1Meme2->id);
        $tier1Meme3 = Meme::find(3);
        $tier1->memes()->attach($tier1Meme3->id);*/

        $tier1->memes()->attach([1, 2, 3]);

        $tier1->save();


        $tier2 = new TierList();
        $tier2->name = 'random2';
        $tier2->visits = 15;

        $tier2Author = User::find(2);
        $tier2->author()->associate($tier2Author);

        //añadir memes

        $tier2->save();
    }
}
