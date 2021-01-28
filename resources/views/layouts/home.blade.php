<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }} | @yield('title')</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
  <link rel="shortcut icon" href="{{{ asset('assets/images/logo.png') }}}" type="image/x-icon" />
  {{-- {!! Html::style('assets/js/bootstrap/dist/css/bootstrap.min.css') !!} --}}
  {!! Html::style('assets/js/font-awesome/css/font-awesome.min.css') !!}
  {!! Html::style('assets/js/nprogress/nprogress.css') !!}
  {!! Html::style('assets/css/animate.min.css') !!}
  {{-- {!! Html::style('assets/css/custom.css') !!}

  {!! Html::script('assets/js/jquery/dist/jquery.min.js') !!} --}}
  @yield('after-style')
</head>
<body class="login" style="background-image: linear-gradient(to bottom, #1a0651, #44004a, #5f0040, #720034, #7e0827);">
  <div>
    <div class="login_wrapper">
      @yield('content')
    </div>
  </div>
  @yield('after-script')
</body>
</html>
