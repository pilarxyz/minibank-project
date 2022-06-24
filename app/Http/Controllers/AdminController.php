<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
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
        $employees = User::where('type','1')->orWhere('type','2')->orWhere('type','3')->get();
        return view('admin.adminHome', compact('employees'), [
            "title" => "Admin"
        ]);
    }

    public function create()
    {
        return view('admin.adminCreate', [
            "title" => "Admin"
        ]);
    }

    public function config()
    {
        return view('admin.adminConfig', [
            "title" => "Admin"
        ]);
    }

}
