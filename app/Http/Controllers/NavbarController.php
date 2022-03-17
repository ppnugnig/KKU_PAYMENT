<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    function navbar(){
        return view('navbar');
    }
}
