@extends('layouts.app')

@section('content')
    @include('include.header')
    <div class="container mt-5 px-2">
        <h3 class="text-center">Execative Details</h3>
        @if ($message = Session::get('success_del'))
            <div class="alert alert-danger m-4">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success m-4">
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
        <div class="container search-table">
            <div class="search-box">
                <div class="row">

                    <div class="col-md-6 offset-md-3">
                        <input type="text" id="myInput" onkeyup="myFunction()" class="form-control border-primary"
                            placeholder="Search by name">
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
            <div class="search-list table-responsive m-4 text-center">
                <table class="table table-responsive table-bordered" id="myTable">
                    <thead>
                        <tr class="bg-light">
                            <th>Execative code</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th><span>Action</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($execatives as $item)
                            <tr>
                                <td>{{ $item->exe_id }}</td>
                                <td style="text-transform: capitalize">{{ $item->name }}</td>
                                <td>{{ $item->code }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>
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
