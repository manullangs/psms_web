<?php

namespace App\Http\Controllers;

use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('player.index', compact('players'));
    }
    
}