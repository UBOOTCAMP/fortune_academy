@extends('layouts.app')
@section('title') {{ $class->class_name }} | Enroll Fortune Academy @endsection
@section('content')
    @php
        $promos = $class->promo;
    @endphp
    <section class="counterUp_wrapper__block padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2><strong>{{ $class->class_name }}</strong></h2>
                    <h3><strong>Enroll Form</strong></h3>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <form action="checkout">
                <div class="row">
                    <div class="col-12 mb-5">
                        <h2 class="text-center">Student Profile Information</h2>
                    </div>
                    <div class="col-md-8 col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name:</label>
                                    <input type="text" class="form-control" name="first_name"
                                           placeholder="Enter Your First Name"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email Address:</label>
                                    <input type="email" class="form-control" name="email"
                                           placeholder="Enter Your Email Address"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Street:</label>
                                    <input type="text" class="form-control" name="street"
                                           placeholder="Enter Your Street"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">License No:</label>
                                    <input type="text" class="form-control" name="license_no"
                                           placeholder="Enter Your License No."
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">School Code:</label>
                                    <input type="text" class="form-control" name="school_code"
                                           placeholder="Enter School Code"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Start Date:</label>
                                    <input type="text" class="form-control" name="start_date"
                                           placeholder="Enter Start Date" readonly
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">End Date:</label>
                                    <input type="text" class="form-control" name="end_date"
                                           placeholder="Enter End Date"
                                           value="" readonly>
                                </div>
                                <input type="hidden" name="classId" id="classId" value="">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Last Name:</label>
                                    <input type="text" class="form-control" name="last_name"
                                           placeholder="Enter Your Last Name"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Phone Number:</label>
                                    <input type="text" class="form-control" name="phone"
                                           placeholder="Enter Phone Number"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">City:</label>
                                    <input type="text" class="form-control" name="city"
                                           placeholder="Enter Your City"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">SSN (last 4 digits):</label>
                                    <input type="text" class="form-control" name="ssn"
                                           placeholder="Enter SSN"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Location:</label>
                                    <input type="text" class="form-control" name="location"
                                           placeholder="Enter Location"
                                           value="" readonly>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Time of Class:</label>
                                    <input type="text" class="form-control" name="timing"
                                           placeholder="Enter Timing" readonly
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Class Number:</label>
                                    <input type="text" class="form-control" name="class_code"
                                           placeholder="Enter End Date"
                                           value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 payment">
                        <div class="payment-sec">
                            <h4 class=" padding-20 pb-15">Payment Information</h4>
                            <div class="form-group mb-0 padding-20 pt-0 pb-15">
                                <div class="input-group course-price">
                                    <p>Course Price:</p>
                                    <p style="margin-left: auto">$134</p>
                                </div>
                            </div>
                            <div class="input-group-sm padding-20 pt-0 pb-15 mb-0">
                                <label>Discount Code:</label>
                                <input type="text" class="form-control" name="code" id="code"
                                       placeholder="Enter Discount Code Here">
                                <span class="input-group-btn">
							<button class="btn btn-dark mt-3 w-100" id="applyCodeBtn" type="button">Apply Code!</button>
						</span>
                            </div>
                            <div class="form-group padding-20 pt-0 pb-15 mt-3 mb-0">
                                <div class="input-group">
                                    <p class="d-flex">After Discount Price:</p>
                                    <p class="ml-auto">
                                        <del class="px-2">$134</del>
                                        $100
                                    </p>
                                </div>
                            </div>
                            <div class="check-out-btn padding-20 pt-0 pb-15 mx-auto">
                                <a href="" class="btn btn-dark w-100">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection
@push('scripts')
    <script>
        $('#applyCodeBtn').on('click', function () {
            var code = $('#code').val();
            var price = $('#price').val();
            var classId = $('#classId').val();

            if (code === '' || code === null) {
                Lobibox.notify('error', {
                    pauseDelayOnHover: true,
                    continueDelayOnInactiveTab: false,
                    position: 'top right',
                    icon: 'fa fa-info-circle',
                    msg: 'Please Enter Promo Code'
                });
            } else {
                $.ajax({
                    type: "GET",
                    url: '/promo/apply',
                    data: {code: code, price: price, classId: classId},
                    success: function (response) {
                        if (response === 'Not exist') {
                            Lobibox.notify('error', {
                                pauseDelayOnHover: true,
                                continueDelayOnInactiveTab: false,
                                position: 'top right',
                                icon: 'fa fa-info-circle',
                                msg: 'Promo Code Does Not Exist'
                            });
                        } else {
                            Lobibox.notify('success', {
                                pauseDelayOnHover: true,
                                continueDelayOnInactiveTab: false,
                                position: 'top right',
                                icon: 'fa fa-info-circle',
                                msg: 'Promo Code Applied'
                            });
                            $('#price').val(response.newPrice);
                            $('#discount').hide();
                        }
                    }
                });
            }
        })
    </script>
@endpush
