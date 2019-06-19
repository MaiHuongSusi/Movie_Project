<?php

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            'vn_name'   =>  'Về nhà đi con',
            'en_name'   =>  'Come back home',
            'id_type_film'=> '3',
            'id_author'=>'4',
            'summary' => 'Cuộc sống của một gia đình nhỏ gồm 1 ông bố và 3 đứa con gái.',
            'total_chapter'=>'49',
            'current_chapter'=>'24',
            'link_avt'=> 'https://image.thanhnien.vn/660/uploaded/thuyptt/2019_06_13/56485547_2574630002822221_2523342287681880064_n_mjnu.jpg',
            'completed'=>'0',
            'publish_year'=>'2019',            
        ]);   
        DB::table('films')->insert([
            'vn_name'   =>  'Người bạn thực sự',
            'en_name'   =>  'Real Friend',
            'id_type_film'=> '5',
            'id_author'=>'2',
            'summary' => 'Tình cảm trong sáng của 1 đôi bạn thiếu niên.',
            'total_chapter'=>'20',
            'current_chapter'=>'20',
            'link_avt'=> 'http://bilutv.org/upload/images/2019/05/nguoi-ban-thuc-su-cua-toi-2019_1558978898.jpg',
            'completed'=>'1',
            'publish_year'=>'2015',            
        ]);   
    }
}
