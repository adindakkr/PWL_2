<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;

class ArtikelModelController extends Controller
{
    public function index()
    {
        $data = ArtikelModel::all();
        return view('artikeladinda')
            ->with('art', $data);
    }
}
