@extends('admin.layouts.main')
@section('title')
    Users List | Fortune Academy
@endsection
@section('content')

    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Users List</li>
            </ol>
        </nav>
    </div>
    <h6 class="mb-0 text-uppercase">Users List</h6>
    <hr/>
    <div class="d-flex">
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('users.create') }}" class="btn btn-primary float-end mr-5 mb-2">Add User <i
                        class="bx bx-plus-circle"></i></a>
            </div>
        </div>
    </div>
    @if (count($users) > 0)
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="usersList" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                @if ($user->id == 1)
                                    <td><span class="badge bg-light-success text-success">Admin</span></td>
                                @else
                                    <td>
                                        @foreach($user->roles->pluck('name') as $roleName)
                                            <span class="badge bg-light-primary text-primary">{{$roleName}}</span>
                                        @endforeach
                                    </td>
                                @endif

                                @if ($user->status == 1)
                                    <td><a href="#" onclick="statusUpdate({{$user->id}})" id="status"
                                           class="badge bg-light-success text-success">Active</a></td>
                                @else
                                    <td><a href="#" onclick="statusUpdate({{$user->id}})" id="status"
                                           class="badge bg-light-danger text-danger">Inactive</a></td>
                                @endif
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{route('users.edit',
                                ['user'=>$user->id])}}" class="text-primary bg-light-primary border-0"><i
                                                class="bx bxs-edit"></i></a>
                                        <a href="#"
                                           data-route="{{route('users.destroy', ['user'=>$user->id])}}"
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
                url: '/admin/user_status',
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
            $('#usersList').DataTable();
        });
    </script>
@endpush
