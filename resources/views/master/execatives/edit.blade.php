@extends('layouts.app')

@section('content')
    @include('include.header')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Add Data
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card-body  bg-light">
                <form action="{{ Route('execative.exeUpdate', $execatives->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                            <label for="" class="form-label">Execative Code</label>
                            <input type="text" name="code" value="{{$execatives->code}}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Sponsor Code</label>
                            <input type="text" name="sponsorCode" value="{{$execatives->sponsorCode}}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Name</label>
                            <input type="text" name="name" value="{{$execatives->name}}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Sponsor Name</label>
                            <input type="text" name="sponsorName" value="{{$execatives->sponsorName}}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Joining Date</label>
                            <input type="date" name="joiningDate" value="{{$execatives->joiningDate}}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="email" value="{{$execatives->email}}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Address</label>
                            <input type="text" name="add" value="{{$execatives->add}}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Phone</label>
                            <input type="text" name="phone" value="{{$execatives->phone}}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Phone [o]</label>
                            <input type="text" name="phone1" value="{{$execatives->phone1}}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Phone[R]</label>
                            <input type="text" name="phone2" value="{{$execatives->phone2}}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Date of Birth</label>
                            <input type="date" name="dob" value="{{$execatives->dob}}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Age</label>
                            <input type="text" name="age" value="{{$execatives->age}}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Qualification</label>
                            <input type="text" name="qualitification" value="{{$execatives->qualitification}}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Sex</label>
                            <select class="form-select" name="sex" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="Male"  {{ ($execatives->sex) == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ ($execatives->sex) == 'Female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Commission</label>
                            <input type="text" name="commision" value="{{$execatives->commision}}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">PAN No</label>
                            <input type="text" name="pan" value="{{$execatives->pan}}" class="form-control">
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
