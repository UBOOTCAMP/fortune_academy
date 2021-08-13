<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700,800%7CLato:300,400,700" rel="stylesheet"
          type="text/css">
    <link href="{{ asset('/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/ionicons.css') }}" rel="stylesheet" type="text/css">
    <!--Light box-->
    <link href="{{ asset('/assets/css/jquery.fancybox.css') }}" rel="stylesheet" type="text/css">

    {{--    LOBIBOX--}}
    <link rel="stylesheet" href="{{ asset('/assets/admin/plugins/notifications/css/lobibox.min.css')}}">
    <!-- PrettyPhoto Popup -->
    <link href="{{ asset('/assets/css/prettyPhoto.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/assets/css/plugin/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <!--Main Slider-->
    <link href="{{ asset('/assets/css/settings.css') }}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{ asset('/assets/css/layers.css') }}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/bootsnav2.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/index3.css') }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119595512-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-119595512-1');
    </script>

</head>
<body>
<!--loader-->
<div id="preloader">
    <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
    </div>
</div>
<!--loader-->
<!--Header Section Start Here
==================================-->
<header>
    <div class="top-part__block ptb-15">
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <p>We're offering Instructor-led Classes Remotely Online in response to growing concerns around
                        COVID-19. Learn more by Calling us 843-258-1129</p>
                </div>
                <div class="col-sm-2">
                    <div class="social-link__block text-right">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middel-part__block">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{asset('/assets/images/logo3.png')}}" style="max-width: 247px !important;"
                                 class="mt-20"
                                 alt="Fortune Academy Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-9 col-lg-8">
                    <div class="top-info__block text-right">
                        <ul>
                            <li>
                                <i class="fa fa-clock-o"></i>
                                <p>Support Number <span>8432581120</span></p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Sales Number <span>8432581108</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_nav stricky-header__top">

        <nav class="navbar navbar-default navbar-sticky bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i
                            class="fa fa-bars"></i></button>

                </div>
                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <ul class="nav navbar-nav mobile-menu">
                        @php
                            $categories = \App\Models\Category::with('subCategories')->whereStatus(1)->get();
                        @endphp
                        @foreach($categories as $category)
                            <li><a href="#!">{{ $category->title }}</a> <span class="submenu-button"></span>
                                <ul class="dropdown-menu">
                                    @foreach($category->subCategories as $subCategory)
                                        <li><a href="{{ route('getClassesBySubCategory', $subCategory->id) }}">{{ $subCategory->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                        <li><a class="custom-btn" href="#">Enroll Now</a></li>
                    </ul>
                </div>
                <!--navbar-collapse -->
            </div>
        </nav>
    </div>
</header>
<!--Section End Here-->
@yield('content')

<!--Footer Section Start-->
<footer>
    <div class="top_footer_info__block ptb-20">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="single_info__block">
                        <i class="fa fa-phone"></i>
                        <h4>+843 258 1120 <span>Monday-Friday, 8am-7pm</span></h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single_info__block">
                        <i class="fa fa-envelope-o"></i>
                        <h4>info@fortuneacademy.com <span>Monday-Friday, 8am-7pm</span></h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single_info__block">
                        <i class="fa fa-bullhorn"></i>
                        <h4>Request a quote <span>Get all the information</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_footer__block pb-0 pt-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="footer_box__block">
                        <h4>About Us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, architecto, asperiores.
                            Recusandae ea a culpa eligendi, harum amet cumque quod.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid sequi, fuga rem aperiam
                            expedita ipsum.</p>
                    </div>
                </div>
{{--                <div class="col-md-3">--}}
{{--                    <div class="footer_box__block">--}}
{{--                        <h4>Latest Blog Post</h4>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">Start your own agency</a></li>--}}
{{--                            <li><a href="#">How to cool down quality</a></li>--}}
{{--                            <li><a href="#">Make something awesome</a></li>--}}
{{--                            <li><a href="#">Plane your summer vacation</a></li>--}}
{{--                            <li><a href="#">There are sunlight to enjoy</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="footer_box__block">--}}
{{--                        <h4>Our Project</h4>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">Go get an ice-cream</a></li>--}}
{{--                            <li><a href="#">Become the best version</a></li>--}}
{{--                            <li><a href="#">Eat, Sleep and have fun</a></li>--}}
{{--                            <li><a href="#">Start the journy to the top</a></li>--}}
{{--                            <li><a href="#">Can you do this for us?</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-12 col-md-6">
                    <div class="footer_box__block address-box">
                        <h4>Contact info</h4>
                        <ul>
                            <li><i class="fa fa-phone"></i>
                                <p>Call Us +843 258 1120</p>
                            </li>
                            <li><i class="fa fa-envelope-o"></i>
                                <p><a href="mailto:info@fortuneacademy.com">info@fortuneacademy.com</a></p>
                            </li>
                            <li><i class="fa fa-map-marker"></i>
                                <p>123 Main Street, St. NW Ste, 1 Washington, DC,USA.</p>
                            </li>
                            <li><i class="fa fa-clock-o"></i>
                                <p>Monday-Firday, 9am-6pm; <br> Sunday Closed</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyriight_block ptb-20 mt-20">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('home') }}" class="footer__block-logo">
                            <img src="{{asset('/assets/images/logo3.png')}}" style="max-width: 300px !important;"
                                 class="mt-20"
                                 alt="Fortune Academy Logo">
                        </a>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p>All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer Section End-->
<!-- Site Wraper End -->
<script src="{{asset('/assets/js/jquery.min.js')}}" type="text/javascript"></script>
<!-- Easing Effect Js -->
<script src="{{asset('/assets/js/plugin/jquery.easing.js')}}" type="text/javascript"></script>
<!-- bootstrap Js -->
<script src="{{asset('/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- fancybox Js -->
<script src="{{asset('/assets/js/jquery.mousewheel-3.0.6.pack.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/js/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
<!-- carousel Js -->
<script src="{{asset('/assets/js/plugin/owl.carousel.js')}}" type="text/javascript"></script>
<!-- imagesloaded Js -->
<script src="{{asset('/assets/js/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
<!-- masonry,isotope Effect Js -->
<script src="{{asset('/assets/js/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/js/masonry.pkgd.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/js/jquery.appear.js')}}" type="text/javascript"></script>
<!-- Height Js -->
<script src="{{asset('/assets/js/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
<!-- parallax Js -->
<script src="{{asset('/assets/js/jquery.parallax-1.1.3.js')}}" type="text/javascript"></script>
<!-- Counter Js -->
<script type="text/javascript" src="{{asset('/assets/js/jquery.countdown.min.js')}}"></script>
<!-- revolution Js -->
<script type="text/javascript" src="{{asset('/assets/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/jquery.revolution.js')}}"></script>
{{--LOBIBOX--}}
<script src="{{asset('/assets/admin/plugins/notifications/js/lobibox.min.js')}}"></script>
<script src="{{asset('/assets/admin/plugins/notifications/js/notifications.min.js')}}"></script>
<script src="{{asset('/assets/admin/plugins/notifications/js/notification-custom-script.js')}}"></script>
@stack('scripts')
<!-- custom Js -->
<script src="{{asset('/assets/js/custom.js')}}" type="text/javascript"></script>


</body>
</html>
