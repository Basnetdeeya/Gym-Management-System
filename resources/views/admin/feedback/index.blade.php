@extends('admin.app')

@section('admin-content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div  class="card">
                <div class="card-header">
                    <a href="" class="btn btn-dark">User Feedback</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover" id="datatable" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>FeedbackType</th>
                                <th>Description</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Date</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($feedback as $cate)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $cate->feedbacktype }}</td>
                                    <td>{!! Str::limit($cate->feedbackmessage, 20) !!}</td>
                                    <td>{{ $cate->name }}</td>
                                    <td>{{ $cate->email }}</td>
                                    <td>{{ $cate->date }}</td>
                                    <td>{{ $cate->phone }}</td>
                                    <td>
                                        {{-- <a href="" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a> --}}
                                        <a data-toggle="modal" data-target="#modal{{$cate->id}}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
                                             <!-- Modal -->
                                                <div class="modal fade" id="modal{{$cate->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">

                                                        <div class="modal-body">
                                                        <h5>Messages</h5><hr>
                                                        {{$cate->feedbackmessage}}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <button class="btn btn-danger btn-sm "
                                                    onclick="event.preventDefault();
                                                    document.getElementById('delete-feedback-form-{{ $cate->id }}').submit()">
                                                    <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="delete-feedback-form-{{ $cate->id }}" action="{{ route('admin.feedback.destroy', $cate->id) }}" method="post">
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
