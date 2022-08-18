@extends('layouts.app')

@section('content')
    @include('include.header')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>Daily Sales Reports</h3>
                    </div>
                </div>
            </div>
            <div class="card-body" style="background-color: rgb(168, 236, 236)">
                <form action="{{ route('daily.create') }}" method="get">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="p-3">
                                    <label for="" class="form-label">From Date</label>
                                    <input type="date" name="start_date" class="form-control">
                                </div>
                                <div class="p-3">
                                    <label for="" class="form-label">To Date</label>
                                    <input type="date" name="end_date" class="form-control">
                                </div>
                                <div class="p-3">
                                    <label for="">Select Mouza</label>
                                    <select name="mouza" id="" class="form-control">
                                        <option value="mouza">All</option>
                                        @foreach ($mouza as $mouzaa)
                                            <option value="{{ $mouzaa->mouza }}">{{ $mouzaa->mouza }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-sm btn-success" value="Submit">
                                <button class="btn btn-sm btn-primary">Print</button>
                                <button class="btn btn-sm btn-danger">Close</button>
                            </div>
                            {{-- </form> --}}
                            <div class="col-md-12">
                                <div class="p-3">
                                    <div class="form-check">
                                        <input class="form-check-input" name="mode_of_pay" type="checkbox" value=""
                                            id="flexCheckDefault" checked>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            All
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="mode_of_pay" type="checkbox" value="cash"
                                            id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Cash only
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="mode_of_pay" type="checkbox" value="cheque"
                                            id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Cheques only
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-striped table-border">
                    <thead>
                        <tr>
                            <th>Voucher No.</th>
                            <th>Vouchar Date</th>
                            <th>Purchaser's Details</th>
                            <th>Mouza</th>
                            <th>Plot</th>
                            <th>Head</th>
                            <th>Amount</th>
                            <th>Month</th>
                            <th>Mode</th>
                            <th>Executive details</th>
                        </tr>
                    </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->receiptNo }}</td>
                            <td>{{ $item->receiptDate }}</td>
                            <td>{{ $item->giver }}</td>
                            <td>{{ $item->mouza }}</td>
                            <td>{{ $item->plot_no }}</td>
                            <td>{{ $item->khasara }}</td>
                            <td>{{ $item->amount_received }}</td>
                            <td>{{ $item->month }}</td>
                            <td>{{ $item->mode_of_pay }}</td>
                            <td>{{ $item->ex_details }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ Route('daily.show', $item->id) }}"><i class="fas fa-eye"
                                        style="color:#fff"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('include.footer')
@endsection
