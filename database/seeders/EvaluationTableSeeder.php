<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class EvaluationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Evaluation')->delete();
        DB::table('Evaluation')->insert(['postDate' => Carbon::parse('04-07-2022'), 'comment' => 'Muy bueno jaja', 'rating' => 9.5]);
        DB::table('Evaluation')->insert(['postDate' => Carbon::parse('10-08-2022'), 'comment' => 'nooo epicoo', 'rating' => 8]);

    }
}
