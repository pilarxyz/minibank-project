<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TellerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('teller.tellerHome', [
            "title" => "Teller"
        ]);
    }

    public function balance()
    {
        return view('teller.tellerBalance', [
            "title" => "Teller"
        ]);
    }
    
}
