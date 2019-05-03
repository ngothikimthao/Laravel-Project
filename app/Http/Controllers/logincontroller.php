<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function getTrangchu(){
    	return view('index');
    }

    public function getLogin()
    {
        return view('login');
    }

    public function getPost()
    {
        return view('post');
    }

}
