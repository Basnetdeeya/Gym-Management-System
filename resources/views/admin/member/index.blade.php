@extends('admin.app')

@section('admin-content')
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12 ">
                    <div class="card">
                        <div class="d-flex card-header">
                            <a href="{{ route('admin.member.create') }}" class="btn btn-dark"><i class="fa-solid fa-user-plus pr-2"></i> Add Users</a>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        {{-- <th>Date of Birth</th> --}}
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $i++}}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->gender }}</td>
                                        <td>{{ $item->address }}</td>
                                        {{-- <td>{{ $item->dob }}</td> --}}
                                        <td>{{ $item->email }}</td>
                                        <td>{{ implode(', ', $item->roles()->get()->pluck('name')->toArray()) }}</td>

                                        <td>
                                            <a href="{{ route('admin.member.edit', $item->id) }}" class="btn  btn-sm btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>
                                            {{-- <a href="/member/{{ $item->id }}" class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></a> --}}
                                            <button class="btn btn-danger btn-sm "
                                                    onclick="event.preventDefault();
                                                    document.getElementById('delete-member-form-{{ $item->id }}').submit()">
                                                    <i class="fa-solid fa-trash-can"></i>
                                            </button>

                                            <form id="delete-member-form-{{ $item->id }}" action="{{ route('admin.member.destroy', $item->id) }}" method="post">
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
