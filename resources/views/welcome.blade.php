@extends('layouts.portal')

@section('top_nav')
    @include('complement.topnav')
@endsection


@section('content')
    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6 col-xl-5 offset-xl-7">
                        <div class="banner_content">
                            <h3>Periodico <br/>Digital UATF</h3>
                            <p> LA PLUMA NEGRA
                               <br> El Sector Donde podras encontra  la  mejor noticia y al instante</p>
                            <a class="banner_btn" href="#">Ver Noticias<i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
@endsection
