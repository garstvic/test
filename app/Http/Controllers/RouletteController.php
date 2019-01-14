<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Prize;
use App\Category;
use DB;

class RouletteController extends Controller
{
    public function postWinPrize() {
        $prize = Prize::inRandomOrder()->first();
        $view = 'roulette.win.';
        
        switch ($prize->prizeCategory->category->name) {
            case 'gift':
                $view = $view.'gift';
                break;
            case 'loyalty':
                $view = $view.'loyalty';
                break;
            case 'money':
                $view = $view.'money';
                break;
        }
        
        return view($view, [
            'prize' => $prize,
        ]);
    }    
}
