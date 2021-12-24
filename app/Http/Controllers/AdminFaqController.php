<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminFaq;

class AdminFaqController extends Controller
{
    public function admin_faq()
    {
        $faq=AdminFaq::all();
        return view('AdminFaq',compact('faq'));
    }
    public function add_faq()
    {
        return view('AddAdminFaq');
    }
    public function store_faq(Request $request)
    {
        $faq=new AdminFaq();
        $faq->question =$request->input('question');      
        $faq->answer =$request->input('answer');
        $faq->save();
        return redirect()->route('admin.faq')->with('success', 'Product Inserted Successfully!');
    }
    public function edit_faq(Request $request,$id)
    {
        $faq =AdminFaq::where('id',$id)->first();
        return view('editAdminFaq',compact('faq'));
    }
    public function update_faq(Request $request)
    {
        $faq =AdminFaq::find($request->id);
        $faq->question =$request->input('question');      
        $faq->answer =$request->input('answer');
        $faq->save();
        return redirect()->route('admin.faq')->with('success', 'Product Updated Successfully!');
    }


    public function delete_faq(Request $request,$id)
    {
        AdminFaq::where('id',$id)->delete();
        return redirect()->route('admin.faq')->with('warning','Product Deleted successfully!');
     }
}
