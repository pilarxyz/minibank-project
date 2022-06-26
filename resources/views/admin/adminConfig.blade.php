@extends('layouts.main')

@section('container')
    <!-- Configuration -->
    <div class="card shadow mb-4 text-center">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Configuration</h6>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/'. $config->id) }}" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 navbar-search col-12">
               {!! csrf_field() !!}
               <input type="hidden" value="{{ $config->id }}" name="id">
                <div class="row mb-4">
                    <div class="col-2">
                        <label for="">Bank's Name </label>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2" value="{{ $config->name }}" name="name">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2">
                        <label for="">Bank's Address</label>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2" value="{{ $config->address }}" name="address">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2">
                        <label for="">Bank's Email</label>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2" value="{{ $config->email }}" name="email">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2">
                        <label for="">Bank's Contact</label>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2" value="{{ $config->contact }}" name="contact">
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
                                <span class="text">Update</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection