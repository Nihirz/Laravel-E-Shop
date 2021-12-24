<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use DB;

class AdminContactController extends Controller
{
    public function admin_contact()
    {
        $contact =Contact::get();
        return view('AdminContact',compact('contact'));
    }
    public function edit_contact(Request $request ,$id)
    {
        $contact=Contact::where('id',$id)->first();
        return view('editAdminContact',compact('contact'));
    }
    public function update_contact(Request $request)
    {
       
        $contact =Contact::find($request->id);
        $contact->address =$request->input('address');
        $contact->phoneno =$request->input('phoneno');
        $contact->email =$request->input('email');
        
        $contact->save();
        return redirect()->route('admin.contact')->with('success', 'edit product Updated Successfully!');
    }
}
