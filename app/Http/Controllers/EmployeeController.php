<?php
   
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
   
class EmployeeController extends Controller
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

    public function store(Request $request)
    {   
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'type' => $request['type'],
        ]);
        return redirect('admin/home');
    }

}