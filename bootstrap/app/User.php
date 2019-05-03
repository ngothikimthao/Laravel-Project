<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
    protected $table ='users';
    protected $filable=['name', 'email', 'password', 'avata','address', 'status'];
    public $timestamps=true;
    //Du dung 2 truong created and updated 
    public function Comments(){
       return $this->hasMany('App\Comment');
    }
    public function Posts(){
        return $this->hasMany('App\post');
    }
    public function Post_Product(){
        return $this->hasMany('App\Post_Product');
    }

}