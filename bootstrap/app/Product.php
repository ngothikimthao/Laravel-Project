<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
    protected $filable=['name', 'id_cat', 'image', 'description', 'status'];
    public $timestamps=true;
    //Du dung 2 truong created and updated 
    public function Categories(){
       return $this->belongsto('App\Category');
    }
}

