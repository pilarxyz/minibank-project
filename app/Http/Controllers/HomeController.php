<?php
   
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
   
class HomeController extends Controller
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
        return view('home');
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tellerHome()
    {
        return view('teller.tellerHome', [
            "title" => "Teller"
        ]);
    }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {   
        $employees = User::where('type','1')->orWhere('type','2')->orWhere('type','3')->get();
        return view('admin.adminHome', compact('employees'), [
            "title" => "Admin"
        ]);
    }
}