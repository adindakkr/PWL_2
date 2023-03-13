<?php

namespace App\Http\Controllers;

use App\Models\MatkulModel;
use Illuminate\Http\Request;

class MatkulModelController extends Controller
{
    public function index()
    {
        return view('p4.matkul', [
            'matkul' => MatkulModel::all()
        ]);
    }
}
