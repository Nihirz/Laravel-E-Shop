<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Illuminate\Support\Facades\DB;

class AdminSliderController extends Controller
{
    public function slider()
    {
        $slider = Slider::get();
        return view('adminSlider',compact('slider'));
    }
    public function add_slider()
    {
        return view('addAdminSlider');
    }
    public function store_slider(Request $request
    ){
      
        // data insert
         $slider = new Slider();
         $slider->title =$request->input('title');      
         $slider->longdescription =$request->input('longdescription');
         $slider->shortdescription=$request->input('shortdescription');
         if($request->hasfile('image'))
         {
             $file = $request->file('image');
             $imageName = time().'.'.$request->image->getClientOriginalExtension();
             $request->image->move(public_path('/uploads'), $imageName);
             $slider->image = $imageName;
         }
         else
         {
             return $request;
             $slider->image = '';
         }
         $slider->save();
         $request->session()->flash('message','Data Uploded Successfully.');
         return redirect()->route('admin.slider')->with('success', 'Product Inserted Successfully!');
     }
     public function edit_slider(Request $request)
     {
        $slider = Slider::first();
        return view('editSlider',compact('slider'));
     }
     public function update_slider(Request $request)
     {
        $slider =Slider::find($request->id);
        $slider->title =$request->input('title');
        $slider->longdescription =$request->input('longdescription');
        $slider->shortdescription =$request->input('shortdescription');
        
    
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $slider->image = $imageName;
        }
        else
        {
            $id = $request->id;
            $update = [  
            'title'=>$request->title,
           'longdescription'=>$request->longdescription,
           'shortdescription'=>$request->shortdescription,
           
     ];
     $file   = $request->file("image");
        if ($request->hasfile("image")) {
        $file->move("/upload", $file->getClientOriginalName());
        $update['image'] = $file->getClientOriginalName();
        }
    
        Slider::where('id', $id)->update($update);
        return redirect()->route('admin.slider')->with('success', 'Product Updated Successfully!');
    
    
            return $request;
            $slider->image = '';
        }
        $slider->save();
        return redirect()->route('admin.slider')->with('success', 'Product Updated Successfully!');
     }
     public function delete_slider($id){
        Slider::where('id',$id)->delete();
        return redirect()->route('admin.slider')->with('warning','Product Deleted successfully!');
     }
}
