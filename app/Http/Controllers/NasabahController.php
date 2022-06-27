<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tunai;


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


    public function nasabahTransferSaldo (Request $request) {
        $balancePenerima = DB::table('rekenings')
        ->where('no_rekening', '=', $request->no_rekening)
        ->select('saldo')
        ->get()
        ->first()
        ->saldo;
        $newBalancePenerima = $balancePenerima + $request->jumlah;  

        $balancePengirim = DB::table('rekenings')
        ->where('nasabah_id', '=', auth()->user()->id)
        ->select('saldo')
        ->get()
        ->first()
        ->saldo;

        $newBalancePengirim = $balancePengirim - $request->jumlah;

        // dd($newBalancePengirim . ' ' . $balancePengirim , $newBalancePenerima . ' ' . $balancePenerima);
        // get user id via rekening
        $userId = DB::table('rekenings')
        ->where('no_rekening', '=', $request->no_rekening)
        ->select('nasabah_id')
        ->get();

        // get user rekening
        $userRekening = DB::table('rekenings')
        ->where('nasabah_id', '=', auth()->user()->id)
        ->select('no_rekening')
        ->get()
        ->first()->no_rekening;


        DB::update('update rekenings set saldo = ? where no_rekening = ?', [
            $newBalancePenerima,
            $request->no_rekening
        ]);
        DB::update('update rekenings set saldo = ? where no_rekening = ?', [
            $newBalancePengirim,
            $userRekening
        ]);
        // insert data
        $transfer = new Transfer;
        $transfer->pengirim_id =  auth()->user()->id;
        $transfer->penerima_id =  $userId[0]->nasabah_id;
        $transfer->jumlah = $request->jumlah;
        $transfer->save();
        return redirect()->back()->with('success', 'Berhasil melakukan transfer saldo');
    }

    
}
