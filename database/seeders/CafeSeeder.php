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
         
        DB::table('cafes')->insert([
                'cafe_name' => 'JAZZ茶房　青猫',
                'cafe_location' => '藤が丘駅近く',
                'cafe_explain' => 'ジャズが流れており、雰囲気が良く音楽の世界にい浸ることができる！',
                'cafe_evaluation' => 4,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('cafes')->insert([
                'cafe_name' => 'DAWARY（ダワリー）',
                'cafe_location' => '愛知県名古屋市緑区有松',
                'cafe_explain' => 'デザイナーズカフェで雰囲気おしゃれ！ペットの同伴可能！',
                'cafe_evaluation' => 3,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('cafes')->insert([
                'cafe_name' => 'ori',
                'cafe_location' => '愛知県名古屋市西区大野木4-8',
                'cafe_explain' => '多国籍料理を楽しむことができる！健康的でヘルシーなため女性人気高い！',
                'cafe_evaluation' => 4,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('cafes')->insert([
                'cafe_name' => 'thirty nine cafe',
                'cafe_location' => '愛知県知多市西町4',
                'cafe_explain' => 'グッドデザイン賞を受賞している！！\nふわふわ卵サンドが有名！',
                'cafe_evaluation' => 4,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
         DB::table('cafes')->insert([
                'cafe_name' => '考尺゜PINQ',
                'cafe_location' => '愛知県名古屋市中区大須2-6-15　GraphPaper NAGOYA 1F',
                'cafe_explain' => 'ランチの味噌カツがおいしい！\nできたばっかで穴場！！',
                'cafe_evaluation' => 4,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
