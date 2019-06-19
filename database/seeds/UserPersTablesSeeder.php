<?php

use Illuminate\Database\Seeder;

class UserPersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_pers')->insert([
        ]);
    }
}
