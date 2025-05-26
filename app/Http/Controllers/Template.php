<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Template extends Controller
{
    public function index ()
    {
        return view('template');
    }
}
