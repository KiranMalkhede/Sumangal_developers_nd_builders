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
                        <a href="{{ url('landownerdetails') }}" class="btn btn-primary" style="float: right;"><i
                                class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-body" style="background-color: #dee8f2">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Owner Name</label>
                                <input type="text" name="ownerName" value="{{ $landowner->ownerName }}" class="form-control" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Postal Address</label>
                                <input type="text" name="address" value="{{ $landowner->address }}" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Contact Detail</label>
                                <input type="text" value="{{ $landowner->contactDetail }}"  name="contactDetail" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Contact Detail</label>
                                <input type="text" value="{{ $landowner->contactDetail2 }}"   name="contactDetail2" class="form-control" readonly>
                            </div>                         
                            <div class="col-md-4">
                                <label for="" class="form-label">Mouza</label>
                                <input type="text" name="mouza" value="{{ $landowner->mouza }}"  class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Khasara No.</label>
                                <input type="text" name="khasara" value="{{ $landowner->khasara }}"  class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">P.H. No.</label>
                                <input type="text" name="phNo" value="{{ $landowner->phNo }}"  class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Area in Hectres/Acres</label>
                                <input type="text" name="acres" value="{{ $landowner->acres }}"  class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Per Acre Cost</label>
                                <input type="text" name="perAcres" value="{{ $landowner->perAcres }}"  class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Total Land Cost</label>
                                <input type="text" name="totalCost" value="{{ $landowner->totalCost }}"  class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Payment Period</label>
                                <input type="text" name="payPeriod" value="{{ $landowner->payPeriod }}"class="form-control" readonly>
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
