@extends('layouts.app')

@section('content')
    @include('include.header')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4>Search Customer's Details</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="/search/customer" method="get">
                    @csrf
                    <div class="row g-3 py-3">
                        <div class="col-1"></div>
                        <div class="col-2">
                            <label for="inputtext6" class="col-form-label">Customer Name</label>
                        </div>
                        <div class="col-5">
                            <input type="search" id="inputtext6" name="search" class="form-control border-primary"
                                autofocus>
                        </div>
                        <div class="col-3">
                            <div class="d-grid gap-2 mx-auto">
                                <button type="submit" class="btn btn-outline-primary btn-lg">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
                @foreach ($customerdetails as $customerdetail)
                    <div class="row g-3 py-3">
                        <div class="col-1">
                            <label for="inputtext6" class="col-form-label">Reg.No</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="inputtext6" class="form-control border-primary"
                                value="{{ $customerdetail->srNo }}" readonly>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-1">
                            <label for="inputtext6" class="col-form-label">Reg.Date</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="inputtext6" class="form-control border-primary"
                                value="{{ $customerdetail->date }}" readonly>
                        </div>
                        <div class="col-1">
                            <label for="inputtext6" class="col-form-label">Purchaser's <br> name</label>
                        </div>
                        <div class="col-5">
                            <input type="text" id="inputtext6" style="text-transform: capitalize"
                                value="{{ $customerdetail->name2 }}" class="form-control border-primary" readonly>
                        </div>
                        <div class="col-1">
                            <label for="inputtext6" class="col-form-label">Address </label>
                        </div>
                        <div class="col-5">
                            <textarea type="text" id="inputtext6" class="form-control border-primary" readonly>{{ $customerdetail->add }}</textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="row g-3  mt-2">
                        <div class="col-1">
                            <label for="inputtext6" class="col-form-label">Executive <br> name</label>
                        </div>
                        <div class="col-5">
                            <input type="text" id="inputtext6" class="form-control border-primary"
                                value="{{ $customerdetail->exename }}" readonly>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-1">
                            <label for="inputtext6" class="col-form-label">Executive <br> Code</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="inputtext6" class="form-control border-primary"
                                value="{{ $customerdetail->exe_id }}" readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="row g-3 ">
                        <div class="col-1">
                            <label for="inputtext6" class="col-form-label">Mouza</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="inputtext6" class="form-control border-primary"
                                value="{{ $customerdetail->mouza }}" readonly>
                        </div>
                        <div class="col-1">
                            <label for="inputtext6" class="col-form-label">Plot no.</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="inputtext6" class="form-control border-primary"
                                value="{{ $customerdetail->plotNo }}" readonly>
                        </div>
                        <div class="col-1">
                            <label for="inputtext6" class="col-form-label">Khasara <br> No</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="inputtext6" class="form-control border-primary"
                                value="{{ $customerdetail->khasaraNo }}" readonly>
                        </div>
                        <div class="col-1">
                            <label for="inputtext6" class="col-form-label">Plot Cost</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="inputtext6" class="form-control border-primary"
                                value="{{ $customerdetail->totalPlotC }}" readonly>
                        </div>
                        <div class="col-1">
                            <label for="inputtext6" class="col-form-label">Size</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="inputtext6" class="form-control border-primary"
                                value="{{ $customerdetail->size }}" readonly>
                        </div>
                        <div class="col-1">
                            <label for="inputtext6" class="col-form-label">Type</label>
                        </div>
                        <div class="col-3">
                            <input type="text" id="inputtext6" class="form-control border-primary"
                                value="{{ $customerdetail->plot_type }}" readonly>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="p-3">
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

                        <tr>
                            <th></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('include.footer')
@endsection
