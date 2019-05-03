<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('Users')->insert([
        	['name' => 'admin','email'=>'admin@gmail.com','password'=>'12345','address'=>'Da Nang','avata'=>'admin.jpg','status'=>1],
            ['name' => 'thao.ngo','email'=>'thao.ngo@gmail.com','password'=>'thao.ngo','address'=>'Quang Binh','avata'=>'thaongo.jpg','status'=>1],
            ['name' => 'mong.ho','email'=>'mong.ho@gmail.com','password'=>'mong.ho','address'=>'Quang Tri','avata'=>'mongho.jpg','status'=>1],
            ['name' => 'ti.nguyen','email'=>'ti.nguyen@gmail.com','password'=>'ti.nguyen','address'=>'Qunag Tri','avata'=>'tinguyen.jpg','status'=>1],
            ['name' => 'quyen.tran','email'=>'quyen.tran@gmail.com','password'=>'quyen.tran','address'=>'Da Nang','avata'=>'quyentran.jpg','status'=>1],
           
        ]);
    }
}
