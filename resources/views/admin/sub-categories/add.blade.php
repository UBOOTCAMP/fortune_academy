@extends('admin.layouts.main')
@section('title')
    Sub-Categories Add | Fortune Academy
@endsection
@section('content')
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('sub-categories.index') }}">Sub-Categories List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Sub-Categories Add</li>
            </ol>
        </nav>
    </div>
    <h6 class="mb-0 text-uppercase">Sub-Categories Add</h6>
    <hr/>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('sub-categories.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Category:</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value>Select Category First</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('category_id'))
                                    <div class="text-danger">{{ $errors->first('category_id') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Title:</label>
                                <input type="text" class="form-control" name="title"
                                       placeholder="Enter Sub Category Title Here"
                                       value="{{ old('title') }}">
                                @if($errors->has('title'))
                                    <div class="text-danger">{{ $errors->first('title') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{ route('sub-categories.index') }}"
                           class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
