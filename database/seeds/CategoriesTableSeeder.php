<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Categories')->insert([
        	['name' => 'Đồ điện tử'],
            ['name' => 'Đồ gia dụng'],
            ['name' => 'Đồ dùng học sinh'],
            ['name' => 'Thời trang'],
            ['name' => 'Thể thao'],
        	['name' => 'Phụ kiện']
        ]);
    }
}
