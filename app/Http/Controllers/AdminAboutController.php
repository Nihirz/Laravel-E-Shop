<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Validator;
class AdminAboutController extends Controller
 {
//     public function admin(){
//         return view('admin');
//     }
    public function aboutus()
    {
        $about=About::get();
        return view('aboutus',compact('about'));
    }
     public function edit_about(Request $request ,$id)
    {
        $about=About::where('id',$id)->first();
        return view('editAdminAbout',compact('about'));
    }
    public function update_about(Request $request)
    {
        $about =About::find($request->id);
        $about->description =$request->input('description');
        $about->shortdescription =$request->input('shortdescription');
        

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $about->image = $imageName;
        }
        else
        {
            $id = $request->id;
            $update = [  
            'description'=>$request->description,
           'shortdescription'=>$request->shortdescription,
           
     ];
     $file   = $request->file("image");
        if ($request->hasfile("image")) {
        $file->move("/upload", $file->getClientOriginalName());
        $update['image'] = $file->getClientOriginalName();
        }

        About::where('id', $id)->update($update);
        return redirect()->route('aboutus')->with('success', 'edit product Updated Successfully!');


            return $request;
            $about->image = '';
        }
        $about->save();
        return redirect()->route('aboutus')->with('success', 'edit product Updated Successfully!');

    }
   
}
