<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminFilterGalleryllery;
use App\Gallery;

class AdminFilterGalleryController extends Controller
{
    public function index()
    {
        $shop=Gallery::where(['category'=>1])->get();
        $shops=Gallery::where(['category'=>2])->get();
       return view('AdminFGallery',compact('shop','shops'));
    }
    public function add_f_gallery()
    {
        return view('add_f_gallery');
    }
    public function store(Request $request)
    {

        $product->cname=$request->input('cname');

       if($request->hasfile('image'))
       {
           $file = $request->file('image');
           $imageName = time().'.'.$request->image->getClientOriginalExtension();
           $request->image->move(public_path('/uploads'), $imageName);
           $product->image = $imageName;
       }
       else
       {
           return $request;
           $product->image = '';
       }
       $product->save();
       $request->session()->flash('message','Data Uploded Successfully.');
       return redirect()->route('admin.products')->with('success', 'Product Inserted Successfully!');
    }
}
