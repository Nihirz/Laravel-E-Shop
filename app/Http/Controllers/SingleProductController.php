<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminProducts;
class SingleProductController extends Controller
{

    public function s_product(Request $request,$id)
    {
        $product = AdminProducts::get();
        return view('singleproduct',compact('product'))
    }
}
