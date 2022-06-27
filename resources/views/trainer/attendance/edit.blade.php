@extends('trainer.app')

@section('trainer-content')
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12 px-5">
                <a href="{{ route('trainer.attendance.index') }}" class="btn btn-dark mb-3"><i class="fa-regular fa-circle-left pr-2"></i>Go Back</a>
                    <div class="card ">
                        <div class=" card-header">
                            <h3>Edit Attendance ({{$atdate->date}})</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('trainer.attendance.update',$id) }}">
                            @csrf
                            @method('PATCH')
                                <table id="datatable" class="table table-hover table-sm mb-4">
                                    <tbody>
                                        @foreach ($user as $item)
                                            <tr>
                                                <td>{{ ($loop->index)+1}}</td>
                                                <td><input type="checkbox" class="form-check-input" name="atten[]" value="{{$item->id}}" @if($aa->contains($item->id)) checked @endif />
                                                    {{$item->name}}
                                                </td>
                                            <tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="col-md-12" >
                                    <button type="submit" class="form-control btn btn-success ">
                                        <i class="fa-solid fa-rotate-right pr-2"></i>  {{ __('Update Attendance') }}
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
