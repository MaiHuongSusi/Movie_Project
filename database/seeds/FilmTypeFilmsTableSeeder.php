<?php

use Illuminate\Database\Seeder;

class FilmTypeFilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('film_type_films')->insert([
            'id_film'=>'1',
            'id_type_film'=>'1'
        ]);
        DB::table('film_type_films')->insert([
            'id_film'=>'1',
            'id_type_film'=>'2'
        ]);
    }
}
