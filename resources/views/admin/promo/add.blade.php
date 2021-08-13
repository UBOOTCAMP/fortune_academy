@extends('admin.layouts.main')
@section('title')
    Promo Add | Fortune Academy
@endsection
@section('content')
    @push('style')
        <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/select2/css/select2.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/select2/css/select2-bootstrap4.css')}}" />
    @endpush
    <div class="ps-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('promo_codes.index') }}">Promo Codes List</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Promo Add</li>
        </ol>
    </nav>
    </div>
    <h6 class="mb-0 text-uppercase">Promo Add</h6>
    <hr/>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('promo_codes.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Type:</label>
                                <select name="type" id="type" class="form-control">
                                    <option value>Select Promo Type</option>
                                    <option value="percentage">Percentage</option>
                                    <option value="fixed">Fixed</option>
                                </select>
                                @if($errors->has('type'))
                                    <div class="text-danger">{{ $errors->first('type') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Amount:</label>
                                <input type="number" class="form-control" name="amount" placeholder="Enter Amount Here"
                                       value="{{ old('amount') }}">
                                @if($errors->has('amount'))
                                    <div class="text-danger">{{ $errors->first('amount') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Assign Class:</label>
                                <select name="class_id[]" id="class_id" class="multiple-select" multiple data-placeholder="Select Classes">
                                    @foreach($classes as $class)
                                        <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('class_id'))
                                    <div class="text-danger">{{ $errors->first('class_id') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Code:</label>
                                <input type="text" class="form-control" name="code" placeholder="Enter Code Here"
                                       value="{{ old('code') }}">
                                @if($errors->has('code'))
                                    <div class="text-danger">{{ $errors->first('code') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="{{ route('promo_codes.index') }}"
                               class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('/assets/admin/plugins/select2/js/select2.min.js')}}"></script>
    <script>
        $('.multiple-select').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
        });
    </script>
@endpush
