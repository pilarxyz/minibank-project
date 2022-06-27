<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NasabahController extends Controller
{
    
    public function index() {
        $nasabah = DB::table('nasabahs')
        ->join('rekenings', 'nasabahs.id', '=', 'rekenings.nasabah_id')
        ->join('users', 'nasabahs.user_id', '=', 'users.id')
        ->select('name', 'no_rekening', 'jenis_rekening', 'saldo')
        ->where('users.id', '=', auth()->user()->id)
        ->get();
        return $nasabah;
    }
}
