<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminProducts;
use App\category;

class ProductController extends Controller
{
    public function products()
    {
    $posts =AdminProducts::latest()->paginate(4); 
    $category = category::get();
    return view('products',compact('posts','category'));    
    }

  
    
}
