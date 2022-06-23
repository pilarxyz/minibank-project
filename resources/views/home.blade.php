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
                                    <th>Nomor Rekening</th>
                                    <th>Nama</th>
                                    <th>Periode</th>
                                    <th>Mata Uang</th>
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
            </div>
        </div>
    </div>
</div> 
@endif

@endsection