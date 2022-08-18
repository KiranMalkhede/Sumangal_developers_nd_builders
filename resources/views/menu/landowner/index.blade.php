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
                        <h4>Land Owners Details</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ url('landowner_create') }}" class="btn btn-primary" style="float: right;"><i
                                class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('danger'))
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card-body  bg-light">
                <div class="table-responsive">
                    <table class="table table-responsive table-borderless">
                        <thead>
                            <tr class="bg-light">
                                <th>Sr No.</th>
                                <th>Owner name</th>
                                <th>Khasara No.</th>
                                <th>P.H.No</th>
                                <th>Mouza</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($landowners as $landowner)
                            <?php $i++; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $landowner->ownerName }}</td>
                                    <td>{{ $landowner->khasara }}</td>
                                    <td>{{ $landowner->phNo }}</td>
                                    <td>{{ $landowner->mouza }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ Route('landowner.show',$landowner->id) }}"><i class="fas fa-eye" style="color:#fff"></i>
                                        </a>
    
                                        <a class="btn btn-primary" href="{{ Route('landowner.edit',$landowner->id) }}"><i class="fas fa-edit"></i></a>

                                        <form action="{{ route('landowner.delete',$landowner->id) }}" method="POST">        
                                            @csrf
                                            @method('DELETE')
    
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5">
        @include('include.footer')
    </div>
@endsection
