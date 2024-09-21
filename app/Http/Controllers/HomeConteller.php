<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeConteller extends Controller
{
    //index
    public function index(){
            return view('Layouts.Home');
    }
}
