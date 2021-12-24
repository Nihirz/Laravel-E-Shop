<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\adminlogo;
use DB;

class AdminLogoController extends Controller
{
    public function admin_logo()
    {
        $logo =adminlogo::get();
        return view('adminLogo',compact('logo'));
    }
    public function edit_logo(Request $request ,$id)
    {
        $logo=adminlogo::where('id',$id)->first();
        return view('editAdminlogo',compact('logo'));
    }
    public function update_logo(Request $request)
    {
        $logo =adminlogo::find($request->id);
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $logo->image = $imageName;
        }
        else
        {
            $id = $request->id;
        
     $file   = $request->file("image");
        if ($request->hasfile("image")) {
        $file->move("/upload", $file->getClientOriginalName());
        $update['image'] = $file->getClientOriginalName();
        }

        
        return redirect()->route('admin.logo')->with('success', 'Product Updated Successfully!');


            return $request;
            $logo->image = '';
        }
        $logo->save();
        return redirect()->route('admin.logo')->with('success', 'Product Updated Successfully!');

    }
    
}
