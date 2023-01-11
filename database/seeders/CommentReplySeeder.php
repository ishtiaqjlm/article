<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;
class CommentReplySeeder extends Seeder
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
            DB::table('comment_reply')->insert([
              'replied_text' => Str::random(10),
              'user_id' => rand ( 1 , 4),
              'comment_id' => rand ( 1 , 3),
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
