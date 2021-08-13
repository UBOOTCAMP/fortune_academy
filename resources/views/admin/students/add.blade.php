@extends('admin.layouts.main')
@section('title')
    Student Add | Fortune Academy
@endsection
@section('content')
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('students.index') }}">Students List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Student Add</li>
            </ol>
        </nav>
    </div>
    <h6 class="mb-0 text-uppercase">Student Add</h6>
    <hr/>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-2">
                            <div class="mb-3">
                                <label class="form-label">Title:</label>
                                <input type="text" class="form-control" name="title"
                                       placeholder="Mr/Miss/Mrs"
                                       value="{{ old('title') }}">
                                @if($errors->has('title'))
                                    <div class="text-danger">{{ $errors->first('title') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3">
                                <label class="form-label">First Name:</label>
                                <input type="text" class="form-control" name="first_name"
                                       placeholder="Enter Your First Name"
                                       value="{{ old('first_name') }}">
                                @if($errors->has('first_name'))
                                    <div class="text-danger">{{ $errors->first('first_name') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3">
                                <label class="form-label">Last Name:</label>
                                <input type="text" class="form-control" name="last_name"
                                       placeholder="Enter Your Last Name"
                                       value="{{ old('last_name') }}">
                                @if($errors->has('last_name'))
                                    <div class="text-danger">{{ $errors->first('last_name') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Email:</label>
                                <input type="email" class="form-control" name="email"
                                       placeholder="Enter Your Email Address"
                                       value="{{ old('email') }}">
                                @if($errors->has('email'))
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Password:</label>
                                <input type="password" class="form-control" name="password"
                                       placeholder="Enter Student Password"
                                       value="{{ old('password') }}">
                                @if($errors->has('password'))
                                    <div class="text-danger">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Company Name:</label>
                                <input type="text" class="form-control" name="company_name"
                                       placeholder="Enter Your Company Name"
                                       value="{{ old('company_name') }}">
                                @if($errors->has('company_name'))
                                    <div class="text-danger">{{ $errors->first('company_name') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Phone:</label>
                                <input type="number" class="form-control" name="phone"
                                       placeholder="Enter Your Phone Number"
                                       value="{{ old('phone') }}">
                                @if($errors->has('phone'))
                                    <div class="text-danger">{{ $errors->first('phone') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Roll No:</label>
                                <input type="text" class="form-control" name="roll_no"
                                       value="{{ old('roll_no') }}" placeholder="Enter Student Roll No.">
                                @if($errors->has('roll_no'))
                                    <div class="text-danger">{{ $errors->first('roll_no') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Avatar Image:</label>
                                <input type="file" class="form-control" name="avatar"
                                       value="{{ old('avatar') }}">
                                @if($errors->has('avatar'))
                                    <div class="text-danger">{{ $errors->first('avatar') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <h5>Classes</h5>
                        <div class="col-12 my-2">
                            @foreach ($classes as $class)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="classes[]" type="checkbox"
                                           value="{{ $class->id }}" id="class">
                                    <label class="form-check-label"
                                           for="class"><strong>{{ $class->class_name }}</strong></label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-6">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{ route('students.index') }}"
                           class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
