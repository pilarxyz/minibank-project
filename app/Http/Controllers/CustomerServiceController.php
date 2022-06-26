<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasabah;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
        $users = DB::table('users')
        ->join('nasabahs', 'users.id', '=', 'nasabahs.user_id')
        ->select('users.id', 'users.name', 'nasabahs.nik', 'nasabahs.gender','nasabahs.address', 'nasabahs.born_place', 'nasabahs.phone', 'nasabahs.born_date', 'nasabahs.job')
        ->get();
        
        return view('cs.csHome', [
            "title" => "CustomerService",
            "users" => $users
        ]);
    }

    public function create()
    {
        return view('cs.csCreate', [
            "title" => "CustomerService"
        ]);
    }

    public function store(Request $request)
    {
        $user = User::insertGetId([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]); 
                
        // get user id
        $nasabah = Nasabah::create([
            'user_id' => $user,
            'address' => $request['address'],

            'phone' => $request['phone'],
            'nik' => $request['nik'],
            'no_rek' => $request['no_rek'],
            'gender' => $request['gender'],
            'born_date' => $request['born_date'],
            'born_place' => $request['born_place'],
            'job' => $request['job'],
        ]);
        // $nasabah = new Nasabah;
        // $nasabah->password = bcrypt($request['password']);
        // $nasabah->phone = $request['phone'];
        // $nasabah->nik = $request['nik'];
        // $nasabah->born_place = $request['born_place'];
        // $nasabah->born_date = $request['born_date'];
        // $nasabah->address = $request['address'];
        // $nasabah->job = $request['job'];
        // $nasabah->save();
        return redirect('cs/create');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $nasabah = Nasabah::where('user_id', $id)->first();
        return view('cs.csEdit', [
            "title" => "CustomerService"
        ])->with('user', $user)->with('nasabah', $nasabah);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request['name'];
        $user->save();
        
        $nasabah = Nasabah::where('user_id', $id)->first();
        $nasabah->address = $request['address'];
        $nasabah->gender = $request['gender'];
        $nasabah->phone = $request['phone'];
        $nasabah->nik = $request['nik'];
        $nasabah->born_place = $request['born_place'];
        $nasabah->born_date = $request['born_date'];
        $nasabah->job = $request['job'];
        $nasabah->save();
        return redirect('cs/home');
    }

    public function destroy($id)
    {
        User::destroy($id);
        Nasabah::where('user_id', $id)->delete();
        return redirect('cs/home');
    }
}
