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

{{-- @extends('layouts.main')

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
                            <th>Name</th>
                            <th>Position</th>
                            <th>Address</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Address</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>Taller</td>
                            <td>Edinburgh</td>
                            <td>31</td>
                            <td>2011/04/25</td>
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
                            <td>Garrett Winters</td>
                            <td>Customer Service</td>
                            <td>Tokyo</td>
                            <td>43</td>
                            <td>2011/07/25</td>
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
                            <td>Ashton Cox</td>
                            <td>Tellerr</td>
                            <td>San Francisco</td>
                            <td>36</td>
                            <td>2009/01/12</td>
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
                            <td>Cedric Kelly</td>
                            <td>Customer Service</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
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
                            <td>Airi Satou</td>
                            <td>Admin</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
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
                            <td>Sarah Ulayya</td>
                            <td>Admin</td>
                            <td>New York</td>
                            <td>20</td>
                            <td>2012/12/02</td>
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
                            <td>Herrod Chandler</td>
                            <td>Customer Service</td>
                            <td>San Francisco</td>
                            <td>29</td>
                            <td>2012/08/06</td>
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
                            <td>Rhona Davidson</td>
                            <td>Teller</td>
                            <td>Tokyo</td>
                            <td>35</td>
                            <td>2010/10/14</td>
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
                            <td>Colleen Hurst</td>
                            <td>Tellerr</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            <td>2009/09/15</td>
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
                            <td>Sonya Frost</td>
                            <td>Teller</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                            <td>2008/12/13</td>
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
                            <td>Jena Gaines</td>
                            <td>Customer Service</td>
                            <td>London</td>
                            <td>30</td>
                            <td>2008/12/19</td>
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
                            <td>Quinn Flynn</td>
                            <td>Customer Service</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2013/03/03</td>
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
                            <td>Charde Marshall</td>
                            <td>Teller</td>
                            <td>San Francisco</td>
                            <td>36</td>
                            <td>2008/10/16</td>
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
                            <td>Haley Kennedy</td>
                            <td>Teller</td>
                            <td>London</td>
                            <td>23</td>
                            <td>2012/12/18</td>
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
                            <td>Tatyana Fitzpatrick</td>
                            <td>Customer Service</td>
                            <td>London</td>
                            <td>29</td>
                            <td>2010/03/17</td>
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
                            <td>Michael Silva</td>
                            <td>Teller</td>
                            <td>London</td>
                            <td>36</td>
                            <td>2012/11/27</td>
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
                    </tbody>
                </table>
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
                                    <button type="submit" class="btn btn-danger btn-icon-split" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)">
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