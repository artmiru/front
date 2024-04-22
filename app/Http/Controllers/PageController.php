<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index()
    {
        return view('main');
    }

    public function drawing()
    {
        return view('drawing');
    }

    public function oilColor()
    {
        return view('oilcolor');
    }

    public function waterColor()
    {
        return view('watercolor');
    }
}
