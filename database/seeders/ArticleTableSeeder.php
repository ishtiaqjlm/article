<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1; $i <= 10; $i++) { 
          DB::table('articles')->insert([
            'title' => Str::random(10),
            'description' => Str::random(100),
            'initial_research' => Str::random(5),
            'user_id' => rand ( 1 , 4 ),
            'cat_id' => rand ( 1 , 10 ),
            'subcat_id' => rand ( 1 , 10 ),
            'day_id' => rand ( 1 , 4 ),  
            //'created_at' => date('Y-m-d H:i:s'),
            //'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
