<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{{ asset('assets/images/logo.png') }}}" type="image/x-icon" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    {!! Html::style('portal/css/bootstrap.css') !!}
    {!! Html::style('portal/css/themify-icons.css') !!}
    {!! Html::style('portal/vendors/fontawesome/css/all.min.css') !!}
    {!! Html::style('portal/vendors/owl-carousel/owl.carousel.min.css') !!}
    {!! Html::style('portal/vendors/animate-css/animate.css') !!}

    <!-- main css -->
    {!! Html::style('portal/css/style.css') !!}
    {!! Html::style('portal/css/responsive.css') !!}

    <!-- scripts react -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
{{-- <body>

    @section('top_nav')

    @show

    @yield('content')

    <!-- ================ start footer Area ================= -->
    <footer class="footer-area">
        <div class="footer-bottom row align-items-center text-center text-lg-left no-gutters">
            <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
</footer>
<!-- ================ End footer Area ================= -->






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{!! Html::script('portal/js/jquery-2.2.4.min.js')!!}
{!! Html::script('portal/js/popper.js')!!}
{!! Html::script('portal/js/bootstrap.min.js')!!}
{!! Html::script('portal/vendors/owl-carousel/owl.carousel.min.js')!!}
{!! Html::script('portal/js/jquery.ajaxchimp.min.js')!!}
{!! Html::script('portal/js/waypoints.min.js')!!}
{!! Html::script('portal/js/mail-script.js')!!}
{!! Html::script('portal/js/contact.js')!!}
{!! Html::script('portal/js/jquery.form.js')!!}
{!! Html::script('portal/js/jquery.validate.min.js')!!}
{!! Html::script('portal/js/theme.js')!!}
</body> --}}

