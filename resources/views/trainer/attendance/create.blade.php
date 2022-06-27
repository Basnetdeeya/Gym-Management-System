@extends('trainer.app')

@section('trainer-content')
    <div class="container-fluid ">

        <div class="row">

            <div class="col-md-12 px-5">
                <a href="{{ route('trainer.attendance.index') }}" class="btn btn-dark"><i class="fa-regular fa-circle-left pr-2"></i>Go Back</a>
                    <div class="card mt-4">
                        <div class="d-flex card-header">
                            <h3>Take Attendance</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('trainer.attendance.store') }}">
                            @csrf
                                <label>Select Date</label>
                                <input class="form-control col-md-2 mb-4" type="date" name="date"/>
                                <table id="datatable" class="table table-hover table-sm mb-3">
                                    <tbody>
                                        @foreach ($user as $item)
                                        <tr>
                                            <td>{{ ($loop->index)+1}}</td>
                                            <td><input type="checkbox" class="form-check-input" name="atten[]" value="{{$item->id}}"/>{{$item->name}}</td>
                                        <tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="col-md-12" >
                                    <button type="submit" class="form-control btn btn-success ">
                                        <i class="fa-solid fa-rotate-right pr-2"></i>  {{ __('Save Attendance') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
