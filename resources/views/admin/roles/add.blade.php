@extends('admin.layouts.main')
@section('title')
    Roles Add | Fortune Academy
@endsection
@section('content')
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Role Add</li>
            </ol>
        </nav>
    </div>
    <h6 class="mb-0 text-uppercase">Role Add</h6>
    <hr/>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('roles.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Title:</label>
                                <input type="text" class="form-control" name="name"
                                       placeholder="Enter Role Title Here"
                                       value="{{ old('name') }}">
                                @if($errors->has('name'))
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{ route('roles.index') }}"
                           class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
