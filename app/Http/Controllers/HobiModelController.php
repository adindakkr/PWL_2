<?php

namespace App\Http\Controllers;

use App\Models\HobiModel;
use Illuminate\Http\Request;

class HobiModelController extends Controller
{
    public function index()
    {
        return view('p4.hobi', [
            'hobis' => HobiModel::all()
        ]);
    }
}
