<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link rel="icon" href="img/favicon.png" type="image/png"> --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon" />
    <title>Favison SAAS</title>
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
<body>

    <header class="header_area">
        <div id='main_menu' class="main_menu">
        </div>
    </header>
    <!--================Header Menu Area =================-->


    <!--================Hero Banner Area Start =================-->
    <section class="hero-banner d-flex align-items-center">
        {{-- <div class="container text-center">
            <h2>Blog Details</h2>
            <nav aria-label="breadcrumb" class="banner-breadcrumb">
                <ol class="breadcrumb"> 
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                </ol>
            </nav>
        </div> --}}
    </section>
    <!--================Hero Banner Area End =================-->


    <!--================Blog Area =================-->
    <section class="blog_area single-post-area area-padding">
        <div class="container" id="section_details" data-id="{{ $id }}"">
                
        </div>
    </section>
<!--================Blog Area end =================-->

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
{{-- <script src="js/jquery-2.2.4.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/theme.js"></script> --}}
</body>
</html>