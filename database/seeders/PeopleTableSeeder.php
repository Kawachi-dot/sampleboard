<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'mouri',
            'email' => 'aa@aa',
            'tel' => '09011112222',
            'age' => 30,
            'address' => 'Tokyo',
        ];
        DB::table('people')->insert($param);
    }
}

