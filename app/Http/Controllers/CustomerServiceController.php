<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerServiceController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cs.csHome', [
            "title" => "CustomerService"
        ]);
    }

    public function create()
    {
        return view('cs.csCreate', [
            "title" => "CustomerService"
        ]);
    }
}
