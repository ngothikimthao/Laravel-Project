<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Products')->insert([
            ['name' => 'Hp Pavilion 15.6inch Windows 10','id_cat' => '1','image' => '1.jpg','description'=>'Core i7-8750H Ram 16GB SSD 256GB GTX1050 FHD Win 10 Pro','status' => 1],
            ['name' => 'Microsoft Surface Laptop 2 Core i5 Ram 8GB SSD 128GB Win 10  ','id_cat' => '1','image' => '2.jpg','description'=>'Core i7-8750H Ram 16GB SSD 256GB GTX1050 FHD Win 10 Pro','status' => 1],
            ['name' => 'HP EliteBook 1050 Core i7-8750H Ram 16GB SSD 256GB GTX1050 FHD Win 10 Pro  ','id_cat' => '1','image' => '3.jpg','description'=>'Core i7-8750H Ram 16GB SSD 256GB GTX1050 FHD Win 10 Pro','status' => 1],
        ]);
    }
}
