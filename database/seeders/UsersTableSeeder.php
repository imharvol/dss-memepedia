<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'VanOlmen',
            'email' => 'peepo@gmail.com',
            'password' => '123',
            'nick' => 'peepo',
            'surname' => 'Nico',
            'registerDate' => Carbon::parse('4-03-2022')
        ]);
        DB::table('users')->insert([
            'name' => 'Sanchez',
            'email' => 'rick@gmail.com',
            'password' => '234',
            'nick' => 'rick',
            'surname' => 'Matias',
            'registerDate' => Carbon::parse('4-03-2022')
        ]);
    }
}