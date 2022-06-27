@extends('admin.app')

@section('admin-content')
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12">
                    <div class="card">
                        <div class="d-flex card-header">
                            <h3 class="fw-bold">Member Details</h3>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Gender</th>
                                        {{-- <th>Address</th> --}}
                                        {{-- <th>Date of Birth</th> --}}
                                        <th>Email</th>
                                        {{-- <th>Roles</th> --}}
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
                                        {{-- <td>{{ $item->address }}</td> --}}
                                        {{-- <td>{{ $item->dob }}</td> --}}
                                        <td>{{ $item->email }}</td>
                                        {{-- <td>{{ implode(', ', $item->roles()->get()->pluck('name')->toArray()) }}</td> --}}

                                        <td>
                                            <a href="{{ route('admin.member.edit', $item->id) }}" class="btn  btn-sm btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>
                                            {{-- <a href="/member/{{ $item->id }}" class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></a>
                                            <button class="btn btn-danger btn-sm "
                                                    onclick="event.preventDefault();
                                                    document.getElementById('delete-member-form-{{ $item->id }}').submit()">
                                                    <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#model{{$i}}" class="btn btn-sm btn-info"><i class="fa fa-commenting"></i></a> --}}
                                            <a href="#" data-toggle="modal" data-target="#payment{{$i}}" class="btn btn-sm btn-info"><i class="fa-solid fa-comments-dollar"></i></a>
                                            {{-- <form id="delete-member-form-{{ $item->id }}" action="{{ route('admin.member.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method("DELETE")
                                            </form> --}}

                                            <!-- Modal -->
                                            {{-- <div class="modal fade" id="model{{$i}}" tabindex="-1" role="dialog"  aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Send Feedback</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="POST" action="/trainer/sendFeedback">
                                                    @csrf
                                                        <input type="hidden" name="id" value="{{$item->id}}" />
                                                        <div class="modal-body">
                                                            <label for="textarea" class="col-form-label text-md-end">Write feedback message to {{$item->name}}</label>
                                                            <textarea name="feedback" class="form-control" required></textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Send</button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div> --}}

                                            <!-- Modal -->
                                            <div class="modal fade" id="payment{{$i}}" tabindex="-1" role="dialog"  aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Bought Packages</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                    <table id="datatable" class="table table-hover table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Price</th>
                                                                <th>Payment Type</th>
                                                                <th>Valid Till</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                @foreach($pkgs as $pkg)
                                                                @if($pkg->user_id == $item->id)
                                                                    <td>{{$pkg->type}}</td>
                                                                    <td>{{$pkg->amount}}</td>
                                                                    <td>
                                                                        @if($pkg->paid == 1)
                                                                        Khalti
                                                                        @else
                                                                        Pay at Gym
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        {{$pkg->validtill}}
                                                                    </td>
                                                                    <td>
                                                                        @if($pkg->verified == 0)
                                                                            <form method="POST" action="/admin/validatepayment">
                                                                            @csrf

                                                                                <input type="hidden" name="id" value="{{$pkg->id}}" />
                                                                                <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-check"></i></button>
                                                                            </form>
                                                                        @else
                                                                            <form method="POST" action="/admin/sendFeedback">
                                                                            @csrf
                                                                                <input type="hidden" name="id" value="{{$item->id}}" />
                                                                                <input type="hidden" name="feedback" value='Your package is about to expire. Please renew it soon. Expires at {{$pkg->validtill}}' />
                                                                                <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-refresh"></i></button>
                                                                            </form>
                                                                        @endif

                                                                    </td>
                                                                @endif
                                                                @endforeach
                                                            </tr>
                                                        </tbody>

                                                    </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>


                                                    </div>
                                                </div>
                                            </div>
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
