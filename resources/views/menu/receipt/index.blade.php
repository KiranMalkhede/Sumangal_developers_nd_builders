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
                        <h4>Receipt Details</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ url('receiptDetails_create') }}" class="btn btn-primary" style="float: right;"><i
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
                                <th>Receipt No.</th>
                                <th>Receipt Date</th>
                                <th>Receiver name</th>
                                <th>Received Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach ($receipts as $receipt)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $receipt->receiptNo }}</td>
                                    <td>{{ $receipt->receiptDate }}</td>
                                    <td>{{ $receipt->giver }}</td>
                                    <td>{{ $receipt->amount_received }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ Route('receipt.show', $receipt->id) }}"><i
                                                class="fas fa-eye" style="color:#fff"></i>
                                        </a>
                                        <a class="btn btn-primary" href="{{ Route('receipt.edit', $receipt->id) }}"><i
                                                class="fas fa-edit"></i></a>
                                        <form action="{{ route('receipt.delete', $receipt->id) }}" method="POST">
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
