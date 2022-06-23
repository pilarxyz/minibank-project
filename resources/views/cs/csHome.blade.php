{{-- @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
   
                <div class="card-body">
                    You are a CS User.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.main')

@section('container')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Of Customers</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>NIK</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>NIK</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        {{-- @foreach ($nasabahs as $nasabah)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $nasabah->nama }}</td>
                            <td>{{ $nasabah->nik }}</td>
                            <td>{{ $nasabah->alamat }}</td>
                            <td>{{ $nasabah->jenis_kelamin }}</td>
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                            </td>
                        </tr> --}}
                        <tr>
                            <td>Rika Nuraini</td>
                            <td>5246962257416887</td>
                            <td>Karanganyar</td>
                            <td>11/02/2015</td>
                            <td>76250000</td>
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Betania Mardhiyah</td>
                            <td>5344632843072665</td>
                            <td>Klaten</td>
                            <td>09/02/20</td>
                            <td>102312000</td>
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Upik Latupono</td>
                            <td>533358141665635132</td>
                            <td>Surakarta</td>
                            <td>12/02/1019</td>
                            <td>242357000</td>
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Praba Winarno</td>
                            <td>544345516816754732</td>
                            <td>Sukoharjo</td>
                            <td>08/08/2018</td>
                            <td>33987500</td>
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Emong Wacana</td>
                            <td>5174782682955603</td>
                            <td>Sukohrajo</td>
                            <td>01/03/20</td>
                            <td>543890000</td>
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumari Setiawan</td>
                            <td>5583494788413093</td>
                            <td>Sragen</td>
                            <td>12/05/2021</td>
                            <td>185930000</td>
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Faizah Hartati</td>
                            <td>5554541402086135</td>
                            <td>Karanganyar</td>
                            <td>10/09/2014</td>
                            <td>631452500</td>
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Safina Hastuti</td>
                            <td>508355269750029656</td>
                            <td>Boyolali</td>
                            <td>09/07/2015</td>
                            <td>314525500</td>
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Dalima Rahmawati</td>
                            <td>5114424525765143</td>
                            <td>Klaten</td>
                            <td>08/06/2021</td>
                            <td>89750000</td>
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Hamzah Pradana</td>
                            <td>5282835185681688</td>
                            <td>Surakarta</td>
                            <td>08/03/2017</td>
                            <td>431987500</td>
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Kuncara Nashiruddin</td>
                            <td>5314429795517595</td>
                            <td>Boyolali</td>
                            <td>03/12/2021</td>
                            <td>118954500</td>
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Bakti Jailani</td>
                            <td>5104964267634260</td>
                            <td>Karanganyar</td>
                            <td>08/11/2016</td>
                            <td>793451500</td>
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Hasta Putra</td>
                            <td>5388125798166795</td>
                            <td>Sragen</td>
                            <td>12/07/2020</td>
                            <td>251897500</td>
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tristan Hans Pratama</td>
                            <td>33232934743</td>
                            <td>Pekalongan</td>
                            <td>17/09/2019</td>
                            <td>2950000</td>
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Yunita Melani</td>
                            <td>5324622636546811</td>
                            <td>Surakarta</td>
                            <td>10/05/2017</td>
                            <td>455590000</td>
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Nabila Mardhiyah</td>
                            <td>5532002460358502</td>
                            <td>Sragen</td>
                            <td>12/12/2021</td>
                            <td>2975400000</td>
                            <td>
                                <a href="#" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection