@extends('layouts.app')

@section('content')
    @include('include.header')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Add Data
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card-body  bg-light">
                <form action="{{ Route('layout.update',$layouts->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Code No.</label>
                                <input type="text" name="code" value="{{ $layouts->code }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Project Name</label>
                                <input type="text" name="project" value="{{ $layouts->project }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Mouza</label>
                                <input type="text" name="mouza" value="{{ $layouts->mouza }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Khasara No.</label>
                                <input type="text" name="khasara" value="{{ $layouts->khasara }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">P.H. No.</label>
                                <input type="text" name="phNo" value="{{ $layouts->phNo }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Tah. & Dist.</label>
                                <input type="text" name="tah" value="{{ $layouts->tah }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Area Under Total Land</label>
                                <input type="text" name="land" value="{{ $layouts->land }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Area Under Retainable Share</label>
                                <input type="text" name="share" value="{{ $layouts->share }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Area Under Surplus Land</label>
                                <input type="text" name="surplusLand" value="{{ $layouts->surplusLand }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Area under Govt. Share</label>
                                <input type="text" name="govtShare" value="{{ $layouts->govtShare }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Area Under Open Space</label>
                                <input type="text" name="openSpace" value="{{ $layouts->openSpace }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Area Under Public Utility</label>
                                <input type="text" name="uitility" value="{{ $layouts->uitility }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Area Under Plots</label>
                                <input type="text" name="plot" value="{{ $layouts->plot }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Area Under Road</label>
                                <input type="text" name="road" value="{{ $layouts->road }}" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Rate For Commercial Plots.</label>
                                <input type="text" name="commPlot" value="{{ $layouts->commPlot }}" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Down-Payment (%)</label>
                                <input type="text" name="downPay" value="{{ $layouts->downPay }}" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Install. Period</label>
                                <input type="text" name="installPer"  value="{{ $layouts->installPer }}" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Rate For semi-Commercial Plots.</label>
                                <input type="text" name="samiComm" value="{{ $layouts->samiComm }}" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Down-Payment (%)</label>
                                <input type="text" name="downPay2" value="{{ $layouts->downPay2 }}" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Install. Period</label>
                                <input type="text" name="installPer2" value="{{ $layouts->installPer2 }}" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Rate For other Plots.</label>
                                <input type="text" name="otherPlot" value="{{ $layouts->otherPlot }}" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Down-Payment (%)</label>
                                <input type="text" name="downPay3" value="{{ $layouts->downPay3 }}" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Install. Period</label>
                                <input type="text" name="installPer3" value="{{ $layouts->installPer3 }}" class="form-control">
                            </div>
                            <div class="col-md-4">
                                {{-- <label for="" class="form-label">Rate For semi-Commercial Plots.</label>
                                <input type="text" name="samiComm" class="form-control"> --}}
                            </div>

                            <div class="col-md-4 py-3 form-check form-switch">
                                <input class="form-check-input" type="checkbox" value="yes" value="{{ $layouts->sqrFt }}"  name="sqrFt" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Commission in Sqr.
                                    Ft.</label>
                            </div>
                            <div class="col-md-4 py-3 form-check form-switch">
                                <input class="form-check-input" type="checkbox" value="yes" value="{{ $layouts->finance }}" name="finance" id="flexSwitchCheckDefault1">
                                <label class="form-check-label" for="flexSwitchCheckDefault1">Finance Scheme</label>
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
