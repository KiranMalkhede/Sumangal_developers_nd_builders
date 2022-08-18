@extends('layouts.app')

@section('content')
    @include('include.header')
    <div class="container mt-5 px-2">
        <h3 class="text-center">Execative Details</h3>
        @if ($message = Session::get('success_del'))
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="mb-2 d-flex justify-content-between align-items-center">

            <div class="position-relative">
            </div>

            <div class="px-2">
                <a href="{{ route('execative.exeCreate') }}" class="btn btn-primary flot-right"><i
                        class="fas fa-arrow-right"></i></a>
            </div>

        </div>
        {{-- <div class="table-responsive">
            <table class="table table-responsive table-borderless">

                <thead>
                    <tr class="bg-light">
                        <th scope="col" width="5%">Execative code</th>
                        <th scope="col" width="5%">Name</th>
                        <th scope="col" width="20%">Code</th>
                        <th scope="col" width="10%">Email</th>
                        <th scope="col" width="20%">phone</th>
                        <th scope="col" width="20%">Add</th>
                        <th scope="col" class="text-end" width="20%"><span>Active</span></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($execatives as $item)
                        <tr>
                            <td>{{ $item->exe_id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->add }}</td>
                            <td class="text-end" width="20%">
                                <form action="{{ route('execative.exeDelete',$item->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ Route('execative.exeShow',$item->id) }}"><i class="fas fa-eye" style="color:#fff"></i>
                                    </a>

                                    <a class="btn btn-primary" href="{{ Route('execative.exeEdit',$item->id) }}"><i class="fas fa-edit"></i></a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                </tbody>
                @endforeach
            </table>

        </div> --}}
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <div class="container search-table">
            <div class="search-box">
                <div class="row">
                    <div class="col-md-3">
                        {{-- <h5>Search All Fields</h5> --}}
                    </div>
                    <div class="col-md-9">
                        <input type="text" id="myInput" onkeyup="myFunction()" class="form-control"
                            placeholder="Search all fields e.g. HTML">
                        <script>
                            $(document).ready(function() {
                                $("#myInput").on("keyup", function() {
                                    var value = $(this).val().toLowerCase();
                                    $("#myTable tr").filter(function() {
                                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="search-list table-responsive">
                <table class="table table-responsive table-borderless" id="myTable">
                    <thead>
                        <tr class="bg-light">
                            <th scope="col" width="5%">Execative code</th>
                            <th scope="col" width="5%">Name</th>
                            <th scope="col" width="20%">Code</th>
                            <th scope="col" width="10%">Email</th>
                            <th scope="col" width="20%">phone</th>
                            <th scope="col" width="20%">Add</th>
                            <th scope="col" class="text-end" width="20%"><span>Active</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($execatives as $item)
                            <tr>
                                <td>{{ $item->exe_id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->code }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->add }}</td>
                                <td class="text-end" width="20%">
                                    <form action="{{ route('execative.exeDelete', $item->id) }}" method="POST">

                                        <a class="btn btn-info" href="{{ Route('execative.exeShow', $item->id) }}"><i
                                                class="fas fa-eye" style="color:#fff"></i>
                                        </a>

                                        <a class="btn btn-primary" href="{{ Route('execative.exeEdit', $item->id) }}"><i
                                                class="fas fa-edit"></i></a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                    </tbody>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    @include('include.footer')
@endsection
