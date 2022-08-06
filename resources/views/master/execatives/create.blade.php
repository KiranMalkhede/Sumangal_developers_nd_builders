@extends('layouts.app')

@section('content')
    @include('include.header')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        Create data
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('execative.exeIndex') }}" class="btn btn-primary" style="float: right;"><i
                                class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card-body bg-light">
                <form action="{{ Route('execative.exeStore') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Execative Code</label>
                                <input type="text" name="code" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Sponsor Code</label>
                                <input type="text" name="sponsorCode" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Sponsor Name</label>
                                <input type="text" name="sponsorName" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Joining Date</label>
                                <input type="date" name="joiningDate" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Address</label>
                                <input type="text" name="add" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Phone [o]</label>
                                <input type="text" name="phone1" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Phone[R]</label>
                                <input type="text" name="phone2" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Date of Birth</label>
                                <input type="date" name="dob" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Age</label>
                                <input type="text" name="age" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label for="" class="form-label">Qualification</label>
                                <input type="text" name="qualitification" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Commission</label>
                                <input type="text" name="commision" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">PAN No</label>
                                <input type="text" name="pan" class="form-control">
                            </div>
                        </div>
                        <div class="form-group py-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="py-5">
        @include('include.footer')
    </div>
@endsection
