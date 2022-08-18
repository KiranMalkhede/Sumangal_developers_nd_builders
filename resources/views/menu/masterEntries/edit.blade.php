@extends('layouts.app')

@section('content')
    @include('include.header')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Edit data
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card-body  bg-light">
                <form action="{{ Route('master.update', $masters->id) }}" method="POST">
                    @csrf                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">SR.No</label>
                                <input type="text" name="srNo" value="{{ $masters->srNo }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Execative No.</label>
                                <input type="text" name="exeNo" value="{{ $masters->exeNo }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name" value="{{ $masters->name }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Purchase Date</label>
                                <input type="date" name="date" value="{{ $masters->date }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Comm</label>
                                <input type="text" name="comm" value="{{ $masters->comm }}" class="form-control">
                            </div>
                        </div>
                        <hr>
                        <h4 class="text-center">Customer Details</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name2" value="{{ $masters->name2 }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Data Of Birth</label>
                                <input type="date" name="dob" value="{{ $masters->dob }}" class="form-control">
                            </div>
                            <div>
                                <label for="" class="form-label">Address</label>
                                <textarea name="add" id="" cols="5" value="{{ $masters->add }}" rows="0" class="form-control">{{ $masters->add }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Age</label>
                                <input type="number" name="age" value="{{ $masters->age }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Occupation</label>
                                <input type="text" name="occupation" value="{{ $masters->occupation }}"
                                    class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Phone No.</label>
                                <input type="text" name="phone1" value="{{ $masters->phone1 }}" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Phone No.</label>
                                <input type="text" name="phone2" value="{{ $masters->phone2 }}" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Phone No.</label>
                                <input type="text" name="phone3" value="{{ $masters->phone3 }}"
                                    class="form-control">
                            </div>
                        </div>
                        <hr>
                        <h4 class="text-center">Nominee Detail</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="nameNom" value="{{ $masters->nameNom }}"
                                    class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Date of Birth</label>
                                <input type="date" name="dobNom" value="{{ $masters->dobNom }}"
                                    class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Age</label>
                                <input type="mumber" name="ageNom" value="{{ $masters->ageNom }}"
                                    class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Relation With Applicant</label>
                                <input type="text" name="app" value="{{ $masters->app }}" class="form-control">
                            </div>
                            <div>
                                <label for="" class="form-label">Address</label>
                                <textarea name="add2" id="" cols="5" value="{{ $masters->add2 }}" rows="0"
                                    class="form-control">{{ $masters->add2 }}</textarea>
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
