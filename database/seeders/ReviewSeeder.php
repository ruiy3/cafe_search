<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use DateTime;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'review' => 'おいしい！！',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'user_id' => 1,
            'cafe_id' => 1,
            'category_id' => 1,
        ]);
        
        DB::table('reviews')->insert([
            'review' => '結構並びました、',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'user_id' => 1,
            'cafe_id' => 1,
            'category_id' => 2,
        ]);
        
        DB::table('reviews')->insert([
            'review' => 'ここのアップルパイしか勝たん！',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'user_id' => 1,
            'cafe_id' => 1,
            'category_id' => 5,
        ]);
    }
}
