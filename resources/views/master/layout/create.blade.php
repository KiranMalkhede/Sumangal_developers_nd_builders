@extends('layouts.app')

@section('content')
    @include('include.header')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        Create  data
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('layout.index') }}" class="btn btn-primary" style="float: right;"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card-body  bg-light">
                <form action="{{ Route('layout.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Code No.</label>
                                <input type="text" name="code" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Project Name</label>
                                <input type="text" name="project" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Mouza</label>
                                <input type="text" name="mouza" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Khasara No.</label>
                                <input type="text" name="khasara" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">P.H. No.</label>
                                <input type="text" name="phNo" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Tah. & Dist.</label>
                                <input type="text" name="tah" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Area Under Total Land</label>
                                <input type="text" name="land" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Area Under Retainable Share</label>
                                <input type="text" name="share" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Area Under Surplus Land</label>
                                <input type="text" name="surplusLand" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Area under Govt. Share</label>
                                <input type="text" name="govtShare" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Area Under Open Space</label>
                                <input type="text" name="openSpace" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Area Under Public Utility</label>
                                <input type="text" name="uitility" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Area Under Plots</label>
                                <input type="text" name="plot" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Area Under Road</label>
                                <input type="text" name="road" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Rate For Commercial Plots.</label>
                                <input type="text" name="commPlot" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Down-Payment (%)</label>
                                <input type="text" name="downPay" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Install. Period</label>
                                <input type="text" name="installPer" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Rate For semi-Commercial Plots.</label>
                                <input type="text" name="samiComm" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Down-Payment (%)</label>
                                <input type="text" name="downPay2" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Install. Period</label>
                                <input type="text" name="installPer2" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Rate For other Plots.</label>
                                <input type="text" name="otherPlot" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Down-Payment (%)</label>
                                <input type="text" name="downPay3" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Install. Period</label>
                                <input type="text" name="installPer3" class="form-control">
                            </div>
                            <div class="col-md-4">
                                {{-- <label for="" class="form-label">Rate For semi-Commercial Plots.</label>
                                <input type="text" name="samiComm" class="form-control"> --}}
                            </div>

                            <div class="col-md-4 py-3 form-check form-switch">
                                {{-- <input class="form-check-input" type="checkbox" value="yes"  name="sqrFt" id="flexSwitchCheckDefault"> --}}
                                <label class="form-label" for="flexSwitchCheckDefault">Commission in Sqr.
                                    Ft.</label>
                                    <select name="sqrFt" id="" class="form-select">
                                        <option value="">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                            </div>
                            <div class="col-md-4 py-3 form-check form-switch">
                                {{-- <input class="form-check-input" type="checkbox" value="yes" name="finance" id="flexSwitchCheckDefault1"> --}}
                                <label class="form-label" for="flexSwitchCheckDefault1">Finance Scheme</label>
                                <select name="finance" id="" class="form-select">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
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
