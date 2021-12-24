<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Query;
use App\Map;

class ContactController extends Controller
{
    public function contact()
    {
        $map = Map::get();
        return view('contact',compact('map'));
    }
   
    public function store_rec(Request $request){
      
        // data insert
         $rec = new Query();
         $rec->name =$request->input('name');      
         $rec->mail =$request->input('mail');
         $rec->message =$request->input('message');
         
         $rec->save();
         // $request->session()->flash('message','Data Uploded Successfully.');
         return redirect()->route('contact')->with('success', 'team Inserted Successfully!');
     }
    
}
