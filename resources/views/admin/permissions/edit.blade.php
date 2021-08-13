@extends('admin.layouts.main')
@section('title')
    Permission Edit | Fortune Academy
@endsection
@section('content')
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('permissions.index') }}">Permission List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Permission Edit</li>
            </ol>
        </nav>
    </div>
    <h6 class="mb-0 text-uppercase">Permission Edit</h6>
    <hr/>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('permissions.update', $permission->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Name:</label>
                                <input type="text" class="form-control" name="name"
                                       placeholder="Enter Permission name" id="name"
                                       value="{{ $permission->name }}">
                                @if($errors->has('name'))
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Slug:</label>
                                <input type="text" class="form-control" name="slug"
                                       placeholder="enter-slug-here" id="slug"
                                       value="{{ $permission->slug }}" readonly>
                                @if($errors->has('slug'))
                                    <div class="text-danger">{{ $errors->first('slug') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('permissions.index') }}"
                           class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $("#name").keyup(function(){
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace(/ /g,'-').replace(/[^\w-]+/g,'');
                $("#slug").val(Text);
            });
        </script>
    @endpush
@endsection
