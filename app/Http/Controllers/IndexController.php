<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\AdminProducts;
use App\Countpage;

class IndexController extends Controller
{
    public function index()
    {
        $slider =Slider::get();
        $products=AdminProducts::get();

// 
        $viewspage=Countpage::latest()->paginate(5);
        Countpage::increment('views');
     
// 
        return view('index',compact('slider','products','viewspage'));
    }

}
