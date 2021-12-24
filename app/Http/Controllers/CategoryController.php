<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use category;

class CategoryController extends Controller
{
    public function category()
    {
        $category = category::get();
        return view('products',compact('category'));
    } 
}
