<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redis;
use App\AdminProducts;
use App\category;

class AdminProductsController extends Controller
{
    public function admin_products()
    {
        $products = AdminProducts::get();
        return view('adminProducts',compact('products'));

    }
    public function add_products()
    {
        $cname = category::get() ;
        return view('addProducts',compact('cname'));
    }
    public function store_products(Request $request){
      
      // data insert
       $product = new AdminProducts();
       $product->name =$request->input('name');      
       $product->description =$request->input('description');
       $product->price =$request->input('price');
       $product->cname=$request->input('cname');

       if($request->hasfile('image'))
       {
           $file = $request->file('image');
           $imageName = time().'.'.$request->image->getClientOriginalExtension();
           $request->image->move(public_path('/uploads'), $imageName);
           $product->image = $imageName;
       }
       else
       {
           return $request;
           $product->image = '';
       }
       $product->save();
       $request->session()->flash('message','Data Uploded Successfully.');
       return redirect()->route('admin.products')->with('success', 'Product Inserted Successfully!');
   }
   public function edit_products(Request $request,$id)
   {
         $products=AdminProducts::where('id',$id)->first();
        $cname =category::get();
        return view('editProducts', compact('products','cname'));
   }
   public function update_products(Request $request)
   {
    $product =AdminProducts::find($request->id);
    $product->name =$request->input('name');
    $product->description =$request->input('description');
    
    $product->price =$request->input('price');
    $product->cname=$request->input('cname');
    

    if($request->hasfile('image'))
    {
        $file = $request->file('image');
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('/uploads'), $imageName);
        $product->image = $imageName;
    }
    else
    {
        $id = $request->id;
        $update = [  
        'name'=>$request->name,
       'description'=>$request->description,
       'price'=>$request->price,
       'cname'=>$request->cname,
       
 ];
 $file   = $request->file("image");
    if ($request->hasfile("image")) {
    $file->move("/upload", $file->getClientOriginalName());
    $update['image'] = $file->getClientOriginalName();
    }

    AdminProducts::where('id', $id)->update($update);
    return redirect()->route('admin.products')->with('success', 'Product Updated Successfully!');


        return $request;
        $product->image = '';
    }
    $product->save();
    return redirect()->route('admin.products')->with('success', 'Product Updated Successfully!');
   }
   public function delete_products($id)
   {
    AdminProducts::where('id',$id)->delete();
    return redirect()->route('admin.products')->with('warning','Product Deleted successfully!');
   }



}
