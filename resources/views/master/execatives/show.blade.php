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
                    {{-- <div class="col-md-6">
                        <a href="{{ route('execative.exeIndex') }}" class="btn btn-primary" style="float: right;"><i
                                class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    </div> --}}
                </div>
            </div>
            {{-- @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif --}}
            <div class="card-body bg-light">
                {{-- <form action="{{ Route('execative.exeStore') }}" method="POST">
                    @csrf --}}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Name</label>
                                <input type="text" value="{{$execatives->name }}" name="name" class="form-control" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Execative Code</label>
                                <input type="text" name="code" value="{{$execatives->code }}" class="form-control" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Email</label>
                                <input type="text" name="email" value="{{$execatives->email }}" class="form-control" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Phone</label>
                                <input type="text" name="phone" value="{{$execatives->phone }}" class="form-control" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Address</label>
                                <input type="text" name="add" value="{{$execatives->add }}" class="form-control" readonly>
                            </div>
                        </div>
                        {{-- <div class="form-group py-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div> --}}
                    </div>
                {{-- </form> --}}
            </div>
        </div>
    </div>
    <div class="py-5">
        @include('include.footer')
    </div>
@endsection
