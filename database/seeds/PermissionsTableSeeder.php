<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            ['name_per' => 'Full'],
            ['name_per' => 'Admin'],
            ['name_per' => 'View'],
            ['name_per' => 'Edit'],
            ['name_per' => 'Create'],
        ]);
    }
}
