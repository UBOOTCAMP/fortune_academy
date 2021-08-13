@extends('admin.layouts.main')
@section('title')
    Categories Add | Fortune Academy
@endsection
@section('content')
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Category Add</li>
            </ol>
        </nav>
    </div>
    <h6 class="mb-0 text-uppercase">Category Add</h6>
    <hr/>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('categories.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Title:</label>
                                <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title"
                                       placeholder="Enter Category Title Here"
                                       value="{{ old('title') }}">
                                @if($errors->has('title'))
                                    <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{ route('categories.index') }}"
                           class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
