@extends('admin.app')

@section('admin-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-2">
                    <div class="card-header">
                        <a href="{{ route('admin.whychooseus.create') }}" class="btn btn-dark"><i class="fa-solid fa-plus pr-2"></i> Add Why Choose Us</a>
                    </div>
                    <div class="card-body">
                        <table  class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($provide as $data)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data->title }}</td>
                                    <td>{!! Str::limit($data->description, 70) !!}</td>
                                    <td>
                                        <a href="{{ route('admin.whychooseus.edit', $data->id) }}" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a href="/chooseus/{{ $data->id }}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
                                        <button class="btn btn-danger btn-sm "
                                        onclick="event.preventDefault();
                                        document.getElementById('delete-chooseus-form-{{ $data->id }}').submit()">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="delete-chooseus-form-{{ $data->id }}" action="{{ route('admin.whychooseus.destroy', $data->id) }}" method="post">
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
