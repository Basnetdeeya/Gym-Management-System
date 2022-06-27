@extends('admin.app')

@section('admin-content')
    <div class="container">
        <div class="row">
            <div class="col-md 12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.schedule.index') }}" class="btn btn-dark"><i class="fa-regular fa-circle-left pr-2"></i>Go Back</a>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.schedule.store') }}" enctype="multipart/form-data">
                                @csrf
                                <h3 class="text-center fw-bold">Schedule</h3>

                                <div class="mx-5 mb-3">
                                    <label for="class" class=" col-form-label text-md-end">{{ __('Trainer Name:') }}</label>

                                        <!-- <input id="class" type="text" class="form-control @error('class') is-invalid @enderror" name="class" value="{{ old('class') }}" autofocus> -->
                                        <select id="user_id" name="user_id" class="form-control" required>
                                            @foreach($user as $users)
                                                <option value="{{$user[$loop->index]->id}}">{{$user[$loop->index]->name}}</option>
                                            @endforeach
                                        </select>

                                        @error('user_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="row mx-5">
                                    <div class="col-md-6  mb-3">
                                        <label for="class" class=" col-form-label text-md-end">{{ __('Day:') }}</label>

                                            {{-- <!-- <input id="class" type="text" class="form-control @error('class') is-invalid @enderror" name="class" value="{{ old('class') }}" autofocus> --> --}}
                                            <select id="day" name="day" class="form-control" required>
                                                <option value="Sunday">Sunday</option>
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Firday">Friday</option>
                                                <option value="Saturday">Saturday</option>
                                            </select>

                                            @error('day')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <div class="col-md-6  mb-3">
                                        <label for="class" class=" col-form-label text-md-end">{{ __('Class:') }}</label>

                                            <input id="class" type="text" class="form-control @error('class') is-invalid @enderror" name="class" value="{{ old('class') }}" autofocus>

                                            @error('class')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>

                                <div class="row mx-5">
                                    <div class="col-md-6  mb-3">
                                        <label for="class" class=" col-form-label text-md-end">{{ __('Start_time:') }}</label>

                                            <input id="start_time" type="time" class="form-control @error('start_time') is-invalid @enderror" name="start_time" value="{{ old('start_time') }}" autofocus>

                                            @error('start_time')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="class" class=" col-form-label text-md-end">{{ __('End_time:') }}</label>

                                            <input id="end_time" type="time" class="form-control @error('end_time') is-invalid @enderror" name="end_time" value="{{ old('end_time') }}" autofocus>

                                            @error('end_time')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>



                                <div class=" mx-5 mb-3">
                                    <label for="class" class=" col-form-label text-md-end">{{ __('Class Description:') }}</label>

                                        <textarea id="des" class="form-control @error('des') is-invalid @enderror" name="des" value="{{ old('des') }}" required autofocus></textarea>
                                        @error('des')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class=" mx-5 mb-3">
                                    <label for="class" class=" col-form-label text-md-end">{{ __('Benifits:') }}</label>

                                        <textarea id="benifits" class="form-control @error('benifits') is-invalid @enderror" name="benifits" value="{{ old('benifits') }}" required autofocus></textarea>
                                        @error('benifits')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="row mx-5">
                                    <div class="col-md-6 mb-3">
                                        <label for="class" class=" col-form-label text-md-end">{{ __('Image1:') }}</label>

                                            <input type="file" id="image1" class="form-control-file @error('image1') is-invalid @enderror" name="image1" value="{{ old('image1') }}" autofocus required/>
                                            @error('image1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="class" class=" col-form-label text-md-end">{{ __('Image2:') }}</label>

                                            <input type="file" id="image2" class="form-control-file @error('image2') is-invalid @enderror" name="image2" value="{{ old('image2') }}" autofocus required/>
                                            @error('image2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>




                                <div class="row mb-0">
                                    <div class="col-md-12 offset-md-9">
                                        <button type="submit" class="btn btn-success mr-2">
                                            <i class="fa-solid fa-floppy-disk pr-2"></i> {{ __('Save') }}
                                        </button>
                                        <button type="reset" class="btn btn-warning">
                                            <i class="fa-solid fa-circle-xmark pr-2"></i> {{ __('Clear') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
