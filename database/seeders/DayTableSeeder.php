<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;
class DayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1; $i <= 15; $i++) {
          if($i==1 || $i==3 || $i==7 || $i==15){ 
              DB::table('days')->insert([
                'days' => $i,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                ]);
            }  
        }
    }
}
