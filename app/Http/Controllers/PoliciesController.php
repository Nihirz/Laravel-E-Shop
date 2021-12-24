<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliciesController extends Controller
{
    public function policy()
    {
        return view('privacy-policy');
    }
}
