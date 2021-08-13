@extends('admin.layouts.main')
@section('title')
    User Edit | Fortune Academy
@endsection
@section('content')
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">User Edit</li>
            </ol>
        </nav>
    </div>
    <h6 class="mb-0 text-uppercase">User Edit</h6>
    <hr/>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Name:</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Name Here"
                                       value="{{ $user->name }}">
                                @if($errors->has('name'))
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone:</label>
                                <input type="number" class="form-control" name="phone"
                                       placeholder="Enter Phone Number Here" value="{{ $user->phone }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Type:</label>
                                @php
                                    $userData = $user->toArray();
                                @endphp

                                <select name="role_id" id="role_id" class="form-control">
                                    <option value>Select User Type</option>
                                    <option {{ $userData['roles'][0]['id'] == 1 ? 'selected' : '' }} value="1">Admin</option>
                                    <option {{ $userData['roles'][0]['id'] == 2 ? 'selected' : '' }} value="2">Student</option>
                                    <option {{ $userData['roles'][0]['id'] == 3 ? 'selected' : '' }} value="3">Instructor</option>
                                    <option {{ $userData['roles'][0]['id'] == 4 ? 'selected' : '' }} value="4">Sales</option>
                                </select>
                                @if($errors->has('role_id'))
                                    <div class="text-danger">{{ $errors->first('role_id') }}</div>
                                @endif
                            </div>


                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Email:</label>
                                <input type="email" class="form-control" name="email" placeholder="example@gmail.com"
                                       value="{{ $user->email }}">
                                @if($errors->has('email'))
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password:</label>
                                <input type="password" class="form-control" name="password" placeholder="*************">
                                @if($errors->has('password'))
                                    <div class="text-danger">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{ route('users.index') }}"
                               class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
