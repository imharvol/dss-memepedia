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

        $tier1->save();

        //https://laravel.com/docs/9.x/eloquent-relationships#updating-many-to-many-relationships
        $tier1->memes()->attach([1, 2, 3, 4 ,5]);
        $tier1->tags()->attach([2,3]);


        $tier2 = new TierList();
        $tier2->name = 'peepo';
        $tier2->visits = 1500;

        $tier2Author = User::find(2);
        $tier2->author()->associate($tier2Author);

        $tier2->save();

        //https://laravel.com/docs/9.x/eloquent-relationships#updating-many-to-many-relationships
        $tier2->memes()->attach([4, 8, 9, 10, 11, 12]);
        $tier2->tags()->attach([1,4]);
    }
}
