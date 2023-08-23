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
                'cafe_evaluation' => 4,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('cafes')->insert([
                'cafe_name' => 'Sunnyday coffee and breakfast',
                'cafe_location' => '一社駅近く',
                'cafe_explain' => 'オセアニアスタイルのモーニングが味わえる！',
                'cafe_evaluation' => 3,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
