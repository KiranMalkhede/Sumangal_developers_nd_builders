@extends('layouts.app')

@section('content')
    @include('include.header')
    <div class="container mt-5 px-2">
        <h3 class="text-center">Layout Details</h3>
        @if ($message = Session::get('success_del'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

        <div class="mb-2 d-flex justify-content-between align-items-center">

            <div class="position-relative">
            </div>

            <div class="px-2">
                <a href="{{ route('layout.create') }}" class="btn btn-primary flot-right"><i class="fas fa-arrow-right"></i></a>
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
                    @foreach ($layouts as $item)
                        <tr>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->project }}</td>
                            <td>{{ $item->mouza }}</td>
                            <td>{{ $item->khasara }}</td>
                            <td>{{ $item->phNo }}</td>
                            <td class="text-end" width="20%">
                                <form action="{{ route('layout.delete',$item->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ Route('layout.show',$item->id) }}"><i class="fas fa-eye" style="color:#fff"></i>
                                    </a>

                                    <a class="btn btn-primary" href="{{ Route('layout.edit',$item->id) }}"><i class="fas fa-edit"></i></a>

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
