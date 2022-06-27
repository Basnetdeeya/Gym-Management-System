{{-- @extends('admin.app')

@section('admin-content')
    <div class="container-fluid ">


        <div class="row">

            <div class="col-md-12 ">
                    <div class="card mt-4">
                        <div class="d-flex card-header">
                            <a href="{{ route('admin.attendance.create') }}" class="btn btn-dark"><i class="fa-solid fa-user-plus pr-2"></i> Take Attendance</a>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach ($att as $item)
                                    <tr>
                                        <td>{{ ($loop->index)+1}}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>
                                            <a href="{{ route('admin.attendance.edit', $item->id) }}" class="btn  btn-sm btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <button class="btn btn-danger btn-sm "
                                                    onclick="event.preventDefault();
                                                    document.getElementById('delete-attendance-form-{{ $item->id }}').submit()">
                                                    <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                            <form id="delete-attendance-form-{{ $item->id }}" action="{{ route('admin.attendance.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method("DELETE")
                                            </form>
                                        </td>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection --}}
