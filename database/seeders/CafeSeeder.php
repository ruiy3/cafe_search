<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CafeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('cafes')->insert([
                'cafe_name' => 'ヴァンサンヌ・ドゥ',
                'cafe_location' => '栄',
                'cafe_explain' => 'アップルパイ有名',
                'cafe_evaluation' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
