<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        return "
        <ul>
            <li><a href='/program/karir'>https://www.educastudio.com/program/karir</a></li>
            <li><a href='/program/magang'>https://www.educastudio.com/program/magang</a></li>
             <li><a href='/program/KunjunganIndustri'>https://www.educastudio.com/program/kunjungan-industri</a></li>
        </ul>
        ";
    }
}
