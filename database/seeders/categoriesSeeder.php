<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Categories;
use DB;
class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data
        
        for ($i=0; $i < 10; $i++) { 
          DB::table('category')->insert([
            'name' => Str::random(10),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
