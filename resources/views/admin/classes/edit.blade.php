@extends('admin.layouts.main')
@section('title')
    Class Edit | Fortune Academy
@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datetimepicker/css/classic.time.css') }}">
    <link rel="stylesheet"
          href="{{ asset('/assets/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css') }}">
@endpush

@section('content')
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('classes.index') }}">Class List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Class Edit</li>
            </ol>
        </nav>
    </div>
    <h6 class="mb-0 text-uppercase">Class Edit</h6>
    <hr/>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('classes.update', $class->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Class Name:</label>
                                <input type="text" class="form-control" name="class_name"
                                       placeholder="Enter Class Name Here"
                                       value="{{ $class->class_name }}">
                                @if($errors->has('class_name'))
                                    <div class="text-danger">{{ $errors->first('class_name') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sub Category:</label>
                                <select name="sub_category_id" id="sub_category_id" class="form-control">
                                    <option value>Select Category</option>
                                    @foreach($subCategories as $subCategory)
                                        <option
                                            {{ $subCategory->id == $class->sub_category_id ? 'selected' : '' }} value="{{ $subCategory->id }}">{{ $subCategory->title }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('sub_category_id'))
                                    <div class="text-danger">{{ $errors->first('sub_category_id') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Start Date:</label>
                                <input type="date" class="form-control" name="start_date"
                                       value="{{ $class->start_date }}">
                                @if($errors->has('start_date'))
                                    <div class="text-danger">{{ $errors->first('start_date') }}</div>
                                @endif
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Price:</label>
                                <input type="number" class="form-control" name="price"
                                       value="{{ $class->price }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Start Time:</label>
                                <input class="result form-control" name="start_time" type="text" id="start_time"
                                       placeholder="Select Start Time" data-dtp="dtp_uCagf"
                                       value="{{ explode(' - ',$class->timing)[0] }}">
                                @if($errors->has('start_time'))
                                    <div class="text-danger">{{ $errors->first('start_time') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Image:</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>


                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Class Code:</label>
                                <input type="text" class="form-control" name="class_code"
                                       placeholder="Enter Class Code Here"
                                       value="{{ $class->class_code }}">
                                @if($errors->has('class_code'))
                                    <div class="text-danger">{{ $errors->first('class_code') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Days:</label>
                                <br>
                                @php
                                    $days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                                    $classDays = explode(',',$class->days);
                                @endphp
                                @foreach($days as $_day)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="days[]"
                                               value="{{$_day}}" {{ in_array($_day, $classDays) ? 'checked' : '' }}>
                                        <label class="form-check-label">{{$_day}}</label>
                                    </div>
                                @endforeach

                                @if($errors->has('days'))
                                    <div class="text-danger">{{ $errors->first('days') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label">End Date:</label>
                                <input type="date" class="form-control" name="end_date"
                                       value="{{ $class->end_date }}">
                                @if($errors->has('end_date'))
                                    <div class="text-danger">{{ $errors->first('end_date') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Discount Price:</label>
                                <input type="number" class="form-control" name="discount_price"
                                       value="{{ $class->discount_price }}">
                                @if($errors->has('discount_price'))
                                    <div class="text-danger">{{ $errors->first('discount_price') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label">End Time:</label>
                                <input class="result form-control" name="end_time" type="text" id="end_time"
                                       placeholder="Select End Time" data-dtp="dtp_uCagf"
                                       value="{{ explode(' - ',$class->timing)[1] }}">
                                @if($errors->has('end_time'))
                                    <div class="text-danger">{{ $errors->first('end_time') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description:</label>
                                <textarea name="description" id="description" class="form-control" cols="30"
                                          rows="4">{{ $class->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('classes.index') }}"
                           class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{asset('/assets/admin/plugins/datetimepicker/js/legacy.js') }}"></script>
        <script src="{{asset('/assets/admin/plugins/datetimepicker/js/picker.js') }}"></script>
        <script src="{{asset('/assets/admin/plugins/datetimepicker/js/picker.time.js') }}"></script>
        <script src="{{asset('/assets/admin/plugins/datetimepicker/js/picker.date.js') }}"></script>
        <script src="{{asset('/assets/admin/plugins/bootstrap-material-datetimepicker/js/moment.min.js') }}"></script>
        <script
            src="{{ asset('/assets/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js') }}"></script>
        <script>
            $(function () {
                $('#start_time').bootstrapMaterialDatePicker({
                    date: false,
                    format: 'HH:mm'
                });
                $('#end_time').bootstrapMaterialDatePicker({
                    date: false,
                    format: 'HH:mm'
                });
            });
        </script>
    @endpush
@endsection
