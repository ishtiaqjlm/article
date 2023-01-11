<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ArticleTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1; $i <= 30; $i++) {
            DB::table('article_tags')->insert([
              'tag_id' => rand ( 1 , 13 ),
              'article_id' => rand ( 1 , 10 ),
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
              ]);
        }
    }
}
