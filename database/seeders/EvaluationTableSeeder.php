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
        DB::table('evaluations')->insert([
            'post_date' => Carbon::parse('04-07-2022'),
            'comment' => 'Muy bueno jaja',
            'rating' => 9.5,
            'author_id' => 1,
            'meme_id' => 1,
        ]);

        DB::table('evaluations')->insert([
            'post_date' => Carbon::parse('10-08-2022'),
            'comment' => 'nooo epicoo',
            'rating' => 8,
            'author_id' => 2,
            'meme_id' => 2,
        ]);
    }
}
