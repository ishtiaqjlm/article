<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;
class MyResearchSeeder extends Seeder
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
            DB::table('my_research')->insert([

              'user_id' => rand (1 , 2),
              'cat_id' => rand (1 , 8),
              'subcat_id' => rand ( 1 , 8 ),
              //'tag_id' => rand ( 1 , 8 ),
              'day_id' => rand ( 1 , 4 ),
              'initial_research' => Str::random(5),
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
             ]);
        }
    }
}
