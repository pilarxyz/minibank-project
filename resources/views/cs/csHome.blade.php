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
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Nomor Rekening</th>
                            <th>Jenis Rekening</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Nomor Rekening</th>
                            <th>Jenis Rekening</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $nasabah)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $nasabah->name }}</td>
                            <td>{{ $nasabah->nik }}</td>
                            <td>{{ $nasabah->no_rekening }}</td>
                            <td>{{ $nasabah->jenis_rekening }}</td>
                            <td>{{ $nasabah->phone }}</td>
                            <td>
                            <a data-toggle="modal" data-target="#detailModal{{$nasabah->id}}" class="btn btn-info btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-info"></i>
                                    </span>
                                    <span class="text">Detail</span>
                                </a>
                                <button type="button" data-toggle="modal" data-target="#editModal{{$nasabah->id}}" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </button>

                                <a href="{{ route('cs.destroy', $nasabah->id) }}" class="btn btn-danger btn-icon-split" onclick="return confirm('Hapus Nasabah Ini?')">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a>

                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@foreach ($users as $nasabah)
        <div class="modal fade" id="editModal{{$nasabah->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered card container py-4" role="document">
                <div class="card-header mb-3">
                    <h6 class="m-0 font-weight-bold text-primary"> Edit Nasabah</h6>
                </div>
                <div class="modal-content card-body">
                    <form  action="{{ route('cs.update', $nasabah->id) }}" method="POST">
                        {!! csrf_field() !!}
                        <div class="row mb-1">
                            <label for="">Nama Lengkap</label> <br>
                        </div>
                        <div class="row mb-4">
                            <input type="hidden" class="form-control bg-light border-0 small" name="id" value="{{ $nasabah->id }}">
                            <input type="text" class="form-control bg-light border-0 small col-11" name="name" value="{{ $nasabah->name }}">
                        </div>
                        
                        <div class="row mb-1">
                            <label for="">NIK</label> <br>
                        </div>
                        <div class="row mb-4">
                            <input type="text" class="form-control bg-light border-0 small col-11" name="nik" value="{{ $nasabah->nik }}">
                        </div>
                        <div class="row mb-1">
                            <label for="">Jenis Kelamin</label> <br>
                        </div>
                        <div class="row mb-4">
                            <select class="form-control bg-light border-0 small col-11" name="gender" value="{{ $nasabah->gender }}">
                                <option value="Laki laki">Laki laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>


                        <div class="row mb-1">
                            <label for="">Alamat</label> <br>
                        </div>
                        <div class="row mb-4">
                            <input type="text" class="form-control bg-light border-0 small col-11" name="address" value="{{ $nasabah->address }}">
                        </div>
                        <div class="row mb-1">
                            <label for="">No Telp</label> <br>
                        </div>
                        <div class="row mb-4">
                            <input type="text" class="form-control bg-light border-0 small col-11" name="phone" value="{{ $nasabah->phone }}">
                        </div>
                        <div class="row mb-1">
                            <la for="">Tempat Lahir</la> <br>
                        </div>
                        <div class="row mb-4">
                            <input type="text" class="form-control bg-light border-0 small col-11" name="born_place" value="{{ $nasabah->born_place }}">
                        </div>
                        <div class="row mb-1">
                            <label for="">Tanggal Lahir</label> <br>
                        </div>
                        <div class="row mb-4">
                            <input type="date" class="form-control bg-light border-0 small col-11" name="born_date" value="{{ $nasabah->born_date }}">
                        </div>
                        <div class="row mb-1">
                            <label for="">Pekerjaan</label> <br>
                        </div>
                        <div class="row mb-4">
                            <input type="text" class="form-control bg-light border-0 small col-11" name="job" value="{{ $nasabah->job }}">
                        </div>
                        

                        <div class="row">
                            <div class="col-7">&nbsp;</div>
                            <div class="col-5">
                                <div class="input-group">
                                    <button class="btn btn-primary btn-icon-split" name="submit">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Ubah</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach



@foreach ($users as $nasabah)
        <div class="modal fade" id="detailModal{{$nasabah->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered card container py-4" role="document">
                <div class="card-header mb-3">
                    <h6 class="m-0 font-weight-bold text-primary"> Detail Nasabah</h6>
                </div>
                <div class="modal-content card-body">
                    <form  action="{{ route('cs.update', $nasabah->id) }}" method="POST">
                        {!! csrf_field() !!}
                        <div class="row mb-1">
                            <label for="">Nama Lengkap</label> <br>
                        </div>
                        <div class="row mb-4">
                            <input type="hidden" class="form-control bg-light border-0 small" name="id" value="{{ $nasabah->id }}">
                            <input type="text" readonly class="form-control bg-light border-0 small col-11" name="name" value="{{ $nasabah->name }}">
                        </div>
                        
                        <div class="row mb-1">
                            <label for="">NIK</label> <br>
                        </div>
                        <div class="row mb-4">
                            <input type="text" readonly class="form-control bg-light border-0 small col-11" name="nik" value="{{ $nasabah->nik }}">
                        </div>
                        <div class="row mb-1">
                            <label for="">Jenis Kelamin</label> <br>
                        </div>
                        <div class="row mb-4">
                            <input readonly class="form-control bg-light border-0 small col-11" name="gender" value="{{ $nasabah->gender }}">
                        </div>
 
                        <div class="row mb-1">
                            <label for="">Alamat</label> <br>
                        </div>
                        <div class="row mb-4">
                            <input readonly type="text" class="form-control bg-light border-0 small col-11" name="address" value="{{ $nasabah->address }}">
                        </div>
                        <div class="row mb-1">
                            <label for="">No Telp</label> <br>
                        </div>
                        <div class="row mb-4">
                            <input  readonly type="text" class="form-control bg-light border-0 small col-11" name="phone" value="{{ $nasabah->phone }}">
                        </div>
                        <div class="row mb-1">
                            <la for="">Tempat Lahir</la> <br>
                        </div>
                        <div class="row mb-4">
                            <input readonly type="text" class="form-control bg-light border-0 small col-11" name="born_place" value="{{ $nasabah->born_place }}">
                        </div>
                        <div class="row mb-1">
                            <label for="">Tanggal Lahir</label> <br>
                        </div>
                        <div class="row mb-4">
                            <input readonly type="date" class="form-control bg-light border-0 small col-11" name="born_date" value="{{ $nasabah->born_date }}">
                        </div>
                        <div class="row mb-1">
                            <label for="">Pekerjaan</label> <br>
                        </div>
                        <div class="row mb-4">
                            <input readonly type="text" class="form-control bg-light border-0 small col-11" name="job" value="{{ $nasabah->job }}">
                        </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

@endsection