@extends('layouts.main')

@section('container')
    <!-- CREATE ACCOUNT -->
    <div class="card shadow mb-4 text-center">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Account</h6>
        </div>
        <div class="card-body">
            <form action="{{ url('cs/store') }}" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 navbar-search col-12">
                {!! csrf_field() !!}
                <div class="row mb-4">
                    <div class="col-2">
                        <label for="">Nama Lengkap</label>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" required name="name" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2">
                        <label for="">Jenis Kelamin</label>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <select required name="gender" class="form-control bg-light border-0 small">
                                <option selected> Pilih Jenis Kelamin</option>
                                <option value="Laki laki">Laki laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-2">
                        <label for="">Alamat Email</label>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="email" required name="email" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2">
                        <label for="">Password</label>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" required name="password" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2">
                        <label for="">Nomor Telepon</label>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="number" required name="phone" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2">
                        <label for="">NIK</label>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="number" required name="nik" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2">
                        <label for="">Tempat Lahir</label>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" required name=born_place class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2">
                        <label for="">Tanggal Lahir</label>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="date" required name="born_date" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2">
                        <label for="">Alamat</label>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" required name="address" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2">
                        <label for="">Pekerjaan</label>
                    </div>
                    <div class="col-10">
                        <div class="input-group">
                            <input type="text" required name="job" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-10">&nbsp;</div>
                    <div class="col-2">
                        <div class="input-group">
                            <button onsubmit="alertSuccess()" class="btn btn-primary btn-icon-split">
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

<script>
    const alertSuccess = () => {
        alert('Berhasil menambahkan data');
    }
</script>