<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Map;
use Illuminate\Support\Facades\DB;

class AdminMapController extends Controller
{
    public function admin_map()
    {
        $map =map::get();
        return view('adminMap',compact('map'));
    }
    public function edit_map(Request $request,$id)
    {
            $map=map::where('id',$id)->first();
            return view('editAdminMap',compact('map'));
    }
    public function update_map(Request $request)
    {
       
        $map =map::find($request->id);
        $map->map =$request->input('map');
        
        $map->save();
        return redirect()->route('admin.map')->with('success', 'edit product Updated Successfully!');
    }
}
