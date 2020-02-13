<?php

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
            'firstname' => 'Admin',
            'role_id' => 1,
            'city_id' => 34,
            'age' => 24,
            'gender' => 1,
            'phone_number' => '0534442234',
            'email' => 'admin@quiz.com',
            'password' => bcrypt('quizapp'),
        ]);
        DB::table('users')->insert([
            'firstname' => 'Support',
            'role_id' => 2,
            'city_id' => 34,
            'age' => 24,
            'gender' => 1,
            'phone_number' => '05344422234',
            'email' => 'support@quiz.com',
            'password' => bcrypt('quizapp'),
        ]);
        DB::table('users')->insert([
            'firstname' => 'Client',
            'role_id' => 3,
            'city_id' => 34,
            'age' => 24,
            'gender' => 0,
            'phone_number' => '05344425234',
            'email' => 'client@quiz.com',
            'password' => bcrypt('quizapp'),
        ]);
    }
}
