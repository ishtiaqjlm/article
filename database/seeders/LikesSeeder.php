<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class LikesSeeder extends Seeder
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
            DB::table('likes')->insert([

              'user_id' => rand ( 1 , 4 ),
              'article_id' => rand ( 1 , 17 ),
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
             ]);
        }
    }
}
