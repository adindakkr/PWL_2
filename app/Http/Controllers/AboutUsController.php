<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        return "
        SEJARAH EDUCA STUDIO<br>
        It was started by two PC game products, they were Marbel and Shoot Empire (as the first winner of Game Competition 2008).<br>
        Later on, the founder decided to take it more professional by establishing Educa Studio on 1st April 2012. <br>
        At that moment, we only focused on Edu PC Games. Later, in 2012, we plunged into Mobile Apps and Games. <br>
        In 2013, we expanded into broader mobile platforms such as Windows Phone and Apple Store (iOS). <br>
        We have a lot of sucessul IP such as Marbel for Educational Games for Kids, Riri for Interactive Story Books, Kabi for Moslem Kids, Kolak for Interactive Kids Song. In 2017, its amazing year we have a lot of platform to build quality content and expanding our company into merchandising, board games, interactive animation and teacher platform.
        ";
    }
}
