@extends('admin.layouts.main')
@section('title')
    Classes List | Fortune Academy
@endsection
@section('content')

    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Class List</li>
            </ol>
        </nav>
    </div>
    <h6 class="mb-0 text-uppercase">Class List</h6>
    <hr/>
    <div class="d-flex">
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('classes.create') }}" class="btn btn-primary float-end mr-5 mb-2">Add Class <i
                        class="bx bx-plus-circle"></i></a>
            </div>
        </div>
    </div>
    @if (count($classes) > 0)
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <div id="classesWrapper" class="dataTables_wrapper dt-bootstrap5">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="classesList" class="table table-striped table-bordered dataTable" role="grid"
                                       aria-describedby="example2_info">
                                    <thead>
                                    <tr>
                                        <th>Class Name</th>
                                        <th>Class Code</th>
                                        <th>Sub Category</th>
                                        <th>Start Date</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Featured</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($classes as $class)
                                        <tr>
                                            <td>{{ $class->class_name }}</td>
                                            <td>{{ $class->class_code }}</td>
                                            <td>{{ $class->sub_category->title }}</td>
                                            <td>{{ $class->start_date }}</td>
                                            <td>
                                                <img src="{{ $class->getImagePath($class->image)  }}" class="img-fluid"
                                                     width="50px" alt="{{ $class->class_name }}">
                                            </td>
                                            <td>${{ $class->discount_price }}</td>
                                            @if ($class->is_featured == 1)
                                                <td><a href="#" onclick="featureUpdate({{$class->id}})" id="feature"
                                                       class="badge rounded-pill bg-info">Yes</a></td>
                                            @else
                                                <td><a href="#" onclick="featureUpdate({{$class->id}})" id="feature"
                                                       class="badge rounded-pill bg-warning">No</a></td>
                                            @endif
                                            @if ($class->status == 1)
                                                <td><a href="#" onclick="statusUpdate({{$class->id}})" id="status"
                                                       class="badge bg-light-success text-success">Active</a></td>
                                            @else
                                                <td><a href="#" onclick="statusUpdate({{$class->id}})" id="status"
                                                       class="badge bg-ltext-danger text-danger">Inactive</a></td>
                                            @endif
                                            <td>
                                                <div class="d-flex order-actions">
                                                    <a href="{{route('classes.edit',
                                ['class'=>$class->id])}}" class="text-primary bg-light-primary border-0"><i
                                                            class="bx bxs-edit"></i></a>
                                                    <a href="#"
                                                       data-route="{{route('classes.destroy', ['class'=>$class->id])}}"
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
                url: '/admin/class_status',
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

        function featureUpdate(id) {
            var data = {
                id: id,
                _method: "PUT",
                _token: '{{csrf_token()}}'
            };
            $.ajax({
                type: 'PUT',
                url: '/admin/class_featured_update',
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
        // $(document).ready(function() {
        //     $('#classesList').DataTable();
        // } );

        $(document).ready(function () {
            var table = $('#classesList').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#classesWrapper .col-md-6:eq(0)');
        });
    </script>
@endpush
