@extends('layouts.app')

@section('content')
    @include('include.header')
    <div class="container mt-5 px-2">
      

        <h3 class="text-center">Master Entries Details</h3>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('success_del'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

        <div class="mb-2 d-flex justify-content-between align-items-center">

            <div class="position-relative">
            </div>

            <div class="px-2">
                <a href="{{ route('master.create') }}" class="btn btn-primary flot-right"><i
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
                    @foreach ($masters as $item)
                        <tr>
                            <td>{{ $item->srNo }}</td>
                            <td>{{ $item->exeNo }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->date }}</td>
                            <td>{{ $item->comm }}</td>
                            <td class="text-end" width="20%">
                                <form action="{{ Route('master.destroy', $item->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ Route('master.show', $item->id) }}"><i
                                            class="fas fa-eye" style="color:#fff"></i>
                                    </a>

                                    <a class="btn btn-primary" href="{{ Route('master.edit', $item->id) }}"><i
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
            </table>
        </div>
    </div>
    <div class="py-5">
        @include('include.footer')
    </div>
@endsection
