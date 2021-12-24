<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function blog()
    {
        $blog = Blog::get();
        return view('blog',compact('blog'));
    }
    public function detail_blog(Request $request,$id)
    {
        $blog =Blog::where('id',$id)->first();
        return view('blog-detail',compact('blog'));
    }
}
