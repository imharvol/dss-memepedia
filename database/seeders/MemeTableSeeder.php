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
        DB::table('Meme')->insert([
        'name' => 'peepoHappy',
        'description' => 'La famosa rana peepo pero con una sonrisa jajaxd',
        'author' => 'peepoDani',
        'creationDate' => Carbon::parse('02-03-2022'),
        'article' => 'Rana']);
        DB::table('Meme')->insert([
            'name' => 'peepoClap',
            'description' => 'La famosa rana peepo pero esta vez aplaude hihihiha',
            'author' => 'peepoDani',
            'creationDate' => Carbon::parse('02-03-2022'),
            'article' => 'Rana']);
    }
}
