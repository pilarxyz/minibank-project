@extends('layouts.app')
 
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
 
                <div class="card-body">
                    @if(auth()->user()->is_admin == 3)
                    <a href="{{url('admin/routes')}}">Admin</a>
                    @else
                    <div class=”panel-heading”>Normal User</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> --}}
@if(auth()->user()->is_admin == 3)
    <a href="{{url('admin/routes')}}">Admin</a>
@else


{{-- Start Content --}}
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        
        <!-- Begin Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Default Card Example -->
                    <div class="card shadow mb-4 text-center">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Detail Account</h6>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Nama</th>
                                    <th>Nomor Rekening</th>
                                    <th>Jenis Rekening</th>
                                    <th>Jumlah Saldo</th>
                                </tr>
                                <tr>
                                    <td>{{$users->name}}</td>
                                    <td>{{$users->no_rekening}}</td>
                                    <td>{{$users->jenis_rekening}}</td>
                                    <td>Rp{{$users->saldo}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 text-center">
                    <h6 class="m-0 font-weight-bold text-primary">Nasabah Mutation</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Akun</th>
                                    <th>Jenis Transaksi</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tunai_transfer as $tunai)
                                <tr>
                                    <td>{{$tunai->name}}</td>
                                    <td>{{$tunai->jenis_transaksi}}</td>
                                    <td>{{$tunai->jumlah}}</td>
                                    <td>{{$tunai->created_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3 text-center">
                    <h6 class="m-0 font-weight-bold text-primary">Transfer Mutation</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Pengirim</th>
                                    <th>Penerima</th>
                                    <th>Jenis Transaksi</th>
                                    <th>Jumlah Transfer</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transfers as $transfer)
                                <tr>
                                    <td>{{$transfer->pengirim}}</td>
                                    <td>{{$transfer->penerima}}</td>
                                    <td>{{$transfer->pengirim != $users->name ? "Debit" : "Kredit" }}</td>
                                    <td>{{$transfer->jumlah}}</td>
                                    <td>{{$transfer->created_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Default Card Example -->
            <!-- <div class="card shadow mb-4 text-center">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Balance</h6>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Saldo Awal</th>
                            <th>Total Debit</th>
                            <th>Total Kredit</th>
                            <th>Saldo Akhir</th>
                        </tr>
                        <tr>
                            <td>300.000</td>
                            <td>350.000</td>
                            <td>3.000.000</td>
                            <td>2.950.000</td>
                        </tr>
                    </table>
                </div>
            </div> -->
        </div>
    </div>
</div> 
@endif

@endsection