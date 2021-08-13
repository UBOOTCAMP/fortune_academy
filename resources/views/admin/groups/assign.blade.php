@extends('admin.layouts.main')
@section('title')
    Assign Students In Group | Fortune Academy
@endsection
@section('content')

    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{ route('groups.index') }}">Group List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Assign Students In Group</li>
            </ol>
        </nav>
    </div>
    <h6 class="mb-0 text-uppercase">Students Assign In {{ $group->name }} Group</h6>
    <hr/>

        <div class="d-flex">
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" id="assignStudent" class="btn btn-primary float-end mr-5 mb-2">Assign
                        <i
                            class="bx bx-plus-circle"></i></button>
                </div>
            </div>
        </div>

    <input type="hidden" id="groupId" value="{{ $group->id }}">

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="studentsList" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th></th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td><input type="checkbox" name="student_ids" value="{{ $student->id }}"></td>
                                <td>{{ $student->first_name }}</td>
                                <td>{{ $student->last_name }}</td>
                                <td>{{ $student->email }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            $('#studentsList').DataTable();
        });
    </script>
    <script type="text/javascript">
        $(document).on('click', '#assignStudent', function(e) {
            e.preventDefault();
            var $this = $(this);
            var groupId = $('#groupId').val();
            var checkboxes = $("input[name='student_ids']:checked");
            if(checkboxes.is(":checked")){
                var yourArray = [];
                checkboxes.each(function(){
                    yourArray.push($(this).val());
                });
                console.log(yourArray);
                $.ajax({
                    type: 'POST',
                    url: '/admin/group_assign',
                    data: {id: yourArray, groupId: groupId},
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    success:function () {
                        Lobibox.notify('success', {
                            pauseDelayOnHover: true,
                            continueDelayOnInactiveTab: false,
                            position: 'top right',
                            icon: 'bx bx-info-circle',
                            msg: 'Assigned Students'
                        });
                    }
                });
            } else {
                $this.attr('disabled', 'false');
                $this.text('Assign');
                Lobibox.notify('error', {
                    pauseDelayOnHover: true,
                    continueDelayOnInactiveTab: false,
                    position: 'top right',
                    icon: 'bx bx-info-circle',
                    msg: 'Please Select Students'
                });
            }
        })
    </script>
@endpush
