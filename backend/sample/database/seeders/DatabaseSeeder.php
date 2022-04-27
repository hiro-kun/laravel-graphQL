<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'           => 'taro-yamada',
            'deparetment_id' => '1',
            'paymente_id'    => '1',
            'created'        => date('Y-m-d H:i:s'),
        ]);
    }
}

