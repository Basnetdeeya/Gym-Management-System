@extends('admin.app')

@section('admin-content')
<div class="container-fluid">
    <div class="row px-5">
        <div class="col-lg-3 col-6 ">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3>{{ $memberCount }}</h3>
                    <h5 class="">Total No.<br>of Members</h5>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="appointment" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $trainerCount }}</h3>
                    <h5 class="">Total No.<br>of Trainers</h5>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="/doctor" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
                <div class="inner">
                    <h3>15</h3>
                    <h5 class="">Today Present<br> Count </h5>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="hireus" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>6</h3>
                    <h5 class="services">Total No.<br>of Services</h5>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        {{-- <div class="col-sm-6">
            <div class="card bg-info">
                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="far fa-calendar-alt"></i>
                        Calendar
                    </h3>

                    <div class="card-tools">
                        <div class="btn-group">
                            <button type="button" class="btn btn-dark btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                                <i class="fas fa-bars"></i>
                            </button>
                            <button type="button" class="btn btn-dark btn-sm" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-dark btn-sm" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <div id="calendar" style="width: 100%, height: 100%">
                        <div class="bootstrap-datetimepicker-widget usetwentyfour">
                            <ul class="list-unstyled">
                                <li class="show">
                                    <div class="datepicker">
                                        <div class="datepicker-days" style="">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th>
                                                        <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">April 2022</th>
                                                        <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th>
                                                    </tr>
                                                    <tr>
                                                        <th class="dow">Su</th><th class="dow">Mo</th>
                                                        <th class="dow">Tu</th><th class="dow">We</th>
                                                        <th class="dow">Th</th>
                                                        <th class="dow">Fr</th><th class="dow">Sa</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td data-action="selectDay" data-day="03/27/2022" class="day old weekend">27</td>
                                                        <td data-action="selectDay" data-day="03/28/2022" class="day old">28</td>
                                                        <td data-action="selectDay" data-day="03/29/2022" class="day old">29</td>
                                                        <td data-action="selectDay" data-day="03/30/2022" class="day old">30</td>
                                                        <td data-action="selectDay" data-day="03/31/2022" class="day old">31</td>
                                                        <td data-action="selectDay" data-day="04/01/2022" class="day">1</td>
                                                        <td data-action="selectDay" data-day="04/02/2022" class="day weekend">2</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-action="selectDay" data-day="04/03/2022" class="day weekend">3</td>
                                                        <td data-action="selectDay" data-day="04/04/2022" class="day">4</td>
                                                        <td data-action="selectDay" data-day="04/05/2022" class="day">5</td>
                                                        <td data-action="selectDay" data-day="04/06/2022" class="day">6</td>
                                                        <td data-action="selectDay" data-day="04/07/2022" class="day">7</td>
                                                        <td data-action="selectDay" data-day="04/08/2022" class="day">8</td>
                                                        <td data-action="selectDay" data-day="04/09/2022" class="day weekend">9</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-action="selectDay" data-day="04/10/2022" class="day active today weekend">10</td>
                                                        <td data-action="selectDay" data-day="04/11/2022" class="day">11</td>
                                                        <td data-action="selectDay" data-day="04/12/2022" class="day">12</td>
                                                        <td data-action="selectDay" data-day="04/13/2022" class="day">13</td>
                                                        <td data-action="selectDay" data-day="04/14/2022" class="day">14</td>
                                                        <td data-action="selectDay" data-day="04/15/2022" class="day">15</td>
                                                        <td data-action="selectDay" data-day="04/16/2022" class="day weekend">16</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-action="selectDay" data-day="04/17/2022" class="day weekend">17</td>
                                                        <td data-action="selectDay" data-day="04/18/2022" class="day">18</td>
                                                        <td data-action="selectDay" data-day="04/19/2022" class="day">19</td>
                                                        <td data-action="selectDay" data-day="04/20/2022" class="day">20</td>
                                                        <td data-action="selectDay" data-day="04/21/2022" class="day">21</td>
                                                        <td data-action="selectDay" data-day="04/22/2022" class="day">22</td>
                                                        <td data-action="selectDay" data-day="04/23/2022" class="day weekend">23</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-action="selectDay" data-day="04/24/2022" class="day weekend">24</td>
                                                        <td data-action="selectDay" data-day="04/25/2022" class="day">25</td>
                                                        <td data-action="selectDay" data-day="04/26/2022" class="day">26</td>
                                                        <td data-action="selectDay" data-day="04/27/2022" class="day">27</td>
                                                        <td data-action="selectDay" data-day="04/28/2022" class="day">28</td>
                                                        <td data-action="selectDay" data-day="04/29/2022" class="day">29</td>
                                                        <td data-action="selectDay" data-day="04/30/2022" class="day weekend">30</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-action="selectDay" data-day="05/01/2022" class="day new weekend">1</td>
                                                        <td data-action="selectDay" data-day="05/02/2022" class="day new">2</td>'
                                                        <td data-action="selectDay" data-day="05/03/2022" class="day new">3</td>
                                                        <td data-action="selectDay" data-day="05/04/2022" class="day new">4</td>
                                                        <td data-action="selectDay" data-day="05/05/2022" class="day new">5</td>
                                                        <td data-action="selectDay" data-day="05/06/2022" class="day new">6</td>
                                                        <td data-action="selectDay" data-day="05/07/2022" class="day new weekend">7</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="datepicker-months" style="display: none;">
                                            <table class="table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th>
                                                        <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2022</th>
                                                        <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="7">
                                                            <span data-action="selectMonth" class="month">Jan</span>
                                                            <span data-action="selectMonth" class="month">Feb</span>
                                                            <span data-action="selectMonth" class="month">Mar</span>
                                                            <span data-action="selectMonth" class="month active">Apr</span>
                                                            <span data-action="selectMonth" class="month">May</span>
                                                            <span data-action="selectMonth" class="month">Jun</span>
                                                            <span data-action="selectMonth" class="month">Jul</span>
                                                            <span data-action="selectMonth" class="month">Aug</span>
                                                            <span data-action="selectMonth" class="month">Sep</span>
                                                            <span data-action="selectMonth" class="month">Oct</span>
                                                            <span data-action="selectMonth" class="month">Nov</span>
                                                            <span data-action="selectMonth" class="month">Dec</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="datepicker-years" style="display: none;">
                                            <table class="table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th>
                                                        <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th>
                                                        <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="7"><span data-action="selectYear" class="year old">2019</span>
                                                            <span data-action="selectYear" class="year">2020</span>
                                                            <span data-action="selectYear" class="year">2021</span>
                                                            <span data-action="selectYear" class="year active">2022</span>
                                                            <span data-action="selectYear" class="year">2023</span>
                                                            <span data-action="selectYear" class="year">2024</span>
                                                            <span data-action="selectYear" class="year">2025</span>
                                                            <span data-action="selectYear" class="year">2026</span>
                                                            <span data-action="selectYear" class="year">2027</span>
                                                            <span data-action="selectYear" class="year">2028</span>
                                                            <span data-action="selectYear" class="year">2029</span>
                                                            <span data-action="selectYear" class="year old">2030</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="datepicker-decades" style="display: none;">
                                            <table class="table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th>
                                                        <th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th>
                                                        <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="7">
                                                            <span data-action="selectDecade" class="decade old" data-selection="2006">1990</span>
                                                            <span data-action="selectDecade" class="decade" data-selection="2006">2000</span>
                                                            <span data-action="selectDecade" class="decade" data-selection="2016">2010</span>
                                                            <span data-action="selectDecade" class="decade active" data-selection="2026">2020</span>
                                                            <span data-action="selectDecade" class="decade" data-selection="2036">2030</span>
                                                            <span data-action="selectDecade" class="decade" data-selection="2046">2040</span>
                                                            <span data-action="selectDecade" class="decade" data-selection="2056">2050</span>
                                                            <span data-action="selectDecade" class="decade" data-selection="2066">2060</span>
                                                            <span data-action="selectDecade" class="decade" data-selection="2076">2070</span>
                                                            <span data-action="selectDecade" class="decade" data-selection="2086">2080</span>
                                                            <span data-action="selectDecade" class="decade" data-selection="2096">2090</span>
                                                            <span data-action="selectDecade" class="decade old" data-selection="2106">2100</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </li>
                                <li class="picker-switch accordion-toggle"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
              <div class="col-md-12 px-5">
                <div class="card card-secondary card-tabs">
                <div class="card-header">
                            <h4>Week Schedules</h4>
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
                                    {{-- <th>Action</th> --}}
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
                                        {{-- <td>
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
                                        </td> --}}
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
                                    {{-- <th>Action</th> --}}
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
                                        {{-- <td>
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
                                        </td> --}}
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
                                    {{-- <th>Action</th> --}}
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
                                        {{-- <td>
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
                                        </td> --}}
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
                                    {{-- <th>Action</th> --}}
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
                                        {{-- <td>
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
                                        </td> --}}
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
                                    {{-- <th>Action</th> --}}
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
                                        {{-- <td>
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
                                        </td> --}}
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
                                    {{-- <th>Action</th> --}}
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
                                        {{-- <td>
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
                                        </td> --}}
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


{{-- Scheduleeeeeeeeeeeeeeee --}}
@endsection
