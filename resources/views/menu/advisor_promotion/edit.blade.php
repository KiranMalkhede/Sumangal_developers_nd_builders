@extends('layouts.app')

<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- CSS -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

@section('content')
    @include('include.header')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Advisor's Promotion</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ url('advisor_promotion') }}" class="btn btn-primary" style="float: right;"><i
                                class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div><br>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card-body" style="background-color: #dee8f2">
                <form action="{{ route('advisor.update',$advisor->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="" class="form-label">Select Advisor</label>
                            <input type="text" name="advisor" value="{{ $advisor->advisor }}" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Date</label>
                            <input type="date" name="date" value="{{ $advisor->date }}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Commission</label>
                            <input type="text" name="comm" value="{{ $advisor->comm }}" class="form-control">
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
