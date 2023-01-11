<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;
class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1; $i <= 3; $i++) {
            DB::table('comments')->insert([
              'comment' => Str::random(10),
              'user_id' => rand ( 1 , 4 ),
              'article_id' => rand ( 1 , 10 )
              ]);
        }
    }
}
