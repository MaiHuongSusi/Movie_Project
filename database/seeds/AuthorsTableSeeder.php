<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            ['name_author'=>'Marvel Studio'],
            ['name_author'=>'DC Studio'],
            ['name_author'=>'Nick Vujic'],
            ['name_author'=>'Phạm Anh Khoa'],
            ['name_author'=>'Selena Gomez'],
            ['name_author'=>'Taylor Swift'],
            ['name_author'=>'Mary Pink'],
            ['name_author'=>'Amanda Mai'],
        ]);
    }
}
