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
        $user1 = new User();
        $user1->username = 'peepo';
        $user1->name = 'VanOlmen';
        $user1->email = 'peepo@gmail.com';
        $user1->password = '123';
        $user1->save();
        
        $user2 = new User();
        $user2->username = 'rick';
        $user2->name = 'Sanchez';
        $user2->surname = 'Matias';
        $user2->email = 'rick@gmail.com';
        $user2->password = '234';
        $user2->save();
    }
}
