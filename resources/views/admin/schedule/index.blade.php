@extends('admin.app')

@section('admin-content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 px-5">
            <div class="card card-secondary card-tabs">
            <div class="card-header">
                            <a href="{{ route('admin.schedule.create') }}" class="btn btn-dark"><i class="fa-solid fa-plus pr-2"></i>Packages</a>
            </div>
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="sunday-tab" data-toggle="pill" href="#sunday" role="tab" aria-controls="sunday" aria-selected="true">Sunday</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="monday-tab" data-toggle="pill" href="#monday" role="tab" aria-controls="monday" aria-selected="false">Monday</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="tuesday-tab" data-toggle="pill" href="#tuesday" role="tab" aria-controls="tuesday" aria-selected="false">Tuesday</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="wednesday-tab" data-toggle="pill" href="#wednesday" role="tab" aria-controls="wednesday" aria-selected="false">Wednesday</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="thursday-tab" data-toggle="pill" href="#thursday" role="tab" aria-controls="thursday" aria-selected="false">Thrusday</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="friday-tab" data-toggle="pill" href="#friday" role="tab" aria-controls="friday" aria-selected="false">Friday</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="saturday-tab" data-toggle="pill" href="#saturday" role="tab" aria-controls="saturday" aria-selected="false">Saturday</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="sunday" role="tabpanel" aria-labelledby="sunday-tab">
                    <table  class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Class</th>
                                <th>From - To</th>
                                <th>Trainer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedule as $schedules)
                                @if($schedule[$loop->index]->day == 'Sunday')
                                <tr>
                                    <td>{{ ($loop->index)+1 }}</td>
                                    <td>{{$schedule[$loop->index]->class}}</td>
                                    <td>{{$schedule[$loop->index]->start_time}} - {{$schedule[0]->end_time}}</td>
                                    <td>{{$schedule[$loop->index]->name}}</td>
                                    <td>
                                        <a href="{{ route('admin.schedule.edit', $schedules->id) }}" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <!-- <a href="/schedule/{{$schedule[$loop->index]->id}}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a> -->
                                        <button class="btn btn-danger btn-sm "
                                        onclick="event.preventDefault();
                                        document.getElementById('delete-schedule-form-{{$schedule[$loop->index]->id}}').submit()">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="delete-schedule-form-{{$schedule[$loop->index]->id}}" action="{{ route('admin.schedule.destroy', $schedules->id) }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                        </form>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="monday" role="tabpanel" aria-labelledby="monday-tab">
                    <table  class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Class</th>
                                <th>From - To</th>
                                <th>Trainer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedule as $schedules)
                                @if($schedule[$loop->index]->day == 'Monday')
                                <tr>
                                    <td>{{ ($loop->index)+1 }}</td>
                                    <td>{{$schedule[$loop->index]->class}}</td>
                                    <td>{{$schedule[$loop->index]->start_time}} - {{$schedule[0]->end_time}}</td>
                                    <td>{{$schedule[$loop->index]->name}}</td>
                                    <td>
                                        <a href="{{ route('admin.schedule.edit', $schedules->id) }}" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <!-- <a href="/schedule/{{$schedule[$loop->index]->id}}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a> -->
                                        <button class="btn btn-danger btn-sm "
                                        onclick="event.preventDefault();
                                        document.getElementById('delete-schedule-form-{{$schedule[$loop->index]->id}}').submit()">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="delete-schedule-form-{{$schedule[$loop->index]->id}}" action="{{ route('admin.schedule.destroy', $schedules->id) }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                        </form>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
                    <table  class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Class</th>
                                <th>From - To</th>
                                <th>Trainer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedule as $schedules)
                                @if($schedule[$loop->index]->day == 'Tuesday')
                                <tr>
                                    <td>{{ ($loop->index)+1 }}</td>
                                    <td>{{$schedule[$loop->index]->class}}</td>
                                    <td>{{$schedule[$loop->index]->start_time}} - {{$schedule[0]->end_time}}</td>
                                    <td>{{$schedule[$loop->index]->name}}</td>
                                    <td>
                                        <a href="{{ route('admin.schedule.edit', $schedules->id) }}" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <!-- <a href="/schedule/{{$schedule[$loop->index]->id}}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a> -->
                                        <button class="btn btn-danger btn-sm "
                                        onclick="event.preventDefault();
                                        document.getElementById('delete-schedule-form-{{$schedule[$loop->index]->id}}').submit()">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="delete-schedule-form-{{$schedule[$loop->index]->id}}" action="{{ route('admin.schedule.destroy', $schedules->id) }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                        </form>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
                    <table  class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Class</th>
                                <th>From - To</th>
                                <th>Trainer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedule as $schedules)
                                @if($schedule[$loop->index]->day == 'Wednesday')
                                <tr>
                                    <td>{{ ($loop->index)+1 }}</td>
                                    <td>{{$schedule[$loop->index]->class}}</td>
                                    <td>{{$schedule[$loop->index]->start_time}} - {{$schedule[0]->end_time}}</td>
                                    <td>{{$schedule[$loop->index]->name}}</td>
                                    <td>
                                        <a href="{{ route('admin.schedule.edit', $schedules->id) }}" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <!-- <a href="/schedule/{{$schedule[$loop->index]->id}}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a> -->
                                        <button class="btn btn-danger btn-sm "
                                        onclick="event.preventDefault();
                                        document.getElementById('delete-schedule-form-{{$schedule[$loop->index]->id}}').submit()">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="delete-schedule-form-{{$schedule[$loop->index]->id}}" action="{{ route('admin.schedule.destroy', $schedules->id) }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                        </form>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="wednesday-tab">
                    <table  class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Class</th>
                                <th>From - To</th>
                                <th>Trainer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedule as $schedules)
                                @if($schedule[$loop->index]->day == 'Thursday')
                                <tr>
                                    <td>{{ ($loop->index)+1 }}</td>
                                    <td>{{$schedule[$loop->index]->class}}</td>
                                    <td>{{$schedule[$loop->index]->start_time}} - {{$schedule[0]->end_time}}</td>
                                    <td>{{$schedule[$loop->index]->name}}</td>
                                    <td>
                                        <a href="{{ route('admin.schedule.edit', $schedules->id) }}" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <!-- <a href="/schedule/{{$schedule[$loop->index]->id}}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a> -->
                                        <button class="btn btn-danger btn-sm "
                                        onclick="event.preventDefault();
                                        document.getElementById('delete-schedule-form-{{$schedule[$loop->index]->id}}').submit()">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="delete-schedule-form-{{$schedule[$loop->index]->id}}" action="{{ route('admin.schedule.destroy', $schedules->id) }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                        </form>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="friday" role="tabpanel" aria-labelledby="wednesday-tab">
                    <table  class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Class</th>
                                <th>From - To</th>
                                <th>Trainer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedule as $schedules)
                                @if($schedule[$loop->index]->day == 'Friday')
                                <tr>
                                    <td>{{ ($loop->index)+1 }}</td>
                                    <td>{{$schedule[$loop->index]->class}}</td>
                                    <td>{{$schedule[$loop->index]->start_time}} - {{$schedule[0]->end_time}}</td>
                                    <td>{{$schedule[$loop->index]->name}}</td>
                                    <td>
                                        <a href="{{ route('admin.schedule.edit', $schedules->id) }}" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <!-- <a href="/schedule/{{$schedule[$loop->index]->id}}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a> -->
                                        <button class="btn btn-danger btn-sm "
                                        onclick="event.preventDefault();
                                        document.getElementById('delete-schedule-form-{{$schedule[$loop->index]->id}}').submit()">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="delete-schedule-form-{{$schedule[$loop->index]->id}}" action="{{ route('admin.schedule.destroy', $schedules->id) }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                        </form>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="saturday" role="tabpanel" aria-labelledby="wednesday-tab">
                    <table  class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Class</th>
                                <th>From - To</th>
                                <th>Trainer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedule as $schedules)
                                @if($schedule[$loop->index]->day == 'Saturday')
                                <tr>
                                    <td>{{ ($loop->index)+1 }}</td>
                                    <td>{{$schedule[$loop->index]->class}}</td>
                                    <td>{{$schedule[$loop->index]->start_time}} - {{$schedule[0]->end_time}}</td>
                                    <td>{{$schedule[$loop->index]->name}}</td>
                                    <td>
                                        <a href="{{ route('admin.schedule.edit', $schedules->id) }}" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <!-- <a href="/schedule/{{$schedule[$loop->index]->id}}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a> -->
                                        <button class="btn btn-danger btn-sm "
                                        onclick="event.preventDefault();
                                        document.getElementById('delete-schedule-form-{{$schedule[$loop->index]->id}}').submit()">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>

                                        <form id="delete-schedule-form-{{$schedule[$loop->index]->id}}" action="{{ route('admin.schedule.destroy', $schedules->id) }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                        </form>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
    </div>
@endsection
