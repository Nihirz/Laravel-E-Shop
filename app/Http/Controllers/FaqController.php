<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminFaq;

class FaqController extends Controller
{
    public function faq_c()
    {
        $faq =AdminFaq::get();
        return view('faq',compact('faq'));
    }
}
