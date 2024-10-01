<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function navbar()
    {   
        $user = Auth::user();
        return view("master.blade",compact("user"));
    }}
