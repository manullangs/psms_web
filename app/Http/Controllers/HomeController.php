<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {
        return view("homes.home");
    }
}