{{-- @extends('admin.app')

@section('admin-content')
    <div class="container-fluid ">


        <div class="row">

            <div class="col-md-12 ">
                    <div class="card mt-4">
                        <div class="d-flex card-header">
                            <h3>Edit Attendance ({{$atdate->date}})</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.attendance.update',$id) }}">
                            @csrf
                            @method('PATCH')
                                <table id="datatable" class="table table-hover table-sm">
                                    <tbody>
                                        @foreach ($user as $item)
                                            <tr>
                                                <td>{{ ($loop->index)+1}}</td>
                                                <td><input type="checkbox" name="atten[]" value="{{$item->id}}" @if($aa->contains($item->id)) checked @endif />
                                                    {{$item->name}}
                                                </td>
                                            <tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <button type="submit" class="form-control" >Update</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection --}}
