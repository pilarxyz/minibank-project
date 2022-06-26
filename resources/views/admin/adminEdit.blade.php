@extends('layouts.main')

@section('container')

<div class="card shadow mb-4 text-center">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Account Employee</h6>
    </div>
    <div class="card-body">
        <form action="{{ url('admin/'. $employee->id) }}" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 navbar-search col-12">
            {!! csrf_field() !!}
            <div class="row mb-4">
                <div class="col-2">
                    <label for="">Nama Lengkap</label>
                </div>
                <div class="col-10">
                    <div class="input-group">
                        <input type="hidden" class="form-control bg-light border-0 small" name="id" value="{{ $employee->id }}">
                        <input type="text" class="form-control bg-light border-0 small" name="name" value="{{ $employee->name }}">
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for="">Email Address</label>
                </div>
                <div class="col-10">
                    <div class="input-group">
                        <input type="email" class="form-control bg-light border-0 small" name="email" value="{{ $employee->email }}">
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for="">Password</label>
                </div>
                <div class="col-10">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" name="password" value="{{ $employee->password }}">
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-2">
                    <label for="">Position</label>
                </div>
                <div class="col-10">
                    <div class="input-group">
                        {{-- <input type="text" class="form-control bg-light border-0 small" name=""> --}}
                        <select class="form-select form-control bg-light border-0 small" aria-label="Default select example" name="type" id="type">
                            <option selected>Choose Position</option>
                            <option value="1">Teller</option>
                            <option value="2">Customer Service</option>
                            <option value="3">Admin</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-10">&nbsp;</div>
                <div class="col-2">
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

@endsection