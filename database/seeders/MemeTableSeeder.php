<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class MemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memes')->insert([
            'name' => 'peepoHappy',
            'description' => 'La famosa rana peepo pero con una sonrisa jajaxd',
            'author_id' => 1,
            'creation_date' => Carbon::parse('02-03-2022'),
            'article' => 'Rana'
        ]);

        DB::table('memes')->insert([
            'name' => 'peepoClap',
            'description' => 'La famosa rana peepo pero esta vez aplaude hihihiha',
            'author_id' => 2,
            'creation_date' => Carbon::parse('02-03-2022'),
            'article' => 'Rana'
        ]);
    }
}
