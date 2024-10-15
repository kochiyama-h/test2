<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // キウイに秋と冬を関連付け
        DB::table('product_season')->insert([
            'product_id' => 1, // キウイのID
            'season_id' => 3,  // 秋のID
        ]);

        DB::table('product_season')->insert([
            'product_id' => 1, // キウイのID
            'season_id' => 4,  // 冬のID
        ]);


        // ストロベリーに春を関連付け
        DB::table('product_season')->insert([
            'product_id' => 2, 
            'season_id' => 1,  
        ]);


        // オレンジに冬を関連付け
        DB::table('product_season')->insert([
            'product_id' => 3, 
            'season_id' => 4,  
        ]);

        // スイカに夏を関連付け
        DB::table('product_season')->insert([
            'product_id' => 4, 
            'season_id' => 2,  
        ]);

        // ピーチに夏を関連付け
        DB::table('product_season')->insert([
            'product_id' => 5, 
            'season_id' => 2,  
        ]);

        // シャインマスカットに夏と秋を関連付け
        DB::table('product_season')->insert([
            'product_id' => 6, 
            'season_id' => 2,  
        ]);

        DB::table('product_season')->insert([
            'product_id' => 6, 
            'season_id' => 3,  
        ]);


        // パイナップルに春と夏を関連付け
        DB::table('product_season')->insert([
            'product_id' => 7, 
            'season_id' => 1,  
        ]);

        DB::table('product_season')->insert([
            'product_id' => 7, 
            'season_id' => 2,  
        ]);

        // ブドウに夏と秋を関連付け
        DB::table('product_season')->insert([
            'product_id' => 8, 
            'season_id' => 2,  
        ]);

        DB::table('product_season')->insert([
            'product_id' => 8, 
            'season_id' => 3,  
        ]);

        // バナナに夏を関連付け
         DB::table('product_season')->insert([
            'product_id' => 9, 
            'season_id' => 2,  
        ]);


         // メロンに春と夏を関連付け
         DB::table('product_season')->insert([
            'product_id' => 10, 
            'season_id' => 1,  
        ]);

        DB::table('product_season')->insert([
            'product_id' => 10, 
            'season_id' => 2,  
        ]);













    }
}
