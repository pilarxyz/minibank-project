<?php
   
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
   
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
        $nasabah = new NasabahController;
        $users = $nasabah->index();

        $transfer = new TransferController;
        $transfers = $transfer->getNasabahTransfer();
        // dd($transfers, $users);
        $tunai = new TunaiController;
        $tunai_transfer = $tunai->getTunaiTransfer();


        return view('home', [
            "title" => "Home",
            "users" => $users[0],
            "transfers" => $transfers,
            "tunai_transfer" => $tunai_transfer
        ]);
    } 
    public function transfer()
    {
        return view('userTransfer', [
            "title" => "Home"
        ]);
    }

    public function mutasi()
    {
        $nasabah = new NasabahController;
        $users = $nasabah->index();

        $transfer = new TransferController;
        $transfers = $transfer->getNasabahTransfer();
        // dd($transfers, $users);
        $tunai = new TunaiController;
        $tunai_transfer = $tunai->getTunaiTransfer();

        return view('userMutasi', [
            "title" => "Home",
            "users" => $users[0],
            "transfers" => $transfers,  
            "tunai_transfer" => $tunai_transfer
        ]);
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