<?php

use Illuminate\Database\Seeder;

class Post_ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_product')->insert([
        	['id_post' => 1,'id_prod'=>1],
            ['id_post' => 1,'id_prod'=>2],
        ]);
    }
}
