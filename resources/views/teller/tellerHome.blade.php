{{-- @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
   
                <div class="card-body">
                    You are a Teller User.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.main')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Default Card Example -->
        <div class="card shadow mb-4 text-center">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Search Account</h6>
            </div>
            <div class="card-body">
                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search col-12">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search Account..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

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
                                <td>Nomor Rekening</td>
                                <td>Nama</td>
                                <td>Periode</td>
                                <td>Mata Uang</td>
                            </tr>
                            <tr>
                                <td>33232934743</td>
                                <td>Tristan Hans Pratama</td>
                                <td>17/09/2019 - 17/09/2022</td>
                                <td>IDR</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 text-center">
                <h6 class="m-0 font-weight-bold text-primary">Account Mutation</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Debit</th>
                                <th>Kredit</th>
                                <th>Saldo Akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2019/09/17</td>
                                <td>Setoran Tunai</td>
                                <td class="text-right">-</td>
                                <td class="text-right">300.000</td>
                                <td class="text-right">300.000</td>
                            </tr>
                            <tr>
                                <td>2019/10/10</td>
                                <td>Setoran Tunai</td>
                                <td class="text-right">-</td>
                                <td class="text-right">500.000</td>
                                <td class="text-right">800.000</td>
                            </tr>
                            <tr>
                                <td>2019/10/30</td>
                                <td>Penarikan Tunai</td>
                                <td class="text-right">200.000</td>
                                <td class="text-right">-</td>
                                <td class="text-right">600.000</td>
                            </tr>
                            <tr>
                                <td>2019/11/03</td>
                                <td>Penarikan Tunai</td>
                                <td class="text-right">150.000</td>
                                <td class="text-right">-</td>
                                <td class="text-right">450.000</td>
                            </tr>
                            <tr>
                                <td>2020/03/07</td>
                                <td>Setoran Tunai</td>
                                <td class="text-right">-</td>
                                <td class="text-right">1.500.000</td>
                                <td class="text-right">1.950.000</td>
                            </tr>
                            <tr>
                                <td>2021/05/21</td>
                                <td>Setoran Tunai</td>
                                <td class="text-right">-</td>
                                <td class="text-right">1.000.000</td>
                                <td class="text-right">2.950.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- Default Card Example -->
        <div class="card shadow mb-4 text-center">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detail Balance</h6>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Saldo Awal</td>
                        <td>Total Debit</td>
                        <td>Total Kredit</td>
                        <td>Saldo Akhir</td>
                    </tr>
                    <tr>
                        <td>300.000</td>
                        <td>350.000</td>
                        <td>3.000.000</td>
                        <td>2.950.000</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection