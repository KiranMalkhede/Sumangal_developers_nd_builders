@extends('layouts.app')

@section('content')
    @include('include.header')
    <div class="container mt-5 px-2">
        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
            integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
        </script>

        <h3 class="text-center">Transaction Details</h3>

        <div class="mb-2 d-flex justify-content-between align-items-center">

            <div class="position-relative">
            </div>

            <div class="px-2">
                <a href="{{ route('transaction.create') }}" class="btn btn-primary flot-right"><i
                        class="fas fa-arrow-right"></i></a>
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
                <tbody>
                    @foreach ($transactions as $item)
                        <tr>
                            <td>{{ $item->srNo }}</td>
                            <td>{{ $item->exeNo }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->date }}</td>
                            <td>{{ $item->comm }}</td>
                            <td class="text-end" width="20%">
                                <form action="" method="POST">

                                    <a class="btn btn-info" href=""><i class="fas fa-eye" style="color:#fff"></i>
                                    </a>

                                    <a class="btn btn-primary" href=""><i class="fas fa-edit"></i></a>

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

        </div>

    </div>
    @include('include.footer')
@endsection
