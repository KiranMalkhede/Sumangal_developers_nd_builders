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
                        <a href="{{ url('receiptDetails') }}" class="btn btn-primary" style="float: right;"><i
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
                <form action="{{ route('receipt.create') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="form-label">Receipt No.</label>
                                <input type="text" name="receiptNo" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Receipt Date</label>
                                <input type="date" name="receiptDate" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Received From</label>
                                <input type="text" name="giver" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Layout</label>
                                <input type="text" name="layout" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Mouza</label>
                                <input type="text" name="mouza" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Khasara No.</label>
                                <input type="text" name="khasara" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Plot No.</label>
                                <input type="text" name="plot_no" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Size</label>
                                <input type="text" name="size" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Type</label>
                                <input type="text" name="type" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Ex. Details</label>
                                <input type="text" name="ex_details" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Amount Received</label>
                                <input type="text" name="amount_received" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <h6>On A/C of</h6>
                            <div class="col-md-4">
                                <div class="p-3">
                                    <div class="form-check">
                                        <input class="form-check-input" name="on_ac_of"  type="checkbox" value="monthly_installment"
                                            >
                                        <label class="form-check-label" >
                                            Monthly Installment
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="down_payment" name="on_ac_of">
                                        <label class="form-check-label" for="flexCheck">
                                            Down-Payment
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="token_amount" name="on_ac_of"
                                            >
                                        <label class="form-check-label" >
                                            Token Amount
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="cash_paid" name="on_ac_of">
                                        <label class="form-check-label" for="flexCheck">
                                            Cash Paid
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">For the Month</label>
                                <input type="month" name="month" id="" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="">Token Expiry date</label>
                                <input type="date" name="tokenExpDate" id="" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <h6>Mode of Pay </h6>
                            <div class="col-md-4">
                                <div class="p-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="cash" name="mode_of_pay" >
                                        <label class="form-check-label">Cash</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="cheque" name="mode_of_pay">
                                        <label class="form-check-label">Cheque</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="dd" name="mode_of_pay">
                                        <label class="form-check-label">DD</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="cash_to_bank" name="mode_of_pay">
                                        <label class="form-check-label" >Cash to Bank</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Cheque/DD no.</label>
                                <input type="text" name="cheque_no" id="" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="">Date</label>
                                <input type="date" name="cheque_date" id="" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">Bank Name</label>
                                <input type="text" name="bank_name" id="" class="form-control">
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
