<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $products= Product::where('featured', true)->get();
        return view('welcome')->with('products', $products);
    }
}
