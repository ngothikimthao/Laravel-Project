<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	
    protected $table ='categories';
    protected $filable=['id','name'];
    public $timestamps=true;
    //Du dung 2 truong created and updated 
    public function Products(){
       return $this->hasMany('App\Product');
    }
}