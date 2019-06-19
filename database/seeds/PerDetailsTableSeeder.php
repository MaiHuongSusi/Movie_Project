<?php

use Illuminate\Database\Seeder;
use App\Per_Detail;

class PerDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('per_details')->insert([
            'id_detail' =>'1',
            'id_per'    =>'1',
            'action_name'=>'create film',
            'action_code'=>'CREATE',
            'check_action'=>'1',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'2',
            'id_per'    =>'1',
            'action_name'=>'edit film',
            'action_code'=>'EDIT',
            'check_action'=>'1',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'3',
            'id_per'    =>'1',
            'action_name'=>'delete film',
            'action_code'=>'DELETE',
            'check_action'=>'1',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'4',
            'id_per'    =>'1',
            'action_name'=>'view film',
            'action_code'=>'VIEW',
            'check_action'=>'1',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'5',
            'id_per'    =>'2',
            'action_name'=>'create film',
            'action_code'=>'CREATE',
            'check_action'=>'1',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'6',
            'id_per'    =>'2',
            'action_name'=>'edit film',
            'action_code'=>'EDIT',
            'check_action'=>'1',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'7',
            'id_per'    =>'2',
            'action_name'=>'delete film',
            'action_code'=>'DELETE',
            'check_action'=>'0',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'8',
            'id_per'    =>'2',
            'action_name'=>'view film',
            'action_code'=>'VIEW',
            'check_action'=>'1',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'9',
            'id_per'    =>'3',
            'action_name'=>'create film',
            'action_code'=>'CREATE',
            'check_action'=>'0',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'10',
            'id_per'    =>'3',
            'action_name'=>'edit film',
            'action_code'=>'EDIT',
            'check_action'=>'0',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'11',
            'id_per'    =>'3',
            'action_name'=>'delete film',
            'action_code'=>'DELETE',
            'check_action'=>'0',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'12',
            'id_per'    =>'3',
            'action_name'=>'view film',
            'action_code'=>'VIEW',
            'check_action'=>'1',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'13',
            'id_per'    =>'4',
            'action_name'=>'create film',
            'action_code'=>'CREATE',
            'check_action'=>'0',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'14',
            'id_per'    =>'4',
            'action_name'=>'edit film',
            'action_code'=>'EDIT',
            'check_action'=>'1',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'15',
            'id_per'    =>'4',
            'action_name'=>'delete film',
            'action_code'=>'DELETE',
            'check_action'=>'0',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'16',
            'id_per'    =>'4',
            'action_name'=>'view film',
            'action_code'=>'VIEW',
            'check_action'=>'1',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'17',
            'id_per'    =>'5',
            'action_name'=>'create film',
            'action_code'=>'CREATE',
            'check_action'=>'1',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'18',
            'id_per'    =>'5',
            'action_name'=>'edit film',
            'action_code'=>'EDIT',
            'check_action'=>'0',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'19',
            'id_per'    =>'5',
            'action_name'=>'delete film',
            'action_code'=>'DELETE',
            'check_action'=>'0',
        ]);
        DB::table('per_details')->insert([
            'id_detail' =>'20',
            'id_per'    =>'5',
            'action_name'=>'view film',
            'action_code'=>'VIEW',
            'check_action'=>'1',
        ]);
    }
}
