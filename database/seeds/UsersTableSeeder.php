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
            'name'  => 'Khoi Ha',
            'email' => 'khoiha@gmail.com',
            'password'=> Hash::make('password'),
            'remember_token'=>str_random(10),
        ]);
    }
}
