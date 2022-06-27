@extends('admin.app')

@section('admin-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-5">
                <div class="card mt-2">
                    <div class="card-header">
                        <a href="{{ route('admin.whatprovide.create') }}" class="btn btn-dark"><i class="fa-solid fa-plus pr-2"></i> Add What We Provide</a>
                    </div>
                    <div class="card-body">
                        <table  class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($provide as $data)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td><img src="{{ asset($data->serviceimage) }}" width="50" alt=""></td>
                                    <td>{{ $data->title }}</td>
                                    <td>{!! Str::limit($data->description, 70) !!}</td>
                                    <td>
                                        <a href="{{ route('admin.whatprovide.edit', $data->id) }}" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                                        {{-- <a href="/chooseus/{{ $data->id }}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a> --}}
                                        <button class="btn btn-danger btn-sm "
                                        onclick="event.preventDefault();
                                        document.getElementById('delete-whatweprovide-form-{{ $data->id }}').submit()">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="delete-whatweprovide-form-{{ $data->id }}" action="{{ route('admin.whatprovide.destroy', $data->id) }}" method="post">
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
