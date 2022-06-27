<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransferController extends Controller
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

    public function getNasabahTransfer() {
        $send = DB::table('transfers')
        ->join('nasabahs', 'transfers.pengirim_id', '=', 'nasabahs.id')
        ->join('users', 'nasabahs.user_id', '=', 'users.id')
        ->join('nasabahs as nasabah_penerima', 'transfers.penerima_id', '=', 'nasabah_penerima.id')
        ->join('users as user_penerima', 'nasabah_penerima.user_id', '=', 'user_penerima.id')
        ->select('users.name as pengirim', 'user_penerima.name as penerima', 'transfers.jumlah', 'transfers.created_at')
        ->where('users.id', '=', auth()->user()->id)
        ->get();

        $receive = DB::table('transfers')
        ->join('nasabahs', 'transfers.penerima_id', '=', 'nasabahs.id')
        ->join('users', 'nasabahs.user_id', '=', 'users.id')
        ->join('nasabahs as nasabah_pengirim', 'transfers.pengirim_id', '=', 'nasabah_pengirim.id')
        ->join('users as user_pengirim', 'nasabah_pengirim.user_id', '=', 'user_pengirim.id')
        ->select('users.name as penerima', 'user_pengirim.name as pengirim', 'transfers.jumlah', 'transfers.created_at')
        ->where('users.id', '=', auth()->user()->id)
        ->get();

        // combine array
        $transfers = array_merge($send->toArray(), $receive->toArray());
        return $transfers;
    }

    public function getBankTransfer() {
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
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function show(Transfer $transfer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function edit(Transfer $transfer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transfer $transfer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transfer $transfer)
    {
        //
    }
}
