<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        	['content' => 'Máy tính dùng một năm','status'=>1],
            ['content' => 'Máy tính mới chưa dùng','status'=>1],
        ]);
    }
}