<body>

    <!--================Header Menu Area =================-->
        <header class="header_area">
            <div id='main_menu' class="main_menu">

            </div>
        </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Suscribete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id='modal'>
                </div>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div> --}}
            </div>
        </div>
    </div>
    <section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center" id="home_banner_area">
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Service  Area =================-->
    {{-- <section class="service-area area-padding">
        <div class="container">
            <div class="row">
                <!-- Single service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="ti-pencil-alt"></i>
                        </div>
                        <div class="service-content">
                            <h5>Unique Design</h5>
                            <p>Third don't lights wherein was. bring to build them, seas. Thing gathering answ gaered beast third that heaven after all that living one bank limit</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Single service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="ti-image"></i>
                        </div>
                        <div class="service-content">
                            <h5>Business Solution</h5>
                            <p>Third don't lights wherein was. bring to build them, seas. Thing gathering answ gaered beast third that heaven after all that living one bank limit</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>


                <!-- Single service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="ti-headphone-alt"></i>
                        </div>
                        <div class="service-content">
                            <h5>Customer Support</h5>
                            <p>Third don't lights wherein was. bring to build them, seas. Thing gathering answ gaered beast third that heaven after all that living one bank limit</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!--================Service Area end =================-->


    <!--================About  Area =================-->
    {{-- <section class="about-area area-padding-bottom">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="area-heading">
                        <h4>Form Female From<br>Cattle Evening. </h4>
                        <h6>And appear great open bearing evening dominion vodi </h6>

                        <p>There earth face earth behold. She'd stars made void two given do and also. Our own grass days.  Greater male Shall There faced earth behold She star</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="single-about">
                                <div class="about-icon">
                                    <i class="ti-thought"></i>
                                </div>
                                <div class="single-about-content">
                                    <h5>Cloud Compatibility</h5>
                                    <p>There earth face earth behold. She stars made void two given and also our own grass days. Greater </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="single-about">
                                <div class="about-icon">
                                    <i class="ti-truck"></i>
                                </div>
                                <div class="single-about-content">
                                    <h5>On Time Delivery</h5>
                                    <p>There earth face earth behold. She stars made void two given and also our own grass days. Greater </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--================About Area End =================-->

    <!--================Feature  Area =================-->
    {{-- <section class="feature-area area-padding bg_one">
        <div class="container">
            <div class="row align-items-center">

                <div class="offset-lg-6 col-lg-6">
                    <div class="area-heading light">
                        <h4>Easy to Use <br>Mobile Application</h4>
                        <p>There earth face earth behold. She'd stars made void two given do and also. Our own grass days.  Greater male Shall There faced earth behold She star</p>
                    </div>
                    <div class="row">
                        <div class="col-">
                            <div class="single-feature d-flex">
                                <div class="feature-icon">
                                    <i class="ti-layers"></i>
                                </div>
                                <div class="single-feature-content">
                                    <h5>Add New Project</h5>
                                    <p>There earth face earth behold. She stars made void two given and also our own grass days. Greater </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-">
                            <div class="single-feature d-flex">
                                <div class="feature-icon">
                                    <i class="ti-layers"></i>
                                </div>
                                <div class="single-feature-content">
                                    <h5>Generating Leads</h5>
                                    <p>There earth face earth behold. She stars made void two given and also our own grass days. Greater </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--================Feature Area End =================-->


    <!--================About  Area =================-->
    {{-- <section class="statics-area area-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-5">
                    <div class="image-box">
                        <img src="img/banner/about3.png" alt="">
                    </div>
                </div>

                <div class="offset-lg-1 col-lg-6">
                    <div class="area-heading">
                        <h4>Form Female From<br>Cattle Evening. </h4>
                        <h6>And appear great open bearing evening dominion vodi </h6>

                        <p>There earth face earth behold. She'd stars made void two given do and also. Our own grass days.  Greater male Shall There faced earth behold She star</p>
                    </div>
                    <div class="single-data">
                        <i class="ti-paint-bucket"></i>
                        <p>Set dry signs spirit a kind First shall them.</p>
                    </div>
                    <div class="single-data">
                        <i class="ti-check-box"></i>
                        <p>He two face one moved dominion man you're likeness</p>
                    </div>
                    <div class="single-data">
                        <i class="ti-ruler-pencil"></i>
                        <p>Sea forth fill have divide be dominion from life</p>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}
    <!--================About Area End =================-->





    <!--================ Start Portfolio Area =================-->
    {{-- <section class="pricing_area area-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="area-heading">
                        <h4>Our Pricing Plan</h4>
                        <p>Life firmament under them evening make after called dont saying likeness<br> isn't wherein also forth she'd air two without</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single-pricing">
                        <div class="pricing-icon">
                            <i class="ti-home"></i>
                        </div>
                        <div class="single-pricing-content">
                            <h5>Standard</h5>
                            <h4>$25<span class="currency_line">/</span><span>month</span></h4>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                                <li>Sale After Service</li>
                                <li>3 Host Domain</li>
                                <li>24/7 Support</li>
                            </ul>
                            <a href="#">Purchase Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-pricing">
                        <div class="pricing-icon">
                            <i class="ti-bag"></i>
                        </div>
                        <div class="single-pricing-content">
                            <h5>Business</h5>
                            <h4>$35<span class="currency_line">/</span><span>month</span></h4>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                                <li>Sale After Service</li>
                                <li>3 Host Domain</li>
                                <li>24/7 Support</li>
                            </ul>
                            <a href="#">Purchase Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-pricing">
                        <div class="pricing-icon">
                            <i class="ti-car"></i>
                        </div>
                        <div class="single-pricing-content">
                            <h5>Premium</h5>
                            <h4>$45<span class="currency_line">/</span><span>month</span></h4>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                                <li>Sale After Service</li>
                                <li>3 Host Domain</li>
                                <li>24/7 Support</li>
                            </ul>
                            <a href="#">Purchase Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-pricing">
                        <div class="pricing-icon">
                            <i class="ti-gift"></i>
                        </div>
                        <div class="single-pricing-content">
                            <h5>Ultimate</h5>
                            <h4>$55<span class="currency_line">/</span><span>month</span></h4>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                                <li>Sale After Service</li>
                                <li>3 Host Domain</li>
                                <li>24/7 Support</li>
                            </ul>
                            <a href="#">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--================ End Pricing Area =================-->



    <!--================ Start Blog Area =================-->
    {{-- <section class="latest-blog-area area-padding">
        <div class="container" id="start_blog_area">
            
        </div>
    </section> --}}
    <!--================ End Blog Area =================-->


    <!--================ Start Brands Area =================-->
    {{-- <section class="brands-area area-padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="owl-carousel brand-carousel">
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <img src="img/logo/1.png" alt="">
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <img src="img/logo/2.png" alt="">
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <img src="img/logo/3.png" alt="">
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <img src="img/logo/4.png" alt="">
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <img src="img/logo/5.png" alt="">
                            </div>
                        </div>
                        <!-- single-brand -->
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell">
                                <img src="img/logo/3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--================ End Brands Area =================-->

    <!--================Blog Area =================-->
  <section class="blog_area area-padding">
    <div class="container" id="section_index" data-id="{{ $id }}">
    </div>
</section>
<!--================Blog Area =================-->

<!-- ================ start footer Area ================= -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>About Us</h4>
                    <p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing days open</p>
                    <div class="footer-logo">
                        <img src="img/logo.png" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Contact Info</h4>
                    <div class="footer-address">
                        <p>Address :Your address goes
                        here, your demo address.</p>
                        <span>Phone : +8880 44338899</span>
                        <span>Email : info@colorlib.com</span>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Important Link</h4>
                    <ul>
                        <li><a href="#">WHMCS-bridge</a></li>
                        <li><a href="#">Search Domain</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Our Shop</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>Heaven fruitful doesn't over lesser in days. Appear creeping seasons deve behold bearing days open</p>

                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                        method="get">
                        <div class="input-group">
                            <input type="email" class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
                            <div class="input-group-append">
                                <button class="btn click-btn" type="submit">
                                    <i class="fab fa-telegram-plane"></i>
                                </button>
                            </div>
                        </div>
                        <div style="position: absolute; left: -5000px;">
                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                        </div>

                        <div class="info"></div>
                    </form>
                </div>

            </div>
        </div>
        <div class="footer-bottom row align-items-center text-center text-lg-left no-gutters">
            <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter-alt"></i></a>
                <a href="#"><i class="ti-dribbble"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- ================ End footer Area ================= -->




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{!! Html::script('portal/js/jquery-2.2.4.min.js')!!}
{!! Html::script('portal/js/popper.js')!!}
{!! Html::script('portal/js/bootstrap.min.js')!!}
{!! Html::script('portal/vendors/owl-carousel/owl.carousel.min.js')!!}
{!! Html::script('portal/js/jquery.ajaxchimp.min.js')!!}
{!! Html::script('portal/js/waypoints.min.js')!!}
{!! Html::script('portal/js/mail-script.js')!!}
{!! Html::script('portal/js/contact.js')!!}
{!! Html::script('portal/js/jquery.form.js')!!}
{!! Html::script('portal/js/jquery.validate.min.js')!!}
{!! Html::script('portal/js/theme.js')!!}

</body>

</html>
