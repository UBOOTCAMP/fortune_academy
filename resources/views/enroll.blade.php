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
                                           value="{{ old('first_name') }}">
                                    @if($errors->has('first_name'))
                                        <div class="text-danger">{{ $errors->first('first_name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email Address:</label>
                                    <input type="email" class="form-control" name="email"
                                           placeholder="Enter Your Email Address"
                                           value="{{ old('email') }}">
                                    @if($errors->has('email'))
                                        <div class="text-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Street:</label>
                                    <input type="text" class="form-control" name="street"
                                           placeholder="Enter Your Street"
                                           value="{{ old('street') }}">
                                    @if($errors->has('street'))
                                        <div class="text-danger">{{ $errors->first('street') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">License No:</label>
                                    <input type="text" class="form-control" name="license_no"
                                           placeholder="Enter Your License No."
                                           value="{{ old('license_no') }}">
                                    @if($errors->has('license_no'))
                                        <div class="text-danger">{{ $errors->first('license_no') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">School Code:</label>
                                    <input type="text" class="form-control" name="school_code"
                                           placeholder="Enter School Code"
                                           value="{{ old('school_code') }}">
                                    @if($errors->has('school_code'))
                                        <div class="text-danger">{{ $errors->first('school_code') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Start Date:</label>
                                    <input type="text" class="form-control" name="start_date"
                                           placeholder="Enter Start Date" readonly
                                           value="{{ $class->start_date }}">
                                    @if($errors->has('start_date'))
                                        <div class="text-danger">{{ $errors->first('start_date') }}</div>
                                    @endif
                                    {{--Class ID--}}
                                    <input type="hidden" name="classId" id="classId" value="{{ $class->id }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">End Date:</label>
                                    <input type="text" class="form-control" name="end_date"
                                           placeholder="Enter End Date"
                                           value="{{ $class->end_date }}" readonly>
                                    @if($errors->has('end_date'))
                                        <div class="text-danger">{{ $errors->first('end_date') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Last Name:</label>
                                    <input type="text" class="form-control" name="last_name"
                                           placeholder="Enter Your Last Name"
                                           value="{{ old('last_name') }}">
                                    @if($errors->has('last_name'))
                                        <div class="text-danger">{{ $errors->first('last_name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Phone Number:</label>
                                    <input type="text" class="form-control" name="phone"
                                           placeholder="Enter Phone Number"
                                           value="{{ old('phone') }}">
                                    @if($errors->has('phone'))
                                        <div class="text-danger">{{ $errors->first('phone') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">City:</label>
                                    <input type="text" class="form-control" name="city"
                                           placeholder="Enter Your City"
                                           value="{{ old('city') }}">
                                    @if($errors->has('city'))
                                        <div class="text-danger">{{ $errors->first('city') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">SSN (last 4 digits):</label>
                                    <input type="text" class="form-control" name="ssn"
                                           placeholder="Enter SSN"
                                           value="{{ old('ssn') }}">
                                    @if($errors->has('ssn'))
                                        <div class="text-danger">{{ $errors->first('ssn') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Location:</label>
                                    <input type="text" class="form-control" name="location"
                                           placeholder="Enter Location"
                                           value="{{ $class->sub_category->category->title }}" readonly>
                                    @if($errors->has('location'))
                                        <div class="text-danger">{{ $errors->first('location') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Time of Class:</label>
                                    <input type="text" class="form-control" name="timing"
                                           placeholder="Enter Timing" readonly
                                           value="{{ $class->timing }}">
                                    @if($errors->has('timing'))
                                        <div class="text-danger">{{ $errors->first('timing') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Class Number:</label>
                                    <input type="text" class="form-control" name="class_code"
                                           placeholder="Enter End Date"
                                           value="{{ $class->class_code }}" readonly>
                                    @if($errors->has('class_code'))
                                        <div class="text-danger">{{ $errors->first('class_code') }}</div>
                                    @endif
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
                                    <p style="margin-left: auto" id="price">${{ $class->discount_price }}</p>
                                </div>
                            </div>

                            <div class="input-group-sm padding-20 pt-0 pb-15 mb-0">
                                <label>Discount Code:</label>
                                <input type="text" class="form-control" name="code" id="code"
                                       placeholder="Enter Discount Code Here">
                                <span class="input-group-btn">
							<button class="btn btn-success mt-3 w-100" id="applyCodeBtn"
                                    type="button">Apply Code!</button>
						</span>
                            </div>
                            @php
                                foreach ($promos as $promo)
                                {
                                    $type = $promo->type;
                                    $amount = $promo->amount;
                                    if ($type == 'percentage') {
                                        $newPrice = $class->discount_price * ((100 - $amount) / 100);
                                    }else{
                                        $newPrice = $class->discount_price - $amount;
                                    }
                                }
                            @endphp
                            @if (count($promos) > 1)
                            <div class="form-group padding-20 pt-0 pb-15 mt-3 mb-0">
                                <div class="input-group course-price">
                                    <p>After Discount Price:</p>
                                    <p style="margin-left: auto">
                                        ${{ $newPrice ?? $class->discount_price }}
                                    </p>
                                </div>
                            </div>
                            @endif
                            <div class="check-out-btn padding-20 pt-0 pb-15 mx-auto">
                                <a href="" class="btn btn-primary w-100">Checkout</a>
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
            var price = $('#price').html();
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
                            $('#price').html('$'+response.newPrice);
                            $('#discount').hide();
                        }
                    }
                });
            }
        })
    </script>
@endpush
