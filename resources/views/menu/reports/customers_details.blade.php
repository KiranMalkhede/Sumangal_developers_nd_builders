@extends('layouts.app')

@section('content')
    @include('include.header')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>Customer's Details</h3>
                    </div>
                </div>
            </div>
            <div class="card-body" style="background-color: rgb(168, 236, 236)">
                <form action="">
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Reg.No</label>
                        </div>
                        <div class="col-auto">
                            <input type="password" id="inputPassword6" class="form-control"
                                aria-describedby="passwordHelpInline">
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Reg.Date</label>
                        </div>
                        <div class="col-auto">
                            <input type="password" id="inputPassword6" class="form-control"
                                aria-describedby="passwordHelpInline">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Purchaser's name</label>
                        </div>
                        <div class="col">
                            <input type="password" id="inputPassword6" class="form-control"
                                aria-describedby="passwordHelpInline">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Address </label>
                        </div>
                        <div class="col">
                            <input type="password" id="inputPassword6" class="form-control"
                                aria-describedby="passwordHelpInline">
                        </div>
                    </div>
                    <hr>
                    <div class="row g-3 align-items-center mt-2">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Executive name</label>
                        </div>
                        <div class="col">
                            <input type="password" id="inputPassword6" class="form-control"
                                aria-describedby="passwordHelpInline">
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Executive Code</label>
                        </div>
                        <div class="col-auto">
                            <input type="password" id="inputPassword6" class="form-control"
                                aria-describedby="passwordHelpInline">
                        </div>
                    </div>
                    <hr>
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Mouza</label>
                        </div>
                        <div class="col-auto">
                            <input type="password" id="inputPassword6" class="form-control"
                                aria-describedby="passwordHelpInline">
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Plot no.</label>
                        </div>
                        <div class="col-auto">
                            <input type="password" id="inputPassword6" class="form-control"
                                aria-describedby="passwordHelpInline">
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Khasara No</label>
                        </div>
                        <div class="col-auto">
                            <input type="password" id="inputPassword6" class="form-control"
                                aria-describedby="passwordHelpInline">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-1">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Plot Cost</label>
                        </div>
                        <div class="col-auto">
                            <input type="password" id="inputPassword6" class="form-control"
                                aria-describedby="passwordHelpInline">
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Size</label>
                        </div>
                        <div class="col-auto">
                            <input type="password" id="inputPassword6" class="form-control"
                                aria-describedby="passwordHelpInline">
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Type</label>
                        </div>
                        <div class="col-auto">
                            <input type="password" id="inputPassword6" class="form-control"
                                aria-describedby="passwordHelpInline">
                        </div>
                    </div>
                </form>
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
                </table>
            </div>
        </div>
    </div>

    @include('include.footer')
@endsection
