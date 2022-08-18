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
            <div class="card-body" style="background-color: #dee8f2">
                <form action="{{ route('advisor.create') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="form-label">Select Advisor</label>
                                <input type="text" name="advisor" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Date</label>
                                <input type="date" name="date" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Commission</label>
                                <input type="text" name="comm" class="form-control">
                            </div>
                        </div>
                        <div class="form-group py-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body mt-4 bg-light">
                <div class="table-responsive">
                    <table class="table table-responsive table-borderless">
                        <thead>
                            <tr class="bg-light">
                                <th>Sr No.</th>
                                <th>Advisor</th>
                                <th>Date</th>
                                <th>Commission</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($advisors as $advisor)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $advisor->advisor }}</td>
                                    <td>{{ $advisor->date }}</td>
                                    <td>{{ $advisor->comm }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ Route('advisor.edit', $advisor->id) }}"><i
                                                class="fas fa-edit"></i></a>
                                        <form action="{{ route('advisor.delete', $advisor->id) }}" method="POST">
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
