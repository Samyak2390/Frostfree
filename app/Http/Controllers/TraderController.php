<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TraderController extends Controller
{
    public function index(){
        $menu_active=1;
        return view('trader.index', compact('menu_active'));
    }
}
