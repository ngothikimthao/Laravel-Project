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
        	['id_user'=>2,'content' => 'Máy tính dùng một năm','status'=>1],
            ['id_user'=>3,'content' => 'Máy tính mới chưa dùng','status'=>1],
        ]);
    }
}
