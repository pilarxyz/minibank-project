{{-- @extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
   
                <div class="card-body">
                    You are a Admin User.
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
            <h6 class="m-0 font-weight-bold text-primary">DataTables Of Employee</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>
                                {{ $employee->type  }}
                                {{-- @if ($employee->type == 1)
                                    Teller
                                @elseif($employee->type == 2)
                                    Customer Service
                                @else
                                    Admin
                                @endif --}}
                            </td>
                            <td>{{ $employee->email }}</td>
                            <td>
                                {{-- <a href="" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Delete</span>
                                </a> --}}
                                <form method="POST" action="{{ url('admin/' . $employee->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-icon-split" title="Delete" onclick="return confirm('Hapus data ini?')">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Delete</span>
                                    </button>
                                </form>
                                <button type="button" data-toggle="modal" data-target="#editModal{{$employee->id}}" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @foreach ($employees as $employee)
        <div class="modal fade" id="editModal{{$employee->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered card container py-4" role="document">
                <div class="card-header mb-3">
                    <h6 class="m-0 font-weight-bold text-primary"> Edit DataTables Of Employee</h6>
                </div>
                <div class="modal-content card-body">
                    <form action="{{ url('admin/'. $employee->id) }}" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 navbar-search col-12">
                        {!! csrf_field() !!}
                        <div class="row mb-1">
                            <label for="">Nama Lengkap</label> <br>
                        </div>
                        <div class="row mb-4">
                            <input type="hidden" class="form-control bg-light border-0 small" name="id" value="{{ $employee->id }}">
                            <input type="text" class="form-control bg-light border-0 small col-11" name="name" value="{{ $employee->name }}">
                        </div>
                        <div class="row mb-2">
                            <label for="">Email Address</label>
                        </div>
                        <div class="row mb-4">
                            <input type="email" class="form-control bg-light border-0 small col-11" name="email" value="{{ $employee->email }}">
                        </div>
                        <div class="row mb-1">
                            <label for="">Position</label>
                        </div>
                        <div class="row mb-4">
                            <select class="form-select form-control bg-light border-0 small col-11" aria-label="Default select example" name="type" id="type">
                                <option selected>Choose Position</option>
                                <option value="1">Teller</option>
                                <option value="2">Customer Service</option>
                                <option value="3">Admin</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-7">&nbsp;</div>
                            <div class="col-5">
                                <div class="input-group">
                                    <button class="btn btn-primary btn-icon-split" name="submit">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Submit</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

@endsection