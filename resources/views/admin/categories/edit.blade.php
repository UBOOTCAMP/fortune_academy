@extends('admin.layouts.main')
@section('title')
    Category Edit | Fortune Academy
@endsection
@section('content')
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categorys List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Category Edit</li>
            </ol>
        </nav>
    </div>
    <h6 class="mb-0 text-uppercase">Category Edit</h6>
    <hr/>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('categories.update', $category->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Title:</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter Title Here"
                                       value="{{ $category->title }}">
                                @if($errors->has('name'))
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('categories.index') }}"
                           class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
