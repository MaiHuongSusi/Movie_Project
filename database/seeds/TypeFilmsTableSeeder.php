<?php

use Illuminate\Database\Seeder;

class TypeFilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_films')->insert([
            ['name_type' => 'Phim mới'],
            ['name_type' => 'Phim chiếu rạp'],
            ['name_type' => 'Phim tình cảm'],
            ['name_type' => 'Phim hành động'],
            ['name_type' => 'Phim tâm lý'],
            ['name_type' => 'Phim cổ trang'],
            ['name_type' => 'Phim hoạt hình'],
            ['name_type' => 'Phim anh hùng'],
        ]);
    }
}
