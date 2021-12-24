<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Social;

class AdminSocialController extends Controller
{
    public function admin_social()
    {
        $social = Social::get();
        return view('adminSocial',compact('social'));
    }
    public function edit_social(Request $request,$id)
    {
        $social=Social::where('id',$id)->first();
        return view('editAdminSocial',compact('social'));
    }
    public function update_social(Request $request)
    {
        
        $socials =Social::find($request->id);
        $socials->facebook=$request->input('facebook');
        $socials->instagram=$request->input('instagram');
        $socials->twitter=$request->input('twitter');
        
        $socials->save();
        return redirect()->route('admin.social')->with('success', 'edit product Updated Successfully!');
    }
}
