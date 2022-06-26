<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BuatAkunNasabah extends Controller
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
    
    public function store(Request $request)
    {
        $nasabah = new User;
        $nasabah->name = $request['name'];
        $nasabah->email = $request['email'];
        $nasabah->password = bcrypt($request['password']);
        $nasabah->type = $request['type'];
        $nasabah->save();
        return redirect('cs/create');
    }
    
}
