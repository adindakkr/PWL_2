<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobiController extends Controller
{
    public function index()
    { 
        return view('p4.hobi'); 
    }
    
}
