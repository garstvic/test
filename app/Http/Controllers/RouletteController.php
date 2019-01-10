<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RouletteController extends Controller
{
    public function postWinPrize() {
        return view('roulette.win.prize');
    }    
}
