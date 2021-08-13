@extends('admin.layouts.main')
@section('title')
    Group Add | Fortune Academy
@endsection

@section('content')
    @push('style')
        <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/select2/css/select2.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/select2/css/select2-bootstrap4.css')}}" />
    @endpush

    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('groups.index') }}">Group List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Group Add</li>
            </ol>
        </nav>
    </div>
    <h6 class="mb-0 text-uppercase">Group Add</h6>
    <hr/>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('groups.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Name:</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Group Name Here"
                                       value="{{ old('name') }}">
                                @if($errors->has('name'))
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-success">Save</button>
                            <a href="{{ route('groups.index') }}"
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
