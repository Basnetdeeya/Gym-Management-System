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
                            <form method="post" action="{{ route('admin.schedule.update', $schedule->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <h3 class="text-center fw-bold pb-3">Schedule Edit</h3>

                                <div class=" mx-5 mb-3">
                                    <label for="class" class=" col-form-label text-md-end">{{ __('Trainer:') }}</label>

                                        <!-- <input id="class" type="text" class="form-control @error('class') is-invalid @enderror" name="class" value="{{ old('class') }}" autofocus> -->
                                        <select id="user_id" name="user_id" class="form-control" required>
                                            @foreach($user as $users)
                                                <option <?php if($schedule->user_id  == $user[$loop->index]->id){echo("selected");}?> value="{{$user[$loop->index]->id}}">{{$user[$loop->index]->name}}</option>
                                            @endforeach
                                        </select>

                                        @error('user_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class=" mx-5 mb-3">
                                    <label for="class" class=" col-form-label text-md-end">{{ __('Day:') }}</label>

                                        <!-- <input id="class" type="text" class="form-control @error('class') is-invalid @enderror" name="class" value="{{ old('class') }}" autofocus> -->
                                        <select id="day" name="day" class="form-control" required>
                                            <option <?php if($schedule->day  == 'Sunday'){echo("selected");}?> value="Sunday">Sunday</option>
                                            <option <?php if($schedule->day  == 'Monday'){echo("selected");}?> value="Monday">Monday</option>
                                            <option <?php if($schedule->day  == 'Tuesday'){echo("selected");}?> value="Tuesday">Tuesday</option>
                                            <option <?php if($schedule->day  == 'Wednesday'){echo("selected");}?> value="Wednesday">Wednesday</option>
                                            <option <?php if($schedule->day  == 'Thursday'){echo("selected");}?> value="Thursday">Thursday</option>
                                            <option <?php if($schedule->day  == 'Firday'){echo("selected");}?> value="Firday">Friday</option>
                                            <option <?php if($schedule->day  == 'Saturday'){echo("selected");}?> value="Saturday">Saturday</option>
                                        </select>

                                        @error('day')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class=" mx-5 mb-3">
                                    <label for="class" class=" col-form-label text-md-end">{{ __('Class:') }}</label>

                                        <input value="{{ $schedule->class }}" id="class" type="text" class="form-control @error('class') is-invalid @enderror" name="class" value="{{ old('class') }}" autofocus>

                                        @error('class')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class=" mx-5 mb-3">
                                    <label for="class" class=" col-form-label text-md-end">{{ __('Start_time:') }}</label>

                                        <input value="{{ $schedule->start_time }}" id="start_time" type="time" class="form-control @error('start_time') is-invalid @enderror" name="start_time" value="{{ old('start_time') }}" autofocus>

                                        @error('start_time')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class=" mx-5 mb-3">
                                    <label for="class" class=" col-form-label text-md-end">{{ __('End_time:') }}</label>

                                        <input value="{{ $schedule->end_time }}" id="end_time" type="time" class="form-control @error('end_time') is-invalid @enderror" name="end_time" value="{{ old('end_time') }}" autofocus>

                                        @error('end_time')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>


                                <div class=" mx-5 mb-3">
                                    <label for="class" class=" col-form-label text-md-end">{{ __('Class Description:') }}</label>

                                        <textarea id="des" class="form-control @error('des') is-invalid @enderror" name="des" required autofocus>{{ $schedule->des }}</textarea>
                                        @error('des')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class=" mx-5 mb-3">
                                    <label for="class" class="col-form-label text-md-end">{{ __('Benifits:') }}</label>

                                        <textarea id="benifits" class="form-control @error('benifits') is-invalid @enderror" name="benifits" value="{{ old('benifits') }}" required autofocus>{{ $schedule->benifits }}</textarea>
                                        @error('benifits')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class=" mx-5 mb-3">
                                    <label for="class" class=" col-form-label text-md-end">{{ __('Image1:') }}</label>

                                        <input type="file" id="image1" class="form-control @error('image1') is-invalid @enderror" name="image1" value="{{ old('image1') }}" autofocus/>
                                        <img src="{{ asset($schedule->image1) }}" width="120" alt="">
                                        @error('image1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class=" mx-5 mb-3">
                                    <label for="class" class=" col-form-label text-md-end">{{ __('Image2:') }}</label>

                                        <input type="file" id="image2" class="form-control @error('image2') is-invalid @enderror" name="image2" value="{{ old('image2') }}" autofocus/>
                                        <img src="{{ asset($schedule->image2) }}" width="120" alt="">
                                        @error('image2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>



                                <div class="row mb-0">
                                    <div class="col-md-12 offset-md-10" >
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa-solid fa-rotate-right pr-2"></i>  {{ __('Update') }}
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
