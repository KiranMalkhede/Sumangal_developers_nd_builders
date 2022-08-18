@extends('layouts.app')

@section('content')
    @include('include.header')
    <div class="container mt-5 px-2">
        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
            integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
        </script>

        <h3 class="text-center">Monthly Business</h3>

        <div class="mb-2 d-flex justify-content-between align-items-center">

            <div class="card-body  bg-light">
                <form action="{{ route('monthly.business') }}" method="get">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label fromDatefor="" class="form-label">From Date</label>
                                <input type="date" name="start_date" class="form-control" required>
                                {{-- <p>Date: <input type="text" id="datepicker" class="datepicker"></p> --}}

                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">To Date</label>
                                <input type="date" name="end_date" class="form-control" required>
                                {{-- <p>Date: <input type="text" id="datepicker" class="datepicker"></p> --}}

                            </div>
                        </div>
                        <div class="form-group py-3">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-responsive table-borderless">

                <thead>
                    <tr class="bg-light">
                        <th scope="col" width="5%">Sr No.</th>
                        <th scope="col" width="20%">Execative No.</th>
                        <th scope="col" width="10%">Name</th>
                        <th scope="col" width="20%">Date</th>
                        <th scope="col" width="20%">comm</th>
                        <th scope="col" class="text-end" width="20%"><span>Active</span></th>
                    </tr>
                </thead>
                @foreach ($data as $item)
                    <tbody>
                        <tr>
                            <td>{{ $item->srNo }}</td>
                            <td>{{ $item->exeNo }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->date }}</td>
                            <td>{{ $item->comm }}</td>
                            <td class="text-end" width="20%">
                                <a class="btn btn-info" href="{{ Route('data.show', $item->id) }}"><i
                                    class="fas fa-eye" style="color:#fff"></i>
                            </a>
                            </td>
                        </tr>
                        
                    </tbody>
                @endforeach
            </table>
        </div>
        @include('include.footer')
    @endsection
