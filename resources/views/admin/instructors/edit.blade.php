@extends('admin.layouts.main')
@section('title')
    Instructor Edit | Fortune Academy
@endsection
@section('content')
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('instructors.index') }}">Instructors List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Instructor Edit</li>
            </ol>
        </nav>
    </div>
    <h6 class="mb-0 text-uppercase">Instructor Edit</h6>
    <hr/>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('instructors.update', $instructor->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-2">
                            <div class="mb-3">
                                <label class="form-label">Title:</label>
                                <input type="text" class="form-control" name="title"
                                       placeholder="Mr/Miss/Mrs"
                                       value="{{ $instructor->title }}">
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
                                       value="{{ $instructor->first_name }}">
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
                                       value="{{ $instructor->last_name }}">
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
                                       value="{{ $instructor->email }}">
                                @if($errors->has('email'))
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Phone:</label>
                                <input type="number" class="form-control" name="phone"
                                       placeholder="Enter Your Phone Number"
                                       value="{{ $instructor->phone }}">
                                @if($errors->has('phone'))
                                    <div class="text-danger">{{ $errors->first('phone') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Company Name:</label>
                                <input type="text" class="form-control" name="company_name"
                                       placeholder="Enter Your Company Name"
                                       value="{{ $instructor->company_name }}">
                                @if($errors->has('company_name'))
                                    <div class="text-danger">{{ $errors->first('company_name') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Avatar Image:</label>
                                <input type="file" class="form-control" name="avatar"
                                       value="{{ $instructor->avatar }}">
                                @if($errors->has('avatar'))
                                    <div class="text-danger">{{ $errors->first('avatar') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
{{--                    <hr>--}}
{{--                    <div class="row">--}}
{{--                        <h5>Classes</h5>--}}
{{--                        <div class="col-6 my-2">--}}
{{--                            @php--}}
{{--                                $selectedClsIds = $instructor->classes()->pluck('id')->toArray();--}}
{{--                            @endphp--}}
{{--                            @foreach ($classes as $class)--}}
{{--                                <div class="form-check form-check-inline">--}}
{{--                                    <input class="form-check-input" name="classes[]" {{ in_array($class->id, $selectedClsIds) ? 'checked' : '' }} type="checkbox"  value="{{ $class->id }}" id="class">--}}
{{--                                    <label class="form-check-label" for="class"><strong>{{ $class->class_name }}</strong></label>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-6">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('instructors.index') }}"
                           class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
