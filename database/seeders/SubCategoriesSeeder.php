<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert
        for ($i=1; $i <= 10; $i++) { 
          DB::table('subcategory')->insert([
            'name' => Str::random(10),
            'cat_id' => $i, 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
