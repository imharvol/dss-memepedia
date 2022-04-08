<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Meme;
use App\Models\Evaluation;
use Illuminate\Database\Seeder;

class EvaluationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $evaluation1 = new Evaluation();
        $evaluation1->comment = 'Muy bueno jaja';
        $evaluation1->rating = 9.5;

        $evaluation1Author = User::find(2);
        $evaluation1->author()->associate($evaluation1Author);

        $evaluation1Meme = Meme::find(1);
        $evaluation1->meme()->associate($evaluation1Meme);

        $evaluation1->save();


        $evaluation2 = new Evaluation();
        $evaluation2->comment = 'nooo epicoo';
        $evaluation2->rating = 8;

        $evaluation2Author = User::find(1);
        $evaluation2->author()->associate($evaluation2Author);

        $evaluation2Meme = Meme::find(2);
        $evaluation2->meme()->associate($evaluation2Meme);
        
        $evaluation2->save();
    }
}
