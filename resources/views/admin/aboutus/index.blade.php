@extends('admin.app')

@section('admin-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-5">
                    <div class="card">
                        <div class="card-header">
                            {{-- <a href="{{ route('admin.aboutus.create') }}" class="btn btn-dark"><i class="fa-solid fa-plus pr-2"></i> About Us</a> --}}
                            <h3>About US</h3>
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
                                    @foreach ($about as $aboutus)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $aboutus->title }}</td>
                                        <td>{!! Str::limit($aboutus->description, 100) !!}</td>
                                        <td>
                                            <a href="{{ route('admin.aboutus.edit', $aboutus->id) }}" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                                            {{-- <a href="/aboutus/{{ $aboutus->id }}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a> --}}
                                            <button class="btn btn-danger btn-sm "
                                            onclick="event.preventDefault();
                                            document.getElementById('delete-member-form-{{ $aboutus->id }}').submit()">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>

                                            <form id="delete-aboutus-form-{{ $aboutus->id }}" action="{{ route('admin.aboutus.destroy', $aboutus->id) }}" method="post">
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
