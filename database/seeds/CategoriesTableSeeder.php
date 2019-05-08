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
            ['name' => 'Sách báo'],
            ['name' => 'Văn phòng phẩm'],
            ['name' => 'Đồ gia dụng'],
            ['name' => 'Thể thao'],
            ['name' => 'Thời trang'],
            ['name' => 'Khác'],
        ]);
    }
}
