<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\team;

class AboutController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function get_team()
    {
        $team = team::get();
        return view('about',compact('team'));
    }
}
