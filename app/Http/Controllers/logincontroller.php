<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function getTrangchu(){
    	return view('Page.index');
    }

    public function getLogin()
    {
        return view('Customer.login');
    }

    public function getPost()
    {
        return view('Customer.post');
    }

}
