@yield('scripts')
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oprosnik.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/short.ico')}}">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="{{route('home')}}">
                                        <img src="{{asset('images/logotm.png')}}" style="width: 78%;" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="/home">Главная</a></li>
                                            <li><a href="{{route('tests')}}">Найти тест</a></li>
                                            <li><a href="{{route('contacts')}}  ">Контакты</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="d-none d-lg-block">
                                        <a class="boxed-btn3" href="{{route('themes')}}">Создать тест</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                            <h5 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">Доступно тестов: {{count($tests)}}
                                </h5>
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Oprosnik</h3>
                            <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                <a href="#start" class="boxed-btn3">Начать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
            <img src="{{asset('images/illustration.png')}}" alt="">
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- catagory_area -->
    <div style="height:150px;  width: 100%;" style="display: flex; align-items: center; justify-content: center;">

        <div class="single-input" >

                    <div  style=" margin-top:3%; display: flex; justify-content: center; align-items: center;">
                        <form method="post" action="{{route('tests')}}" style="width: 90%; height: 100%;  display: flex; justify-content: center; align-items: center;">
                            @csrf
                            <input style=" padding: 1%; margin-right:1%; width: 100%; height: 150%;"   name="text" type="text" maxlength="12" placeholder="Search keyword">
                            <input style="width: 19%;" class="boxed-btn3" type="submit">
                        </form>

                </div>

        </div>

    </div>
    <!--/ catagory_area -->

    <!-- popular_catagory_area_start  -->
    <div class="popular_catagory_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title mb-40">
                        <h3>Популярные темы</h3>
                    </div>
                </div>
            </div>
            <div class="row">


                {{!!$tmp=0}}
                @foreach($themes as $theme)
                    {{!!$i=0}}
                    {{!$tmp=$tmp+1}}
                    @foreach($tests as $test)
                        @if($test->theme_id==$theme->id)
                            {{!$i=$i+1}}
                        @endif
                    @endforeach
                    <?php $arr[$theme->id]=$i ?>
                @endforeach
                {{!!$tmp=0}}
                {{!arsort($arr)}}
                @foreach($arr as $id=>$val)
                    {{!($tmp=$tmp+1)}}
                    @if($tmp<9)

                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="{{route('tests', ['theme'=>$themes[$id-1]->id])}}"><h4>{{$themes[$id-1]->theme}}</h4></a>
                        <p> <span>{{$val}}</span>Доступных тестов</p>
                    </div>
                </div>
                    @endif
                @endforeach





                </div>
            </div>
        </div>
    </div>
    <!-- popular_catagory_area_end  -->

    <!-- job_listing_area_start  -->
    <div class="job_listing_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_title">
                        <h3 id="tests1">Новые тесты</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="brouse_job text-right">
                        <a href="{{route('tests')}}" class="boxed-btn4">Еще</a>
                    </div>
                </div>
            </div>
            <div class="job_lists">
                <div class="row">
                    {{!!$tmp=0}}
                    @foreach($tests as $test)
                        {{!($tmp=$tmp+1)}}
                        @if($tmp<9)
                        {{!$i=$test->theme_id}}
                        @foreach($themes as $th)
                            {{!$tmp1=$test->theme_id}}
                            {{!($tmp2=$th->id)}}
                            @if($tmp1==$tmp2)
                            <div class="col-lg-12 col-md-12">
                                <div class="single_jobs white-bg d-flex justify-content-between">
                                    <div class="jobs_left d-flex align-items-center">
                                        <div class="thumb">
                                            <image width="165%" style="position: relative; top:-1.95vh; left:-1.1vw; border-radius: 5px" src="{{asset('images/'.$th->theme.'.png')}}"  alt="">
                                        </div>
                                        <div class="jobs_conetent">
                                            <a href="{{route('quiz',['id'=>$test->id])}}"><h4>{{$test->title}}</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <div class="location">
                                                    {{!!$k=0}}
                                                    @foreach($themes as $theme)
                                                        @if($theme->id==$test->theme_id)
                                                           {{!$k=$theme->theme}}
                                                        @endif
                                                    @endforeach
                                                    <p> <i class="fa fa-map-marker"></i>{{$k}}</p>
                                                </div>
                                                {{!!$q=0}}
                                                @foreach($questions as $question)
                                                    @if($question->test_id==$test->id)
                                                        {{!($q=$q+1)}}
                                                    @endif
                                                @endforeach
                                                <div class="location">
                                                    <p> <i class="fa fa-clock-o"></i>{{$q}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jobs_right">
                                        <div class="apply_now">
                                            <a href="{{route('quiz', ['id'=>$test->id])}}" class="boxed-btn3">Пройти</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                        @endif
                    @endforeach



                </div>
            </div>
        </div>
    </div>
    <!-- job_listing_area_end  -->
    <div class="featured_candidates_area" id="themes1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3 >Темы тестов</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                        <div class="candidate_active owl-carousel">
                            @foreach($themes as $theme)
                            <a href="{{route('tests', ['theme'=>$theme->id])}}"> <div class="single_candidates text-center">
                                    <div class="thumb">
                                        <img src="{{asset('images/'.$theme->theme.'.png')}}" alt="">
                                    </div>
                                    <h4>{{$theme->theme}}</h4>
                                </div></a>
                    @endforeach
                        </div>


                </div>
            </div>
        </div>
    </div>
    <!-- featured_candidates_area_start  -->

    <!-- featured_candidates_area_end  -->
    <!-- job_searcing_wrap  -->
    <div class="job_searcing_wrap overlay" id="start">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 col-md-6">
                    <div class="searching_text">
                        <h3>Хотите пройти тест?</h3>
                        <p>Мы предоставляем вам доступ к нашей базе тестов!</p>
                        <a href="{{route('tests')}}" class="boxed-btn3">Искать</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6">
                    <div class="searching_text">
                        <h3>Хотите создать тест?</h3>
                        <p>Мы придостовля возможность создать тест онлайн!</p>
                        <a href="{{route('themes')}}" class="boxed-btn3">Создать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- job_searcing_wrap end  -->



    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="footer_logo">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('images/logotm.png')}}" style="width: 95%;" alt="">
                                </a>
                            </div>
                            <p>
                                oprosnik@support.com <br>
                                8 (800) 555-35-35<br>
                                д.78, стр.3, Проспект Вернадского, Москва, Россия
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".4s">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul>
                                <li><a href="{{route('contacts')}}">Контакты </a></li>

                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <h3 class="footer_title">
                                Category
                            </h3>
                            <ul>
                                <li><a href="/home#themes1">Темы</a></li>
                                <li><a href="/home#tests1">Тесты</a></li>
                                <li><a href="{{route('themes')}}">Создать</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form action="{{route('email')}}" method="post" class="newsletter_form">
                                @csrf
                                <input type="email" id="email" name="email" placeholder="Enter your mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <p class="newsletter_text">Подписаться на рассылку полезной информации.</p>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | made <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://vk.com/loveme.ayanami" target="_blank">loveme.ayanami</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/modernizr.min.js')}}"></script>
    <script src="{{URL::asset('js/app.js')}}"></script>

    <script src="{{URL::asset('js/popper.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('js/ajax-form.js')}}"></script>
    <script src="{{URL::asset('js/waypoints.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{URL::asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('js/scrollIt.js')}}"></script>
    <script src="{{URL::asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{URL::asset('js/wow.min.js')}}"></script>
    <script src="{{URL::asset('js/nice-select.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.slicknav.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('js/plugins.js')}}"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="{{URL::asset('js/range.js')}}"></script>



    <!--contact js-->
    <script src="{{URL::asset('js/contact.js')}}"></script>
    <script src="{{URL::asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.form.js')}}"></script>
    <script src="{{URL::asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{URL::asset('js/mail-script.js')}}"></script>




</body>

</html>
