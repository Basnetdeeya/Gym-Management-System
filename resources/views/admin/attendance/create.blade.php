{{-- @extends('admin.app')

@section('admin-content')
    <div class="container-fluid ">


        <div class="row">

            <div class="col-md-12 ">
                    <div class="card mt-4">
                        <div class="d-flex card-header">
                            <h3>Take Attendance</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.attendance.store') }}">
                            @csrf
                                <label>Select Date</label>
                                <input class="form-control" type="date" name="date"/>
                                <table id="datatable" class="table table-hover table-sm">
                                    <tbody>
                                        @foreach ($user as $item)
                                        <tr>
                                            <td>{{ ($loop->index)+1}}</td>
                                            <td><input type="checkbox" name="atten[]" value="{{$item->id}}"/>{{$item->name}}</td>
                                        <tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <button type="submit" class="form-control" >Submit</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection --}}
