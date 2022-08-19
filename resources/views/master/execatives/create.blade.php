@extends('layouts.app')

@section('content')
    @include('include.header')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8 p-3">
                                <h5> Insert Executive Details</h5>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('execative.exeIndex') }}" class="btn btn-primary" style="float: right;"><i
                                        class="fa fa-arrow-left" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{ Route('execative.exeStore') }}" method="POST">
                            @csrf
                            <div class="row g-3 py-3">
                                <div class="col-2">
                                    <label for="" class="col-form-label">Executive Code</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" name="code" class="form-control border-primary">
                                </div>

                                <div class="col-2">
                                    <label for="" class="col-form-label">Executive Name</label>
                                </div>
                                <div class="col">
                                    <input type="text" name="name" class="form-control  border-primary">
                                </div>
                            </div>
                            <div class="row g-3 py-3">
                                <div class="col-2">
                                    <label for="" class="col-form-label">Sponsor Code</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" name="sponsorCode" class="form-control border-primary">
                                </div>
                                <div class="col-2">
                                    <label for="" class="col-form-label">Sponsor Name</label>
                                </div>
                                <div class="col">
                                    <input type="text" name="sponsorName" class="form-control border-primary">
                                </div>
                            </div>
                            <div class="row g-3 py-3">
                                <div class="col-2">
                                    <label for="" class="col-form-label">Joining Date</label>
                                </div>
                                <div class="col-3">
                                    <div class="input-group date" id="datepicker">
                                        <input type="date" class="form-control border-primary" name="joiningDate"
                                            id="date"  />
                                        <span class="input-group-append">
                                            <span class="input-group-text border-primary bg-light d-block" style="border-radius: 0;padding-top: 0.5rem;">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="" class="col-form-label">Email</label>
                                </div>
                                <div class="col">
                                    <input type="text" name="email" class="form-control border-primary">
                                </div>
                            </div>
                            <div class="row g-3 py-3">
                                <div class="col-2">
                                    <label for="" class="col-form-label">Address</label>
                                </div>
                                <div class="col">
                                    <input type="text" name="add" class="form-control border-primary">
                                </div>
                            </div>
                            <div class="row g-3 py-3">
                                <div class="col-2">
                                    <label for="" class="col-form-label">Phone</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" name="phone" class="form-control border-primary">
                                </div>
                                <div class="col-2">
                                    <label for="" class="col-form-label">Phone [o]</label>
                                </div>
                                <div class="col">
                                    <input type="text" name="phone1" class="form-control border-primary">
                                </div>
                            </div>
                            <div class="row g-3 py-3">
                                <div class="col-2">
                                    <label for="" class="col-form-label">Phone[R]</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" name="phone2" class="form-control border-primary">
                                </div>
                                <div class="col-2">
                                    <label for="" class="col-form-label">Date of Birth</label>
                                </div>
                                <div class="col">
                                    <div class="input-group date" id="datepicker">
                                        <input type="date" class="form-control border-primary" name="dob"
                                            id="date" />
                                        <span class="input-group-append">
                                            <span class="input-group-text border-primary bg-light d-block" style="border-radius: 0;padding-top: 0.5rem;">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3 py-3">
                                <div class="col-2">
                                    <label for="" class="col-form-label">Age</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" name="age" class="form-control border-primary">
                                </div>
                                <div class="col-2">
                                    <label for="" class="col-form-label">Qualification</label>
                                </div>
                                <div class="col">
                                    <input type="text" name="qualitification" class="form-control border-primary">
                                </div>
                            </div>
                            <div class="row g-3 py-3">
                                <div class="col-2">
                                    <label for="" class="col-form-label">Sex</label>
                                </div>
                                <div class="col-3">
                                    <select class="form-select border-primary" name="sex"
                                        aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-2">
                                    <label for="" class="col-form-label">Commission</label>
                                </div>
                                <div class="col">
                                    <input type="text" name="commision" class="form-control border-primary">
                                </div>
                            </div>
                            <div class="row g-3 py-3">
                                <div class="col-2">
                                    <label for="" class="col-form-label">PAN No</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" name="pan"  class="form-control border-primary">
                                </div>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto mt-2">
                                <button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5">
        @include('include.footer')
    </div>
@endsection
