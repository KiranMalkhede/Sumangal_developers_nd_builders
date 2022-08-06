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
                        show data
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('master_Entries') }}" class="btn btn-primary" style="float: right;"><i
                                class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card-body  bg-light">
                <form action="{{ Route('master.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">SR.No</label>
                                <input type="text" name="srNo" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Execative No.</label>
                                <input type="text" name="exeNo" id="code" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Purchase Date</label>
                                <input type="date" name="date" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Comm</label>
                                <input type="text" name="comm" class="form-control">
                            </div>
                        </div>
                        <hr>
                        <h4 class="text-center">Customer Details</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name2" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Data Of Birth</label>
                                <input type="date" name="dob" class="form-control">
                            </div>
                            <div>
                                <label for="" class="form-label">Address</label>
                                {{-- <input type="text" name="comm" class="form-control"> --}}
                                <textarea name="add" id="" cols="5" rows="0" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Age</label>
                                <input type="number" name="age" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Occupation</label>
                                <input type="text" name="occupation" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Phone No.</label>
                                <input type="text" name="phone1" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Phone No.</label>
                                <input type="text" name="phone2" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Phone No.</label>
                                <input type="text" name="phone3" class="form-control">
                            </div>
                        </div>
                        <hr>
                        <h4 class="text-center">Nominee Detail</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="nameNom" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Date of Birth</label>
                                <input type="date" name="dobNom" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Age</label>
                                <input type="mumber" name="ageNom" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Relation With Applicant</label>
                                <input type="text" name="app" class="form-control">
                            </div>
                            <div>
                                <label for="" class="form-label">Address</label>
                                {{-- <input type="text" name="comm" class="form-control"> --}}
                                <textarea name="add2" id="" cols="5" rows="0" class="form-control"></textarea>
                            </div>
                        </div>
                            <hr>
                        <h4 class="text-center">Plot Details</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Disc Level(upto %)</label>
                                <input type="text" name="dise" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">DLock Comm Up to Code</label>
                                <input type="text" name="lock" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Select Layout</label>
                                <input type="text" name="selectLayout" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Comm. in Sqr. Ft.</label>
                                <input type="text" name="sqrFt" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Plot No.</label>
                                <input type="text" name="plotNo" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Khasara No.</label>
                                <input type="text" name="khasaraNo" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Sqr Ft.</label>
                                <input type="text" name="sqrFt2" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Mouza</label>
                                <input type="text" name="mouza" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">P.H.No.</label>
                                <input type="text" name="phNo" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Size</label>
                                <input type="text" name="size" class="form-control">
                            </div>
                            <div class="">
                                <label for="" class="form-label">Other Detail</label>
                                <input type="text" name="otherDetail" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Sale Rate</label>
                                <input type="text" name="saleRate" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Total Plot Cost</label>
                                <input type="text" name="totalPlotC" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Company Rate</label>
                                <input type="text" name="ComRate" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Net Plot Cost</label>
                                <input type="text" name="netPlotCost" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">No. of Installments</label>
                                <input type="text" name="noInstall" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Down-Payment</label>
                                <input type="text" name="downPay" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">Installment From</label>
                                <input type="date" name="instalFrom" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">To</label>
                                <input type="date" name="installTo" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">Dp</label>
                                <input type="text" name="dp" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">Mon. Install</label>
                                <input type="text" name="monInstall" class="form-control">
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
    <script type="text/javascript">

        // CSRF Token
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function(){
     
          $( "#name" ).autocomplete({
             source: function( request, response ) {
                // Fetch data
                $.ajax({
                  url:"{{route('master.search')}}",
                  type: 'get',
                  dataType: "json",
                  data: {
                     _token: CSRF_TOKEN,
                     search: request.term
                  },
                  success: function( data ) {
                     response( data );
                  }
                });
             },
             select: function (event, ui) {
               // Set selection
               $('#name').val(ui.item.label); // display the selected text
               $('#code').val(ui.item.value); // save selected id to input
            //    $('#username').val(ui.item.value2); // save selected id to input
            //    $('#email').val(ui.item.value3); // save selected id to input
     
               return false;
             }
          });
     
        });
        </script>
@endsection
