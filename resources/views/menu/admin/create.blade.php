@extends('layouts.app')

@section('content')
    @include('include.header')
    <div class="container">
        <div class="card">
            <div class="card-header">
                show data
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card-body  bg-light">
                <form action="{{ Route('admin.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Vouchers</label>
                                <input type="text" name="srNo" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Execative No.</label>
                                <input type="text" name="exeNo" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Purchase Date</label>
                                <input type="date" name="date" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Comm</label>
                                <input type="text" name="comm" class="form-control">
                            </div>
                        </div>
                        <hr>
                        {{-- <h4 class="text-center">Customer Details</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name2" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Data Of Birth</label>
                                <input type="date" name="dob" class="form-control">
                            </div>
                            <div>
                                <label for="" class="form-label">Address</label>
                                <textarea name="add" id="" cols="5" rows="0" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Age</label>
                                <input type="number" name="age" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Occupation</label>
                                <input type="text" name="occupation" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Phone No.</label>
                                <input type="text" name="phone1" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Phone No.</label>
                                <input type="text" name="phone2" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Phone No.</label>
                                <input type="text" name="phone3" class="form-control">
                            </div>
                        </div>
                        <hr> --}}
                        {{-- <h4 class="text-center">Nominee Detail</h4> --}}
                        {{-- <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="nameNom" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Date of Birth</label>
                                <input type="date" name="dobNom" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Age</label>
                                <input type="mumber" name="ageNom" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Relation With Applicant</label>
                                <input type="text" name="app" class="form-control">
                            </div>
                            <div>
                                <label for="" class="form-label">Address</label>
                                <textarea name="add2" id="" cols="5" rows="0" class="form-control"></textarea>
                            </div>
                        </div> --}}
                        <div class="form-group py-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('include.footer')
@endsection
