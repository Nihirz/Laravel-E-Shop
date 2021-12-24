<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientQuery;

class AdminClientQueryController extends Controller
{
    public function client_query()
    {
        return view('AdminClientQuery');
    }
}
