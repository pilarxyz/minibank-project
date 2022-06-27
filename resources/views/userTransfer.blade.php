@extends('layouts.main')

@section('container')

    <!-- User Transfers -->
    <div class="card shadow mb-4 text-center">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User Transfers</h6>
        </div>
        <form class="card-body" method="POST" action="{{ route('user.transfer') }}">
            @csrf
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 navbar-search col-12">
                <div class="row mb-4">
                    <div class="col-2">
                        <label for="">Nomor Rekening</label>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" name="no_rekening" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2">
                        <label for="">Nominal</label>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" name="jumlah" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-10">&nbsp;</div>
                    <div class="col-2">
                        <div class="input-group">
                            <button class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <span class="text">Submit</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </form>
    </div>

@endsection
