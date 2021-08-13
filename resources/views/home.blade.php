@extends('layouts.app')
@section('title') Fortune Academy @endsection
@section('content')
    <!--  Main Banner Start Here-->
    <div class="main-banner">

        <div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper h-50" data-alias="news-gallery34">
            <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
            <div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-129">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/images/banner/slider1.jpg') }}" alt="" class="rev-slidebg">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Newspaper-Title tp-resizeme "
                             id="slide-129-layer-1"
                             data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
                             data-y="['top','top','top','center']" data-voffset="['165','135','105','0']"
                             data-fontsize="['50','50','50','30']"
                             data-lineheight="['55','55','55','35']"
                             data-width="['600','600','600','420']"
                             data-height="['500']"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                             data-start="1000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="banner-text">
                                <div class="banner__block__text">
                                    <strong>Gateway To Your Success In <span>Real Estate</span></strong>
                                    <p>Education and Resources you need to excel in a competitive Real Estate market</p>
                                    <button class="btn register">Register Now</button>
                                </div>

                            </div>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-129" data-title="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/images/banner/slider2.jpg') }}" alt="" class="rev-slidebg">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Newspaper-Title tp-resizeme "
                             id="slide-130-layer-1"
                             data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
                             data-y="['top','top','top','center']" data-voffset="['165','135','105','0']"
                             data-fontsize="['50','50','50','30']"
                             data-lineheight="['55','55','55','35']"
                             data-width="['600','600','600','420']"
                             data-height="['500']"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="x:[-150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                             data-start="1000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="banner-text">
                                <div class="banner__block__text">
                                    <strong>Gateway To Your Success In <span>Real Estate</span></strong>
                                    <p>Education and Resources you need to excel in a competitive Real Estate market</p>
                                    <button class="btn register">Register Now</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-131">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/images/banner/slider3.jpg') }}" alt="" class="rev-slidebg ">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Newspaper-Title   tp-resizeme "
                             id="slide-131-layer-1"
                             data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
                             data-y="['top','top','top','center']" data-voffset="['165','135','105','0']"
                             data-fontsize="['50','50','50','30']"
                             data-lineheight="['55','55','55','35']"
                             data-width="['600','600','600','420']"
                             data-height="['500']"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[170%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                             data-start="1000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on">
                            <div class="banner-text">
                                <div class="banner__block__text">
                                    <strong>Gateway To Your Success In <span>Real Estate</span></strong>
                                    <p>Education and Resources you need to excel in a competitive Real Estate market</p>
                                    <button class="btn register">Register Now</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                </ul>
            </div>
        </div>

        <div class="advance-search" style="background-color: #0c1f388f;">
            <div class="container">
                <div class="row text-center" id="panel-style" style="color: white">
                    <div id="filter-panel" class="filter-panel collapse in" aria-expanded="true">
                        <h3 class="text-uppercase">Find Your Course</h3>
                        <p>Our courses offer everything you need for your education. Select your education and license
                            type
                            below to start.</p>
                        <div class="panel panel-default" style="border: none">
                            <div class="panel-body" style="background-color: #0c1f38e8;">
                                <form class="form-inline" role="form">
                                    <div class="form-group">
                                        <select id="countries" class="form-control mr-15">
                                            <option value="" selected="selected">Select State</option>
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean
                                                Territory
                                            </option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic
                                                Republic of The
                                            </option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                                            </option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories
                                            </option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald
                                                Islands
                                            </option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                            </option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                                People's Republic of
                                            </option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic
                                                Republic
                                            </option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="North Macedonia">North Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory,
                                                Occupied
                                            </option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The
                                                Grenadines
                                            </option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and The South Sandwich Islands">South Georgia
                                                and
                                                The South Sandwich Islands
                                            </option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of
                                            </option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor
                                                Outlying Islands
                                            </option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div> <!-- form group [rows] -->
                                    <div class="form-group">
                                        <select name="course-type" id="course-type" class="form-control mr-15">
                                            <option value="">Select Education Type</option>
                                            <option value="pre-licensing">Pre-Licensing</option>
                                            <option value="advanced-principle">Advanced Principles</option>
                                            <option value="broker">Broker</option>
                                            <option value="property-management">Property Management</option>
                                            <option value="continuing-education">Continuing Education</option>
                                            <option value="exam-prep">Exam Prep</option>
                                        </select>
                                    </div><!-- form group [search] -->
                                    <div class="form-group">
                                        <select name="license-type" id="license-type" class="form-control">
                                            <option value="">Select Licenses Type</option>
                                            <option value="pre-licensing">Pre-Licensing</option>
                                            <option value="advanced-principle">Advanced Principles</option>
                                            <option value="broker">Broker</option>
                                            <option value="property-management">Property Management</option>
                                            <option value="continuing-education">Continuing Education</option>
                                            <option value="exam-prep">Exam Prep</option>
                                        </select>
                                    </div> <!-- form group [search] -->
                                    <button type="submit" class="btn btn-default float-right"
                                            style="background-color: #feb20d !important; color: white">
                                        <span class="fa fa-filter"></span> Shop Now
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Main Banner End Here-->

    <!-- About Section -->
    <div id="about-section" class="ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 style="font-size: 18px; font-weight: lighter; text-align: center">AN INNOVATIVE AND
                        RESULTS-DRIVEN
                        LEARNING EXPERIENCE</h2>
                    <h1 style=" font-weight: lighter; text-align: center">Online Real Estate Courses for Pre-Licensing,
                        Exam
                        Prep, Post-Licensing, and Continuing Education</h1>
                </div>
                <div class="product-wrapper">
                    <a href="">
                        <img alt="Post-Licensing Education" src="{{ asset('assets/images/about-1.jpg') }}">
                        <div class="content">
                            <i class="fa fa-chevron-right"></i>
                            <h3>Post-Licensing &amp; First Renewals</h3>
                            <p>Informative state-specific courses for your first license renewal.</p>
                        </div>
                    </a>
                    <a href="">
                        <img alt="Post-Licensing Education" src="{{ asset('assets/images/about-2.jpg') }}">
                        <div class="content">
                            <i class="fa fa-chevron-right"></i>
                            <h3>Post-Licensing &amp; First Renewals</h3>
                            <p>Informative state-specific courses for your first license renewal.</p>
                        </div>
                    </a>
                    <a href="">
                        <img alt="Post-Licensing Education" src="{{ asset('assets/images/finance-bg1.jpg') }}">
                        <div class="content">
                            <i class="fa fa-chevron-right"></i>
                            <h3>Post-Licensing &amp; First Renewals</h3>
                            <p>Informative state-specific courses for your first license renewal.</p>
                        </div>
                    </a>
                    <a href="">
                        <img alt="Post-Licensing Education" src="{{ asset('assets/images/finance-bg2.jpg') }}">
                        <div class="content">
                            <i class="fa fa-chevron-right"></i>
                            <h3>Post-Licensing &amp; First Renewals</h3>
                            <p>Informative state-specific courses for your first license renewal.</p>
                        </div>
                    </a>
                    <a href="">
                        <img alt="Post-Licensing Education" src="{{ asset('assets/images/finance-bg3.jpg') }}">
                        <div class="content">
                            <i class="fa fa-chevron-right"></i>
                            <h3>Post-Licensing &amp; First Renewals</h3>
                            <p>Informative state-specific courses for your first license renewal.</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- About Section End-->
    <!--Counter UP Section Start-->
    <section class="counterUp_wrapper__block padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>We are served since <strong>35 years</strong> to our customer with trust and we are happy</h2>
                    <a href="#" class="boxed_btn__block">Be a part of us</a>
                </div>
                <div class="col-md-6">
                    <div class="counter_wrap__block text-center">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single-counterup"><i class="fa fa-trophy"></i>
                                    <p class="counterup"><span>125</span></p>
                                    <p>Total Award</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-counterup"><i class="fa fa-users"></i>
                                    <p class="counterup"><span>200</span></p>
                                    <p>team members</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-counterup"><i class="fa fa-smile-o"></i>
                                    <p class="counterup"><span>536</span></p>
                                    <p>Happy Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="upcoming_event" class="padding ptb-xs-60 gray-bg">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-8 col-sm-push-2 col-md-6 col-md-push-3 mb-30">
                    <div class="heading-box pb-15">
                        <h2><span>upcoming</span> Classes</h2>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s.</p>
                </div>
            </div>

            <div id="exTab3">
                <ul class="nav nav-pills">
                    @foreach($subCategories as $subCategory)
                        <li class=""><a href="#{{ Str::slug($subCategory->title, "-") }}" data-toggle="tab">{{ $subCategory->title }}</a></li>
                    @endforeach
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="pre-licensing">
                        <div class="container upcoming__course">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box-item">
                                        <img src="{{ asset('assets/images/portfolio3/1.jpg') }}" alt="">
                                        <div class="box-details">
                                            <h2 class="box-heading mt-20 ml-15">25 June</h2>
                                            <ul class="event__location">
                                                <li>
                                                    <i class="icon ion-android-time"></i>
                                                    8:00 AM - 5:00 PM
                                                </li>
                                                <li>
                                                    <i class="icon ion-ios-location"></i>
                                                    Second Quad
                                                </li>
                                            </ul>
                                            <p>
                                                Cientific Results Conference Eduma Summer 2017.
                                            </p>

                                            <a href="#">
                                                <span>View Details</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6 mb-40">
                                            <div class="box-small">
                                                <img src="{{ asset('assets/images/portfolio3/4.jpg') }}" alt="">
                                                <div class="details-small-box">
                                                    <h4 class="box-heading ml-15">25 June</h4>
                                                    <ul class="event__location-small">
                                                        <li>
                                                            <i class="icon ion-android-time"></i>
                                                            8:00 AM - 5:00 PM
                                                        </li>
                                                        <li>
                                                            <i class="icon ion-ios-location"></i>
                                                            Second Quad
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        Cientific Results Conference Eduma Summer 2017.
                                                    </p>


                                                </div>

                                            </div>
                                            <div class="box-small">
                                                <img src="{{ asset('assets/images/portfolio3/2.jpg') }}" alt="">
                                                <div class="details-small-box">
                                                    <h4 class="box-heading ml-15">25 June</h4>
                                                    <ul class="event__location-small">
                                                        <li>
                                                            <i class="icon ion-android-time"></i>
                                                            8:00 AM - 5:00 PM
                                                        </li>
                                                        <li>
                                                            <i class="icon ion-ios-location"></i>
                                                            Second Quad
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        Cientific Results Conference Eduma Summer 2017.
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-40">
                                            <div class="box-small">
                                                <img src="{{ asset('assets/images/portfolio3/3.jpg') }}" alt="">
                                                <div class="details-small-box">
                                                    <h4 class="box-heading ml-15">25 June</h4>
                                                    <ul class="event__location-small">
                                                        <li>
                                                            <i class="icon ion-android-time"></i>
                                                            8:00 AM - 5:00 PM
                                                        </li>
                                                        <li>
                                                            <i class="icon ion-ios-location"></i>
                                                            Second Quad
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        Cientific Results Conference Eduma Summer 2017.
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="box-small">
                                                <img src="{{ asset('assets/images/portfolio3/5.jpg') }}" alt="">
                                                <div class="details-small-box">
                                                    <h4 class="box-heading ml-15">25 June</h4>
                                                    <ul class="event__location-small">
                                                        <li>
                                                            <i class="icon ion-android-time"></i>
                                                            8:00 AM - 5:00 PM
                                                        </li>
                                                        <li>
                                                            <i class="icon ion-ios-location"></i>
                                                            Second Quad
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        Cientific Results Conference Eduma Summer 2017.
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="advanced-principle">
                        <div class="container upcoming__course">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box-item">
                                        <img src="{{ asset('assets/images/portfolio3/1.jpg') }}" alt="">
                                        <div class="box-details">
                                            <h2 class="box-heading mt-20 ml-15">25 June</h2>
                                            <ul class="event__location">
                                                <li>
                                                    <i class="icon ion-android-time"></i>
                                                    8:00 AM - 5:00 PM
                                                </li>
                                                <li>
                                                    <i class="icon ion-ios-location"></i>
                                                    Second Quad
                                                </li>
                                            </ul>
                                            <p>
                                                Cientific Results Conference Eduma Summer 2017.
                                            </p>

                                            <a href="#"><span>
                        View Details
                    </span></a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6 mb-40">
                                            <div class="box-small">
                                                <img src="{{ asset('assets/images/portfolio3/4.jpg') }}" alt="">
                                                <div class="details-small-box">
                                                    <h4 class="box-heading ml-15">25 June</h4>
                                                    <ul class="event__location-small">
                                                        <li>
                                                            <i class="icon ion-android-time"></i>
                                                            8:00 AM - 5:00 PM
                                                        </li>
                                                        <li>
                                                            <i class="icon ion-ios-location"></i>
                                                            Second Quad
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        Cientific Results Conference Eduma Summer 2017.
                                                    </p>


                                                </div>

                                            </div>
                                            <div class="box-small">
                                                <img src="{{ asset('assets/images/portfolio3/2.jpg') }}" alt="">
                                                <div class="details-small-box">
                                                    <h4 class="box-heading ml-15">25 June</h4>
                                                    <ul class="event__location-small">
                                                        <li>
                                                            <i class="icon ion-android-time"></i>
                                                            8:00 AM - 5:00 PM
                                                        </li>
                                                        <li>
                                                            <i class="icon ion-ios-location"></i>
                                                            Second Quad
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        Cientific Results Conference Eduma Summer 2017.
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="broker">
                        <div class="container upcoming__course">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box-item">
                                        <img src="{{ asset('assets/images/portfolio3/1.jpg') }}" alt="">
                                        <div class="box-details">
                                            <h2 class="box-heading mt-20 ml-15">25 June</h2>
                                            <ul class="event__location">
                                                <li>
                                                    <i class="icon ion-android-time"></i>
                                                    8:00 AM - 5:00 PM
                                                </li>
                                                <li>
                                                    <i class="icon ion-ios-location"></i>
                                                    Second Quad
                                                </li>
                                            </ul>
                                            <p>
                                                Cientific Results Conference Eduma Summer 2017.
                                            </p>

                                            <a href="#"><span>
                        View Details
                    </span></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="property-management">
                        <div class="container upcoming__course">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box-item">
                                        <img src="{{ asset('assets/images/portfolio3/1.jpg') }}" alt="">
                                        <div class="box-details">
                                            <h2 class="box-heading mt-20 ml-15">25 June</h2>
                                            <ul class="event__location">
                                                <li>
                                                    <i class="icon ion-android-time"></i>
                                                    8:00 AM - 5:00 PM
                                                </li>
                                                <li>
                                                    <i class="icon ion-ios-location"></i>
                                                    Second Quad
                                                </li>
                                            </ul>
                                            <p>
                                                Cientific Results Conference Eduma Summer 2017.
                                            </p>

                                            <a href="#"><span>
                        View Details
                    </span></a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6 mb-40">
                                            <div class="box-small">
                                                <img src="{{ asset('assets/images/portfolio3/4.jpg') }}" alt="">
                                                <div class="details-small-box">
                                                    <h4 class="box-heading ml-15">25 June</h4>
                                                    <ul class="event__location-small">
                                                        <li>
                                                            <i class="icon ion-android-time"></i>
                                                            8:00 AM - 5:00 PM
                                                        </li>
                                                        <li>
                                                            <i class="icon ion-ios-location"></i>
                                                            Second Quad
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        Cientific Results Conference Eduma Summer 2017.
                                                    </p>


                                                </div>

                                            </div>
                                            <div class="box-small">
                                                <img src="{{ asset('assets/images/portfolio3/2.jpg') }}" alt="">
                                                <div class="details-small-box">
                                                    <h4 class="box-heading ml-15">25 June</h4>
                                                    <ul class="event__location-small">
                                                        <li>
                                                            <i class="icon ion-android-time"></i>
                                                            8:00 AM - 5:00 PM
                                                        </li>
                                                        <li>
                                                            <i class="icon ion-ios-location"></i>
                                                            Second Quad
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        Cientific Results Conference Eduma Summer 2017.
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-40">
                                            <div class="box-small">
                                                <img src="{{ asset('assets/images/portfolio3/3.jpg') }}" alt="">
                                                <div class="details-small-box">
                                                    <h4 class="box-heading ml-15">25 June</h4>
                                                    <ul class="event__location-small">
                                                        <li>
                                                            <i class="icon ion-android-time"></i>
                                                            8:00 AM - 5:00 PM
                                                        </li>
                                                        <li>
                                                            <i class="icon ion-ios-location"></i>
                                                            Second Quad
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        Cientific Results Conference Eduma Summer 2017.
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="continuing-education">
                        <div class="container upcoming__course">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box-item">
                                        <img src="{{ asset('assets/images/portfolio3/1.jpg') }}" alt="">
                                        <div class="box-details">
                                            <h2 class="box-heading mt-20 ml-15">25 June</h2>
                                            <ul class="event__location">
                                                <li>
                                                    <i class="icon ion-android-time"></i>
                                                    8:00 AM - 5:00 PM
                                                </li>
                                                <li>
                                                    <i class="icon ion-ios-location"></i>
                                                    Second Quad
                                                </li>
                                            </ul>
                                            <p>
                                                Cientific Results Conference Eduma Summer 2017.
                                            </p>

                                            <a href="#"><span>
                        View Details
                    </span></a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6 mb-40">
                                            <div class="box-small">
                                                <img src="{{ asset('assets/images/portfolio3/4.jpg') }}" alt="">
                                                <div class="details-small-box">
                                                    <h4 class="box-heading ml-15">25 June</h4>
                                                    <ul class="event__location-small">
                                                        <li>
                                                            <i class="icon ion-android-time"></i>
                                                            8:00 AM - 5:00 PM
                                                        </li>
                                                        <li>
                                                            <i class="icon ion-ios-location"></i>
                                                            Second Quad
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        Cientific Results Conference Eduma Summer 2017.
                                                    </p>


                                                </div>

                                            </div>
                                            <div class="box-small">
                                                <img src="{{ asset('assets/images/portfolio3/2.jpg') }}" alt="">
                                                <div class="details-small-box">
                                                    <h4 class="box-heading ml-15">25 June</h4>
                                                    <ul class="event__location-small">
                                                        <li>
                                                            <i class="icon ion-android-time"></i>
                                                            8:00 AM - 5:00 PM
                                                        </li>
                                                        <li>
                                                            <i class="icon ion-ios-location"></i>
                                                            Second Quad
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        Cientific Results Conference Eduma Summer 2017.
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-40">
                                            <div class="box-small">
                                                <img src="{{ asset('assets/images/portfolio3/3.jpg') }}" alt="">
                                                <div class="details-small-box">
                                                    <h4 class="box-heading ml-15">25 June</h4>
                                                    <ul class="event__location-small">
                                                        <li>
                                                            <i class="icon ion-android-time"></i>
                                                            8:00 AM - 5:00 PM
                                                        </li>
                                                        <li>
                                                            <i class="icon ion-ios-location"></i>
                                                            Second Quad
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        Cientific Results Conference Eduma Summer 2017.
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="box-small">
                                                <img src="{{ asset('assets/images/portfolio3/5.jpg') }}" alt="">
                                                <div class="details-small-box">
                                                    <h4 class="box-heading ml-15">25 June</h4>
                                                    <ul class="event__location-small">
                                                        <li>
                                                            <i class="icon ion-android-time"></i>
                                                            8:00 AM - 5:00 PM
                                                        </li>
                                                        <li>
                                                            <i class="icon ion-ios-location"></i>
                                                            Second Quad
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        Cientific Results Conference Eduma Summer 2017.
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="exams-prep">
                        <div class="container upcoming__course">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box-item">
                                        <img src="{{ asset('assets/images/portfolio3/1.jpg') }}" alt="">
                                        <div class="box-details">
                                            <h2 class="box-heading mt-20 ml-15">25 June</h2>
                                            <ul class="event__location">
                                                <li>
                                                    <i class="icon ion-android-time"></i>
                                                    8:00 AM - 5:00 PM
                                                </li>
                                                <li>
                                                    <i class="icon ion-ios-location"></i>
                                                    Second Quad
                                                </li>
                                            </ul>
                                            <p>
                                                Cientific Results Conference Eduma Summer 2017.
                                            </p>

                                            <a href="#"><span>
                        View Details
                    </span></a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6 mb-40">
                                            <div class="box-small">
                                                <img src="{{ asset('assets/images/portfolio3/4.jpg') }}" alt="">
                                                <div class="details-small-box">
                                                    <h4 class="box-heading ml-15">25 June</h4>
                                                    <ul class="event__location-small">
                                                        <li>
                                                            <i class="icon ion-android-time"></i>
                                                            8:00 AM - 5:00 PM
                                                        </li>
                                                        <li>
                                                            <i class="icon ion-ios-location"></i>
                                                            Second Quad
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        Cientific Results Conference Eduma Summer 2017.
                                                    </p>


                                                </div>

                                            </div>
                                            <div class="box-small">
                                                <img src="{{ asset('assets/images/portfolio3/2.jpg') }}" alt="">
                                                <div class="details-small-box">
                                                    <h4 class="box-heading ml-15">25 June</h4>
                                                    <ul class="event__location-small">
                                                        <li>
                                                            <i class="icon ion-android-time"></i>
                                                            8:00 AM - 5:00 PM
                                                        </li>
                                                        <li>
                                                            <i class="icon ion-ios-location"></i>
                                                            Second Quad
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        Cientific Results Conference Eduma Summer 2017.
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-40">
                                            <div class="box-small">
                                                <img src="{{ asset('assets/images/portfolio3/3.jpg') }}" alt="">
                                                <div class="details-small-box">
                                                    <h4 class="box-heading ml-15">25 June</h4>
                                                    <ul class="event__location-small">
                                                        <li>
                                                            <i class="icon ion-android-time"></i>
                                                            8:00 AM - 5:00 PM
                                                        </li>
                                                        <li>
                                                            <i class="icon ion-ios-location"></i>
                                                            Second Quad
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        Cientific Results Conference Eduma Summer 2017.
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="box-small">
                                                <img src="{{ asset('assets/images/portfolio3/5.jpg') }}" alt="">
                                                <div class="details-small-box">
                                                    <h4 class="box-heading ml-15">25 June</h4>
                                                    <ul class="event__location-small">
                                                        <li>
                                                            <i class="icon ion-android-time"></i>
                                                            8:00 AM - 5:00 PM
                                                        </li>
                                                        <li>
                                                            <i class="icon ion-ios-location"></i>
                                                            Second Quad
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        Cientific Results Conference Eduma Summer 2017.
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--Event Start End-->

    <!--Testimonial Section Start-->
    <section class="testimonial_wrapper__block padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_title__block text-center mb-40">
                        <h2>Our <span>Testimonial</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial_carosule-wrap owl-carousel" data-pagination="false" data-loop="true"
                         data-autoplay="false" data-navigation="true" data-items="1" data-tablet="2" data-mobile="1"
                         data-desktop="3" data-prev="fa fa-chevron-left" data-next="fa fa-chevron-right">
                        <div class="single_carousel pt-40">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                [..]</p>
                            <div class="author_img__block">
                                <div class="author_tablecell__block">
                                    <img src="{{ asset('assets/images/author.jpg') }}" alt="">
                                    <p>John Doe <span>CEO</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                [..]</p>
                            <div class="author_img__block">
                                <div class="author_tablecell__block">
                                    <img src="{{ asset('assets/images/author.jpg') }}" alt="">
                                    <p>John Doe <span>CEO</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                [..]</p>
                            <div class="author_img__block">
                                <div class="author_tablecell__block">
                                    <img src="{{ asset('assets/images/author.jpg') }}" alt="">
                                    <p>John Doe <span>CEO</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                [..]</p>
                            <div class="author_img__block">
                                <div class="author_tablecell__block">
                                    <img src="{{ asset('assets/images/author.jpg') }}" alt="">
                                    <p>John Doe <span>CEO</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                [..]</p>
                            <div class="author_img__block">
                                <div class="author_tablecell__block">
                                    <img src="{{ asset('assets/images/author.jpg') }}" alt="">
                                    <p>John Doe <span>CEO</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                [..]</p>
                            <div class="author_img__block">
                                <div class="author_tablecell__block">
                                    <img src="{{ asset('assets/images/author.jpg') }}" alt="">
                                    <p>John Doe <span>CEO</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                [..]</p>
                            <div class="author_img__block">
                                <div class="author_tablecell__block">
                                    <img src="{{ asset('assets/images/author.jpg') }}" alt="">
                                    <p>John Doe <span>CEO</span></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Section End-->

    <!--Blog Section-->
    <section id="blog" class="padding ptb-xs-60">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-8 col-sm-push-2 col-md-6 col-md-push-3 mb-30">
                    <div class="heading-box pb-15 heading-bg">
                        <h2><span>Our </span> News</h2>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 mb-xs-30">
                    <div class="single-blog-post">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/blog/blog-img1.jpg') }}" alt="">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="date-box">
                                <div class="inner">
                                    <div class="date">
                                        <b>24</b> apr
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <a href="#"><h3>Provide qualtiy productivity with certified engineers</h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectet adipi sed do eiusmod tempor incididunt modo
                                    labore
                                    et dolore magna aliqu...</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-xs-30">
                    <div class="single-blog-post">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/blog/blog-img2.jpg') }}" alt="">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="date-box">
                                <div class="inner">
                                    <div class="date">
                                        <b>24</b> apr
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <a href="blog-details.html"><h3>Provide qualtiy productivity with certified
                                        engineers</h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectet adipi sed do eiusmod tempor incididunt modo
                                    labore
                                    et dolore magna aliqu...</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-xs-30">
                    <div class="single-blog-post">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/blog/blog-img3.jpg') }}" alt="">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="date-box">
                                <div class="inner">
                                    <div class="date">
                                        <b>24</b> apr
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <a href="blog-details.html"><h3>Provide qualtiy productivity with certified
                                        engineers</h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectet adipi sed do eiusmod tempor incididunt modo
                                    labore
                                    et dolore magna aliqu...</p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <!--Blog Section End-->
    <!--form Section-->
    <section class="ptb-40 bottom-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 mb-sm-30 mb-xs-30">
                    <div class="contact_block-text"><strong>Do you have any questions?</strong>
                        <p>feel free to contact us!</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" name="form-name"
                                           placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" type="text" name="form-email"
                                           placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                <textarea class="form-control" id="message" rows="7" name="form-message"
                                          placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-xs-15">
                                <button class="btn-text" type="button" id="submit" name="button"> Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--form Section End-->
@endsection
