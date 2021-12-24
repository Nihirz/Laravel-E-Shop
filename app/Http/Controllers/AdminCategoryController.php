<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
// use DB;

class AdminCategoryController extends Controller
{
    public function adminCategory(){
        $categorys = category::get();
        return view('adminCategory',compact('categorys'));
    }

    public function add_category()
    {
        return view('addcategory');
    }
    public function store_categorys(Request $request)
    { 
         // dd($request);
        $categorys = new category();
        $categorys->catname =$request->input('catnames');      
    
        $categorys->save();
        
        return redirect()->route('admin.category')->with('success', 'category Inserted Successfully!');
    }
      public function edit_category(Request $request,$id)
    {
        $categorys =category::where('id',$id)->first();
        return view('editAdminCategory',compact('categorys'));
    }
    public function update_category(Request $request)
    {
        $categorys =category::find($request->id);
        $categorys->catname =$request->input('catname');
        $categorys->save();
        return redirect()->route('admin.category')->with('success', 'Product Updated Successfully!');
    }



     public function delete_category($id)
    {
        category::where('id',$id)->delete();
        return redirect()->route('admin.category')->with('warning','Product Deleted successfully!');
    }
}
