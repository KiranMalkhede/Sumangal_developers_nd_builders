@extends('layouts.app')

@section('content')
    @include('include.header')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="row">
                        <div class="col-md-8 p-3">
                            <h5>Executive Details</h5>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('execative.exeIndex') }}" class="btn btn-primary" style="float: right;"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                    <div class="row g-3 py-3">
                        <div class="col-2">
                            <label for="" class="col-form-label">Executive Code</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="code" value="{{ $execatives->code }}" class="form-control border-primary" readonly>
                        </div>

                        <div class="col-2">
                            <label for="" class="col-form-label"> Executive Name</label>
                        </div>
                        <div class="col">
                            <input type="text" name="name" value="{{ $execatives->name }}" class="form-control  border-primary" readonly>
                        </div>
                    </div>
                    <div class="row g-3 py-3">
                        <div class="col-2">
                            <label for="" class="col-form-label">Sponsor Code</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="sponsorCode" value="{{ $execatives->sponsorCode }}" class="form-control border-primary" readonly>
                        </div>
                        <div class="col-2">
                            <label for="" class="col-form-label">Sponsor Name</label>
                        </div>
                        <div class="col">
                            <input type="text" name="sponsorName" value="{{ $execatives->sponsorName }}"  class="form-control border-primary" readonly>
                        </div>
                    </div>
                    <div class="row g-3 py-3">
                        <div class="col-2">
                            <label for="" class="col-form-label">Joining Date</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="joiningDate" value="{{ $execatives->joiningDate }}"
                class="form-control border-primary" readonly>
                        </div>
                        <div class="col-2">
                            <label for="" class="col-form-label">Email</label>
                        </div>
                        <div class="col">
                            <input type="text" name="email" value="{{ $execatives->email }}"  class="form-control border-primary" readonly>
                        </div>
                    </div>
                    <div class="row g-3 py-3">
                        <div class="col-2">
                            <label for="" class="col-form-label">Address</label>
                        </div>
                        <div class="col">
                            <input type="text" name="add" value="{{ $execatives->add }}" class="form-control border-primary" readonly>
                        </div>
                    </div>
                    <div class="row g-3 py-3">
                        <div class="col-2">
                            <label for="" class="col-form-label">Phone</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="phone" value="{{ $execatives->phone }}"  class="form-control border-primary" readonly>
                        </div>
                        <div class="col-2">
                            <label for="" class="col-form-label">Phone [o]</label>
                        </div>
                        <div class="col">
                            <input type="text" name="phone1" value="{{ $execatives->phone1 }}"  class="form-control border-primary" readonly>
                        </div>
                    </div>
                    <div class="row g-3 py-3">
                        <div class="col-2">
                            <label for="" class="col-form-label">Phone[R]</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="phone2" value="{{ $execatives->phone2 }}"  class="form-control border-primary" readonly>
                        </div>
                        <div class="col-2">
                            <label for="" class="col-form-label">Date of Birth</label>
                        </div>
                        <div class="col">
                            <input type="text" name="dob" value="{{ $execatives->dob }}" class="form-control border-primary"
                            readonly>
                        </div>
                    </div>
                    <div class="row g-3 py-3">
                        <div class="col-2">
                            <label for="" class="col-form-label">Age</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="age" value="{{ $execatives->age }}"  class="form-control border-primary" readonly/>
                        </div>
                        <div class="col-2">
                            <label for="" class="col-form-label">Qualification</label>
                        </div>
                        <div class="col">
                            <input type="text" name="qualitification" value="{{ $execatives->qualitification }}"  class="form-control border-primary" readonly/>
                        </div>
                    </div>
                    <div class="row g-3 py-3">
                        <div class="col-2">
                            <label for="" class="col-form-label">Sex</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="sex" value="{{ $execatives->sex }}"
                            class="form-control border-primary" readonly>
                        </div>
                        <div class="col-2">
                            <label for="" class="col-form-label">Commission</label>
                        </div>
                        <div class="col">
                            <input type="text" name="commision" value="{{ $execatives->commision }}"
                class="form-control border-primary" readonly>
                        </div>
                    </div>
                    <div class="row g-3 py-3">
                        <div class="col-2">
                            <label for="" class="col-form-label">PAN No</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="pan" value="{{ $execatives->pan }}" class="form-control border-primary"
                readonly>
                        </div>
                    </div>
            </div>
            <div class="py-5">
                @include('include.footer')
            </div>
        @endsection
