@extends('admin.layouts.main')
@section('title')
    Class Room Add | Fortune Academy
@endsection

@section('content')

    @push('style')
        <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/select2/css/select2.min.css')}}"/>
        <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/select2/css/select2-bootstrap4.css')}}"/>
        <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/smart-wizard/css/smart_wizard_all.min.css')}}"/>
    @endpush

    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('class_rooms.index') }}">Class Room List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Class Room Add</li>
            </ol>
        </nav>
    </div>
    <h6 class="mb-0 text-uppercase">Class Room Add</h6>
    <hr/>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('class_rooms.store') }}" class="needs-validation" novalidate>
                    @csrf
                    <div id="smartwizard">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#step-1">	<strong>Class Room</strong>
                                    <br>Enter Class Room Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#step-2">	<strong>Assign Students</strong>
                                    <br>Assign Students Into Class Room</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#step-3">	<strong>Assign Instructor</strong>
                                    <br>Assign Instructor Into Class Room</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#step-4">	<strong>Mail Process</strong>
                                    <br>Mail To Students And Instructors</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                                <div class="row">
                                    <h2>Class Room Details</h2>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Class Name:</label>
                                            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="validationTooltip02" placeholder="Enter Class Name Here"
                                                   value="{{ old('name') }}">
                                            @if($errors->has('name'))
                                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Start Time:</label>
                                            <input type="time" class="form-control  {{ $errors->has('start_time') ? 'is-invalid' : '' }}" name="start_time"
                                                   placeholder="Enter Start Time Here"
                                                   value="{{ old('start_time') }}">
                                            @if($errors->has('start_time'))
                                                <div class="invalid-feedback">{{ $errors->first('start_time') }}</div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Meeting Id:</label>
                                            <input type="text" class="form-control {{ $errors->has('meeting_id') ? 'is-invalid' : '' }}" name="meeting_id"
                                                   placeholder="Enter Meeting Id Here"
                                                   value="{{ old('meeting_id') }}">
                                            @if($errors->has('meeting_id'))
                                                <div class="invalid-feedback">{{ $errors->first('meeting_id') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Start Date:</label>
                                            <input type="date" class="form-control {{ $errors->has('start_date') ? 'is-invalid' : '' }}" name="start_date"
                                                   placeholder="Enter Start Date Here"
                                                   value="{{ old('start_date') }}">
                                            @if($errors->has('start_date'))
                                                <div class="invalid-feedback">{{ $errors->first('start_date') }}</div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Zoom Link:</label>
                                            <input type="text" class="form-control {{ $errors->has('zoom_link') ? 'is-invalid' : '' }}" name="zoom_link"
                                                   placeholder="Enter Zoom Link Here"
                                                   value="{{ old('zoom_link') }}">
                                            @if($errors->has('zoom_link'))
                                                <div class="invalid-feedback">{{ $errors->first('zoom_link') }}</div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Meeting Password:</label>
                                            <input type="text" class="form-control {{ $errors->has('meeting_password') ? 'is-invalid' : '' }}" name="meeting_password"
                                                   placeholder="Enter Meeting Password Here"
                                                   value="{{ old('meeting_password') }}">
                                            @if($errors->has('meeting_password'))
                                                <div class="invalid-feedback">{{ $errors->first('meeting_password') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Notes:</label>
                                            <textarea name="notes" id="notes" cols="30" rows="10"
                                                      class="form-control">{{ old('notes') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                                <div class="row">
                                    <h2>Assign Students in Class Room</h2>
                                    <div class="col-12">
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
                                                    <td>
                                                        <input type="checkbox" name="student_ids[]" value="{{ $student->id }}"

                                                        >
                                                        @if($errors->has('student_ids'))
                                                            <div class="invalid-feedback">{{ $errors->first('student_ids') }}</div>
                                                        @endif
                                                    </td>
                                                    <td>{{ $student->first_name }}</td>
                                                    <td>{{ $student->last_name }}</td>
                                                    <td>{{ $student->email }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{ $students->links() }}
                                    </div>
                                </div>
                            </div>
                            <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                                <div class="row">
                                    <h2>Assign Instructor in Class Room</h2>
                                    <div class="col-12">
                                        <label class="form-label">Select Instructor:</label>
                                        <select name="instructor_id[]" id="instructor_id" class="multiple-select {{ $errors->has('instructor_id') ? 'is-invalid' : '' }}" multiple data-placeholder="Select Students">
                                            @foreach($instructors as $instructor)
                                                <option value="{{ $instructor->id }}">{{ $instructor->first_name . ' ' . $instructor->last_name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('instructor_id'))
                                            <div class="invalid-feedback">{{ $errors->first('instructor_id') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                                <div class="row">
                                    <div class="col-12">
                                        <h4>Do you want to mail ?</h4>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="mailSwitchButton" name="mailSend">
                                            <label class="form-check-label" for="mailSwitchButton">Switch to Mail</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>





@endsection
@push('scripts')
    <script src="{{ asset('/assets/admin/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{ asset('/assets/admin/plugins/smart-wizard/js/jquery.smartWizard.min.js')}}"></script>
    <script>
        $('.multiple-select').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
        });
    </script>
{{--    FORM WIZARD--}}
    <script>
        $(document).ready(function () {
            // Toolbar extra buttons
            var btnFinish = $('<button id="finish-btn"></button>').text('Finish').addClass('btn btn-info').on('click', function () {
            });
            var btnCancel = $('<a href="{{ route('class_rooms.index') }}"></a>').text('Cancel').addClass('btn btn-danger').on('click', function () {
            });
            // Step show event
            $("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
                $("#prev-btn").removeClass('disabled');
                $("#next-btn").removeClass('disabled');
                $("#finish-btn").addClass('disabled');
                if (stepPosition === 'first') {
                    $("#prev-btn").addClass('disabled');
                } else if (stepPosition === 'last') {
                    $("#next-btn").addClass('disabled');
                    $("#finish-btn").removeClass('disabled');
                } else {
                    $("#prev-btn").removeClass('disabled');
                    $("#next-btn").removeClass('disabled');
                }
            });
            // Smart Wizard
            $('#smartwizard').smartWizard({
                selected: 0,
                theme: 'dots',
                transition: {
                    animation: 'slide-horizontal', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
                },
                toolbarSettings: {
                    toolbarPosition: 'bottom', // both bottom
                    toolbarExtraButtons: [btnFinish, btnCancel]
                }
            });
            // External Button Events
            $("#reset-btn").on("click", function () {
                // Reset wizard
                $('#smartwizard').smartWizard("reset");
                return true;
            });
            $("#prev-btn").on("click", function () {
                // Navigate previous
                $('#smartwizard').smartWizard("prev");
                return true;
            });
            $("#next-btn").on("click", function () {
                // Navigate next
                $('#smartwizard').smartWizard("next");
                return true;
            });
            // Demo Button Events
            $("#got_to_step").on("change", function () {
                // Go to step
                var step_index = $(this).val() - 1;
                $('#smartwizard').smartWizard("goToStep", step_index);
                return true;
            });
            $("#is_justified").on("click", function () {
                // Change Justify
                var options = {
                    justified: $(this).prop("checked")
                };
                $('#smartwizard').smartWizard("setOptions", options);
                return true;
            });
            $("#animation").on("change", function () {
                // Change theme
                var options = {
                    transition: {
                        animation: $(this).val()
                    },
                };
                $('#smartwizard').smartWizard("setOptions", options);
                return true;
            });
            // $("#theme_selector").on("change", function () {
            //     // Change theme
            //     var options = {
            //         theme: $(this).val()
            //     };
            //     $('#smartwizard').smartWizard("setOptions", options);
            //     return true;
            // });
        });
    </script>
@endpush
