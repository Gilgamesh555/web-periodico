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
    {{-- Modal SUSCRIPCIONES --}}
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


    {{-- Modal ESTUDIANTES --}}
    <div class="modal fade" id="staticBackdropEst" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Ingresar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id='modal_est'>
                </div>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div> --}}
            </div>
        </div>
    </div>
    {{-- Modal Docentes --}}
    <div class="modal fade" id="staticBackdropDoc" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Ingresar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id='modal_doc'>
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
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container" id="card_covid">    
            </div>  
            {{-- <img src="https://images-na.ssl-images-amazon.com/images/I/5139WmbjmdL._AC_SL1000_.jpg" class="d-block w-100" alt="..." style="width: 300px;height:600px;"> --}}
          </div>
          <div class="carousel-item">
            <div class="container-fluid" id="weather_card">
                
            </div>
            {{-- <img src="https://images-na.ssl-images-amazon.com/images/I/5139WmbjmdL._AC_SL1000_.jpg" class="d-block w-100" alt="..." style="width: 300px;height:600px;"> --}}
          </div>
          <div class="carousel-item">
            <div class="container" id="card_minerals">    
            </div>  
            {{-- <img src="https://images-na.ssl-images-amazon.com/images/I/5139WmbjmdL._AC_SL1000_.jpg" class="d-block w-100" alt="..." style="width: 300px;height:600px;"> --}}
          </div>
        </div>
    </div>
    <section class="latest-blog-area area-padding">
        <div class="container" id="start_blog_area">
            
        </div>
    </section>
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
    <div class="container" id="blog">

    </div>
    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <article class="blog_item">
                      <div class="blog_item_img">
                        <img class="card-img rounded-0" src="img/blog/main-blog/m-blog-1.jpg" alt="">
                        <a href="#" class="blog_item_date">
                          <h3>15</h3>
                          <p>Jan</p>
                        </a>
                      </div>
                      
                      <div class="blog_details">
                          <a class="d-inline-block" href="single-blog.html">
                              <h2>Google inks pact for new 35-storey office</h2>
                          </a>
                          <p>That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.</p>
                          <ul class="blog-info-link">
                            <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                            <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                          </ul>
                      </div>
                    </article>
                    
                    <article class="blog_item">
                      <div class="blog_item_img">
                        <img class="card-img rounded-0" src="img/blog/main-blog/m-blog-2.jpg" alt="">
                        <a href="#" class="blog_item_date">
                          <h3>15</h3>
                          <p>Jan</p>
                        </a>
                      </div>
                      
                      <div class="blog_details">
                          <a class="d-inline-block" href="single-blog.html">
                              <h2>Google inks pact for new 35-storey office</h2>
                          </a>
                          <p>That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.</p>
                          <ul class="blog-info-link">
                            <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                            <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                          </ul>
                      </div>
                    </article>

                    <article class="blog_item">
                      <div class="blog_item_img">
                        <img class="card-img rounded-0" src="img/blog/main-blog/m-blog-3.jpg" alt="">
                        <a href="#" class="blog_item_date">
                          <h3>15</h3>
                          <p>Jan</p>
                        </a>
                      </div>
                      
                      <div class="blog_details">
                          <a class="d-inline-block" href="single-blog.html">
                              <h2>Google inks pact for new 35-storey office</h2>
                          </a>
                          <p>That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.</p>
                          <ul class="blog-info-link">
                            <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                            <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                          </ul>
                      </div>
                    </article>

                    <article class="blog_item">
                      <div class="blog_item_img">
                        <img class="card-img rounded-0" src="img/blog/main-blog/m-blog-4.jpg" alt="">
                        <a href="#" class="blog_item_date">
                          <h3>15</h3>
                          <p>Jan</p>
                        </a>
                      </div>
                      
                      <div class="blog_details">
                          <a class="d-inline-block" href="single-blog.html">
                              <h2>Google inks pact for new 35-storey office</h2>
                          </a>
                          <p>That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.</p>
                          <ul class="blog-info-link">
                            <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                            <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                          </ul>
                      </div>
                    </article>

                    <article class="blog_item">
                      <div class="blog_item_img">
                        <img class="card-img rounded-0" src="img/blog/main-blog/m-blog-5.jpg" alt="">
                        <a href="#" class="blog_item_date">
                          <h3>15</h3>
                          <p>Jan</p>
                        </a>
                      </div>
                      
                      <div class="blog_details">
                          <a class="d-inline-block" href="single-blog.html">
                              <h2>Google inks pact for new 35-storey office</h2>
                          </a>
                          <p>That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.</p>
                          <ul class="blog-info-link">
                            <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                            <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                          </ul>
                      </div>
                    </article>
                    


                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                          <div class="form-group">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Search Keyword">
                              <div class="input-group-append">
                                <button class="btn" type="button"><i class="ti-search"></i></button>
                              </div>
                            </div>
                          </div>
                          <button class="button rounded-0 primary-bg text-white w-100" type="submit">Search</button>
                        </form>
                    </aside>

                    <aside class="single_sidebar_widget post_category_widget">
                      <h4 class="widget_title">Category</h4>
                      <ul class="list cat-list">
                          <li>
                              <a href="#" class="d-flex">
                                  <p>Resaurant food</p>
                                  <p>(37)</p>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="d-flex">
                                  <p>Travel news</p>
                                  <p>(10)</p>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="d-flex">
                                  <p>Modern technology</p>
                                  <p>(03)</p>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="d-flex">
                                  <p>Product</p>
                                  <p>(11)</p>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="d-flex">
                                  <p>Inspiration</p>
                                  <p>21</p>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="d-flex">
                                  <p>Health Care (21)</p>
                                  <p>09</p>
                              </a>
                          </li>
                      </ul>
                    </aside>

                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        <div class="media post_item">
                            <img src="img/blog/popular-post/post1.jpg" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>From life was you fish...</h3>
                                </a>
                                <p>January 12, 2019</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/blog/popular-post/post2.jpg" alt="post">                              
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/blog/popular-post/post3.jpg" alt="post">                              
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>Astronomy Or Astrology</h3>
                                </a>
                                <p>03 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/blog/popular-post/post4.jpg" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>Asteroids telescope</h3>
                                </a>
                                <p>01 Hours ago</p>
                            </div>
                        </div>
                    </aside>
                    <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                            <li>
                                <a href="#">project</a>
                            </li>
                            <li>
                                <a href="#">love</a>
                            </li>
                            <li>
                                <a href="#">technology</a>
                            </li>
                            <li>
                                <a href="#">travel</a>
                            </li>
                            <li>
                                <a href="#">restaurant</a>
                            </li>
                            <li>
                                <a href="#">life style</a>
                            </li>
                            <li>
                                <a href="#">design</a>
                            </li>
                            <li>
                                <a href="#">illustration</a>
                            </li>
                        </ul>
                    </aside>


                    <aside class="single_sidebar_widget instagram_feeds">
                      <h4 class="widget_title">Instagram Feeds</h4>
                      <ul class="instagram_row flex-wrap">
                          <li>
                              <a href="#">
                                <img class="img-fluid" src="img/instagram/widget-i1.png" alt="">
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                <img class="img-fluid" src="img/instagram/widget-i2.png" alt="">
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                <img class="img-fluid" src="img/instagram/widget-i3.png" alt="">
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                <img class="img-fluid" src="img/instagram/widget-i4.png" alt="">
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                <img class="img-fluid" src="img/instagram/widget-i5.png" alt="">
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                <img class="img-fluid" src="img/instagram/widget-i6.png" alt="">
                              </a>
                          </li>
                      </ul>
                    </aside>


                    <aside class="single_sidebar_widget newsletter_widget">
                      <h4 class="widget_title">Newsletter</h4>

                      <form action="#">
                        <div class="form-group">
                          <input type="email" class="form-control" placeholder="Enter email" required>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100" type="submit">Subscribe</button>
                      </form>
                    </aside>
                </div>
            </div>
        </div>
    </div> --}}
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
