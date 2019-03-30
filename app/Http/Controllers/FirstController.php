<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function new()
    {
        return view('new');
    }
    public function about()
    {
        return view('about');
    }
}
