@extends('admin.app')

@section('admin-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-5">
                    {{-- <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.settings.create') }}" class="btn btn-dark"><i class="fa-solid fa-plus pr-2"></i> General Settings</a>
                            <h3>Settings</h3>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Logo</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Location</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($settings as $item )
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td><img src="{{ asset($item->logo) }}" width="50" alt=""></td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>
                                            <a href="{{ route('admin.settings.edit', $item->id) }}" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                                            {{-- <a href="/settings/{{ $item->id }}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a> --}}
                                            {{-- <button class="btn btn-danger btn-sm "
                                            onclick="event.preventDefault();
                                            document.getElementById('delete-settings-form-{{ $item->id }}').submit()">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>

                                            <form id="delete-settings-form-{{ $item->id }}" action="{{ route('admin.settings.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method("DELETE")
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div> --}} -

                     <!-- Change password card-->
            <div class="card mb-4">
                <div class="card-header">
                    <h3>Change Password</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user-password.update') }}">
                        @csrf
                        @method('PUT')
                        {{-- <input type="hidden" name="token" value="{{ $request->token }}"> --}}
                        <!-- Form Group (current password)-->

                        @if (session('status') == "password-updated")
                            <div class="alert alert-success" role="alert">
                                Password Updated Successfully
                            </div>

                        @endif

                        <div class="row mb-3">
                            <label for="current_password" class="col-md-4 col-form-label text-md-end">{{ __('Current Password') }}</label>

                            <div class="col-md-6">
                                <input id="current_password" type="password" class="form-control @error('current_password', 'updatePassword') is-invalid @enderror" name="current_password"  autofocus>

                                @error('current_password' , 'updatePassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password', 'updatePassword') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password', 'updatePassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">{{ __('Reset Password') }}</button>
                    </form>
                </div>
            </div>

            </div>
        </div>
    </div>
@endsection
