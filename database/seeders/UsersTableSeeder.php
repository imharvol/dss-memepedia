<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'VanOlmen',
            'email' => 'peepo@gmail.com',
            'password' => '123',
            'nick' => 'peepo',
            'surname' => 'Nico',
        ]);

        DB::table('users')->insert([
            'name' => 'Sanchez',
            'email' => 'rick@gmail.com',
            'password' => '234',
            'nick' => 'rick',
            'surname' => 'Matias',
        ]);

        $user1 =  new User();
        $user1->name = 'VanOlmen';
        $user1->email = 'peepo@gmail.com';
        $user1->password = '123';
        $user1->nick = 'peepo';
        $user1->surname = 'Nico';
        $user1->save();

        $user2 =  new User();
        $user2->name = 'Sanchez';
        $user2->email = 'rick@gmail.com';
        $user2->password = '234';
        $user2->nick = 'rick';
        $user2->surname = 'Matias';
        $user2->save();
    }
}
