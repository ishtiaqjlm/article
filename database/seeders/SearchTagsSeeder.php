<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SearchTagsSeeder extends Seeder
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

            DB::table('search_tags')->insert([
              'search_id' => rand ( 1 , 8 ),
              'tag_id' => rand ( 1 , 8 ),
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
