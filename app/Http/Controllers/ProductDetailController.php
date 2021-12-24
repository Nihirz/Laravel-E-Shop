<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminProducts;
use App\category;

class ProductDetailController extends Controller
{
     public function detail_viewcategorys(Request $request,$id)
    {
        $pds=AdminProducts::where('cname',$id)->get();
        $category=category::get();
        // dd($pds);
        return view('view_products',compact('pds','category'));
    }
  
  public function detailpro($id)
  {
    $view=AdminProducts::where('id',$id)->get();
    return view('singlepro',compact('view'));
  }
}
