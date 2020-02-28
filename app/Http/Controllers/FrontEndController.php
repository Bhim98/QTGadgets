<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{

    public function Aboutus()
    {
        return view('Aboutus');
    }
    public function Services()
    {
        return view('Services');
    }
    public function Contact()
    {
        return view('Contact');
    }

    public function Shop()
    {
        return view('Shop');
    }
}
