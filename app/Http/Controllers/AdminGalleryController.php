<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class AdminGalleryController extends Controller
{
    public function gallery()
    {   
        $gallery=Gallery::get();
        return view('AdminGallery',compact('gallery'));
    }
    public function add_new()
    {
        return view('AddNewImage');
    }
    public function store_image(Request $request)
    {
        $image = new Gallery();
        $image->category =$request->input('category');      
        if($request->hasfile('image'))
         {
             $file = $request->file('image');
             $imageName = time().'.'.$request->image->getClientOriginalExtension();
             $request->image->move(public_path('/uploads'), $imageName);
             $image->image = $imageName;
         }
         else
         {
             return $request;
             $image->image = '';
         }
         $image->save();
         $request->session()->flash('message','Data Uploded Successfully.');
         return redirect()->route('admin.gallery')->with('success');
    }
    public function edit_image(Request $request,$id)
    {
        $image = Gallery::first();
        return view('AdminEditGallery',compact('image'));
    }
    public function update_image(Request $request)
        {
            $image =Gallery::find($request->id);
        
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('/uploads'), $imageName);
                $image->image = $imageName;
            }
            else
            {
            $id = $request->id;
            $file = $request->file("image");
            if ($request->hasfile("image")) {
            $file->move("/upload", $file->getClientOriginalName());
            $update['image'] = $file->getClientOriginalName();
            }
        
            Gallery::where('id', $id)->update($update);
            return redirect()->route('admin.gallery')->with('success', 'image Updated Successfully!');
        
        
                return $request;
                $image->image = '';
            }
            $image->save();
            return redirect()->route('admin.gallery')->with('success', 'image Updated Successfully!');
           
     }


    public function delete_image($id)
    {
        Gallery::where('id',$id)->delete();
        return redirect()->route('admin.gallery')->with('warning','Product Deleted successfully!');
     }
}
