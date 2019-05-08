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
            ['name' => 'Iphone Xs Max 64gb Gold bản world chính hãng fpt','id_subcat' => '1','price'=>13700000000,'image' => '1.jpg','description'=>'Điện thaoij Iphone X','status' => 1],
            ['name' => 'Sony E4 dual 2s2s chữa cháy garb','id_cat' => '1','price'=>400000,'image' => '2.jpg|3.jpg','description'=>'Sony E4 dual 2s2s chữa cháy garb','status' => 1],
            ['name' => 'Galaxy j7 prime máy chính hãng samsung việt nam ','id_subcat' => '1','price'=>1400000,'image' => '4.jpg|5.jpg|6.jpg','description'=>'Galaxy j7 prime máy chính hãng samsung việt nam','status' => 1],
            ['name' => 'Samsung điện thoai j7 2016 ','id_subcat' => '1','price'=>1400000,'image' => '7.jpg|8.jpg','description'=>'Samsung điện thoai j7 2016','status' => 1],
            ['name' => 'Cần bán LG Q6 Trắng máy mới 99% nguyên zin','id_subcat' => '1','price'=>2000000,'image' => '9.jpg|10.jpg|11.jpg|12.jpg','description'=>'Cần bán LG Q6 Trắng máy mới 99% nguyên zin','status' => 1],
            ['name' => 'Cần bán máy Xiaomi Mi3 máy xài tốt bao test luôn ','id_subcat' => '1','price'=>3400000,'image' => '16.jpg|17.jpg|18.jpg','description'=>'Cần bán máy Xiaomi Mi3 máy xài tốt bao test luôn','status' => 1],
            ['name' => 'Nokia 6233 chính hãng bao xài ','id_subcat' => '1','price'=>200000,'image' => '19.jpg|20.jpg|21.jpg','description'=>'Nokia 6233 chính hãng bao xài','status' => 1],
            ['name' => 'Xiaomi Mi 5x 32 GB vàng hồng','id_subcat' => '1','price'=>400000,'image' => '13.jpg|14.jpg|15.jpg','description'=>'Xiaomi Mi 5x 32 GB vàng hồng','status' => 1],
            ['name' => 'Nokia X1-01 Xanh 2Sim 2Sóng như mới 105%Zin 8110','id_subcat' => '1','price'=>200000,'image' => '22.jpg|23.jpg|24.jpg','description'=>'Nokia X1-01 Xanh 2Sim 2Sóng như mới 105%Zin 8110','status' => 1],
        ]);
    }
}
