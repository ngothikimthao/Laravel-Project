<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function proDetail()
    {
    	return view('productdetail');
    }

    public function getTrangDanhMuc()
    {
    	return view('pageCate');
    }

    public function getCategories($type)
    {
    	$sp_theoloai= Product::where('id_cat',$type) ->limit(3)->get();
        $loai = Category::all();
        $loai_sp = Category::where('id',$type)->first();
        return view('trangdanhmuc',compact('sp_theoloai','loai','loai_sp'));
    }

}
