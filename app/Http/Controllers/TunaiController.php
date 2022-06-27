<?php

namespace App\Http\Controllers;

use App\Models\Tunai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TunaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getTunaiTransfer() {
        $tunai = DB::table('tunais')
        ->join('users', 'tunais.user_id', '=', 'users.id')
        ->where('user_id', '=', auth()->user()->id)
        ->select('users.name', 'tunais.jumlah', 'tunais.created_at', 'tunais.jenis_transaksi')
        ->get();
        return $tunai;
    }

    public function balanceWithdrawal(Request $request) {
        $balance = DB::table('rekenings')
        ->where('no_rekening', '=', $request->no_rekening)
        ->select('saldo')
        ->get();

        $newBalance = $balance[0]->saldo - $request->jumlah;
        // get user id via rekening
        $userId = DB::table('rekenings')
        ->where('no_rekening', '=', $request->no_rekening)
        ->select('nasabah_id')
        ->get();


        DB::update('update rekenings set saldo = ? where no_rekening = ?', [
            $newBalance,
             $request->no_rekening
        ]);
        // insert data
        $tunai = new Tunai;
        $tunai->user_id =  $userId[0]->nasabah_id;
        $tunai->jumlah = $request->jumlah;
        $tunai->jenis_transaksi = 'Tarik Tunai';
        $tunai->save();

        return redirect()->back()->with('success', 'Berhasil melakukan tarik tunai');
    }

    public function balanceDeposit(Request $request) {
        $balance = DB::table('rekenings')
        ->where('no_rekening', '=', $request->no_rekening)
        ->select('saldo')
        ->get();

        $newBalance = $balance[0]->saldo + $request->jumlah;
        // get user id via rekening
        $userId = DB::table('rekenings')
        ->where('no_rekening', '=', $request->no_rekening)
        ->select('nasabah_id')
        ->get();


        DB::update('update rekenings set saldo = ? where no_rekening = ?', [
            $newBalance,
             $request->no_rekening
        ]);

        // insert data
        $tunai = new Tunai;
        $tunai->user_id =  $userId[0]->nasabah_id;
        $tunai->jumlah = $request->jumlah;
        $tunai->jenis_transaksi = 'Setor Tunai';
        $tunai->save();

        return redirect()->back()->with('success', 'Berhasil melakukan setor tunai');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tunai  $tunai
     * @return \Illuminate\Http\Response
     */
    public function show(Tunai $tunai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tunai  $tunai
     * @return \Illuminate\Http\Response
     */
    public function edit(Tunai $tunai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tunai  $tunai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tunai $tunai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tunai  $tunai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tunai $tunai)
    {
        //
    }
}
