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

    <!--================ Start Blog Area =================-->
        <div>
            Dale PE
        </div>
        <div id="pub_index"></div>
    <!--================ End Blog Area =================-->





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{!! Html::script('portal/js/jquery-2.2.4.min.js')!!}
{{-- {!! Html::script('portal/js/popper.js')!!}
{!! Html::script('portal/js/bootstrap.min.js')!!}
{!! Html::script('portal/vendors/owl-carousel/owl.carousel.min.js')!!} --}}
{{-- {!! Html::script('portal/js/jquery.ajaxchimp.min.js')!!}
{!! Html::script('portal/js/waypoints.min.js')!!}
{!! Html::script('portal/js/mail-script.js')!!}
{!! Html::script('portal/js/contact.js')!!}
{!! Html::script('portal/js/jquery.form.js')!!}
{!! Html::script('portal/js/jquery.validate.min.js')!!}
{!! Html::script('portal/js/theme.js')!!} --}}

</body>

</html>
