<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller

{
    public function index()
    {
        return view('p1-js2.profile');
    }
}
