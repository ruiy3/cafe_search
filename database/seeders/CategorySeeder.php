<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'kind' => 'Cozy',
        ]);
         
        DB::table('categories')->insert([
            'kind' => 'Modern',
        ]);
        
        DB::table('categories')->insert([
            'kind' => 'Retro',
        ]);
        
        DB::table('categories')->insert([
            'kind' => 'Artistic',
        ]);
        
        DB::table('categories')->insert([
            'kind' => 'Natural',
        ]);
        
        DB::table('categories')->insert([
            'kind' => 'Bohemian',
        ]);
        
        DB::table('categories')->insert([
            'kind' => 'Industrial',
        ]);
        
        DB::table('categories')->insert([
            'kind' => 'Romantic',
        ]);
        
        DB::table('categories')->insert([
            'kind' => 'Family-Friendly',
        ]);
        
        DB::table('categories')->insert([
            'kind' => 'Cool',
        ]);
    }
}
