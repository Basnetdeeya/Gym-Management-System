@extends('admin.app')

@section('admin-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-5">
                    <div class="card mt-4">
                        <div class="card-header">
                            <a href="{{ route('admin.plans.create') }}" class="btn btn-dark"><i class="fa-solid fa-plus pr-2"></i>Packages</a>
                        </div>
                        <div class="card-body">
                            <table  class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Type</th>
                                        <th>Amount</th>
                                        <th>Facility</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($package as $packages)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $packages->type }}</td>
                                        <td>{{ $packages->amount }}</td>
                                        <td>{!! Str::limit($packages->facility, 100) !!}</td>
                                        <td>
                                            <a href="{{ route('admin.plans.edit', $packages->id) }}" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                                            {{-- <a href="/plans/{{ $packages->id }}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a> --}}
                                            <button class="btn btn-danger btn-sm "
                                            onclick="event.preventDefault();
                                            document.getElementById('delete-plans-form-{{ $packages->id }}').submit()">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>

                                            <form id="delete-plans-form-{{ $packages->id }}" action="{{ route('admin.plans.destroy', $packages->id) }}" method="post">
                                                @csrf
                                                @method("DELETE")
                                            </form>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
