@extends('admin.layouts.main')
@section('title')
    Instructor List | Fortune Academy
@endsection
@section('content')

    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Instructor List</li>
            </ol>
        </nav>
    </div>
    <h6 class="mb-0 text-uppercase">Instructor List</h6>
    <hr/>
    <div class="d-flex">
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('instructors.create') }}" class="btn btn-primary float-end mr-5 mb-2">Add Instructor
                    <i
                        class="bx bx-plus-circle"></i></a>
            </div>
        </div>
    </div>
    @if (count($instructors) > 0)
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="instructorsList" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Company Name</th>
                            <th>Avatar</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($instructors as $instructor)
                            <tr>
                                <td>{{ $instructor->title }}</td>
                                <td>{{ $instructor->first_name }}</td>
                                <td>{{ $instructor->last_name }}</td>
                                <td>{{ $instructor->email }}</td>
                                <td>{{ $instructor->phone }}</td>
                                <td>{{ $instructor->company_name }}</td>
                                <td><img src="{{ $instructor->getImagePath($instructor->avatar) }}" class="img-fluid"
                                         width="40px" alt="$instructor->title"></td>
                                @if ($instructor->status == 1)
                                    <td><a href="#" onclick="statusUpdate({{$instructor->id}})" id="status"
                                           class="badge bg-light-success text-success">Active</a></td>
                                @else
                                    <td><a href="#" onclick="statusUpdate({{$instructor->id}})" id="status"
                                           class="badge bg-light-danger text-danger">Inactive</a></td>
                                @endif
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{route('instructors.edit',
                                ['instructor'=>$instructor->id])}}" class="text-primary bg-light-primary border-0"><i
                                                class="bx bxs-edit"></i></a>
                                        <a href="#"
                                           data-route="{{route('instructors.destroy', ['instructor'=>$instructor->id])}}"
                                           class="ms-3 delete text-danger bg-light-danger border-0"><i
                                                class="bx bxs-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
        <div class="alert border-0 border-start border-5 border-danger alert-dismissible fade show py-2">
            <div class="d-flex align-items-center">
                <div class="font-35 text-danger"><i class="bx bxs-message-square-x"></i>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0 text-danger">No Record Found!</h6>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endsection
@push('scripts')
    <script>
        $('.delete').on('click', function () {
            var shouldDelete = confirm('Are you sure?');
            if (!shouldDelete)
                return false;
            var route = $(this).data('route');

            var tr = $(this).closest('tr');
            var data = {
                _method: "DELETE",
                _token: '{{csrf_token()}}'
            };

            $.ajax({
                type: 'POST',
                url: route,
                data,
                success: function (response) {
                    Lobibox.notify('info', {
                        pauseDelayOnHover: true,
                        continueDelayOnInactiveTab: false,
                        position: 'top right',
                        icon: 'bx bx-info-circle',
                        msg: response
                    });
                    tr.remove();
                }
            });
        })

        function statusUpdate(id) {
            var data = {
                id: id,
                _method: "PUT",
                _token: '{{csrf_token()}}'
            };
            $.ajax({
                type: 'PUT',
                url: '/admin/instructor_status',
                data,
                success: function (response) {
                    Lobibox.notify('success', {
                        pauseDelayOnHover: true,
                        continueDelayOnInactiveTab: false,
                        position: 'top right',
                        icon: 'bx bx-info-circle',
                        msg: response
                    });
                    window.location.reload();
                }
            })
        }
    </script>
    <script>
        $(document).ready(function () {
            $('#instructorsList').DataTable();
        });
    </script>
@endpush
