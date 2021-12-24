<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    public function gallery()
    {
    $gallery = Gallery::get();
    return view('gallery',compact('gallery'));
    }
        
}
