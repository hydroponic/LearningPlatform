@yield('scripts')
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Learner.com</title>
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

<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="{{route('home')}}">
                                    <img src="{{URL::asset('images/logo.png')}}" style="width: 78%;" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="">программы <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{route('tests')}}">конструктор курсов </a></li>
                                                <li><a href="courses.html">готовые курсы </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('my')}}">обучение </a></li>
                                        <li><a href="{{route('contacts')}}">о нас </a></li>
                                        <li><a href="{{route('contacts')}}">контакты</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="d-none d-lg-block">
                                    @if(!Auth::check())
                                        <a class="boxed-btn3" href="{{route('login')}}">войти</a>
                                    @else  <a style="color: white" class="fa fa-shopping-basket fa-2x fa-stack" href="{{route('cart')}}"></a>
                                    <a style='color:red' class="fa fa-sign-out fa-2x fa-stack" href="{{route('logout')}}"></a>
                                    @endif
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
                        <h5 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">Онлайн курс</h5>
                        <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Веб-дизайн</h3>
                        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">Научитесь с нуля создавать уникальные сайты с эффектным дизайном и продуманным UX</p>
                        <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                            <a href="{{route('tests')}}" class="boxed-btn3">Записаться</a>
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

<!-- popular_catagory_area_start  -->
<div class="popular_catagory_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title mb-40">
                    <h3>Популярные модули</h3>
                </div>
            </div>
        </div>
        <div class="row">


            {{!!$tmp=0}}
            <?php $tmps=0 ?>
            @foreach($tests as $tes)
                @if($tmps<8)
                    <div class="col-lg-4 col-xl-3 col-md-6">
                        <div class="single_catagory">
                            <img src="{{URL::asset('images/m-'.$tes->id.'.jpg')}}" alt="" class="img-fluid">
                            <a href="{{route('tests')}}"><h4>{{$tes->title}}</h4></a>
                            @if($tes->theme_id==1)<p> <span>{{$tes->theme_id}}</span> неделя</p>@endif
                            @if($tes->theme_id<5 && $tes->theme_id>1)<p> <span>{{$tes->theme_id}}</span> недели</p>@endif
                            @if($tes->theme_id>=5)<p> <span>{{$tes->theme_id}}</span> недель</p>@endif
                        </div>
                    </div>
                @endif
                    <?php $tmps++; ?>
            @endforeach

    </div>
</div>
<!-- popular_catagory_area_end  -->

<div class="job_listing_area">
    <div class="container">

        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-12">
                    <blockquote class="generic-blockquote">
                        Более 50 модулей обучения для начинающих и практикующих дизайнеров. От краткосрочных курсов до длительных программ обучения. Вы будете изучать теорию в формате видеолекций в удобное для вас время. К занятиям прилагаются дополнительные материалы, конспекты и чек-листы. Вы погружаетесь в реальную рабочую среду. В формате кейсов решаете задачи, с которыми вам предстоит столкнуться в процессе работы.
                    </blockquote>
                </div>
            </div>
        </div>



        <div class="section-top-border">
            <h3 class="mb-30">Наши преимущества<br></h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-defination">
                        <h4 class="mb-20">Кастомизация</h4>
                        <p>Вы выбираете индивидуальную программу по вашему запросу. Возможность ускорять и замедлять образовательный процесс.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-defination">
                        <h4 class="mb-20">Актуальность программ</h4>
                        <p>Обновляем программы и следим за актуальностью – вы получите свежие навыки, которые реально нужны на рынке.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-defination">
                        <h4 class="mb-20">Дистанционное обучение</h4>
                        <p>Обучение происходит онлайн из любой точки мира. Выбирайте свой темп и уровень поддержки.</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>



<div class="featured_candidates_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center mb-40">
                    <h3>Отзывы наших студентов</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="candidate_active owl-carousel">
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="{{URL::asset('images/c-01.png')}}" alt="">
                        </div>
                        <a href="#"><h4>Антон</h4></a>
                        <p>Курс "Tilda"</p>
                    </div>
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="{{URL::asset('images/c-02.png')}}" alt="">
                        </div>
                        <a href="#"><h4>Валерий</h4></a>
                        <p>Курс "Figma"</p>
                    </div>
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="{{URL::asset('images/c-03.png')}}" alt="">
                        </div>
                        <a href="#"><h4>Анна</h4></a>
                        <p>Курс "Blender"</p>
                    </div>
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="{{URL::asset('images/c-04.png')}}" alt="">
                        </div>
                        <a href="#"><h4>Пётр</h4></a>
                        <p>Курс "Photoshop"</p>
                    </div>
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="{{URL::asset('images/c-05.png')}}" alt="">
                        </div>
                        <a href="#"><h4>Максим</h4></a>
                        <p>Курс "Анимация"</p>
                    </div>
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="{{URL::asset('images/c-06.png')}}" alt="">
                        </div>
                        <a href="#"><h4>Борис</h4></a>
                        <p>Курс "Лендинг"</p>
                    </div>
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="{{URL::asset('images/c-07.png')}}" alt="">
                        </div>
                        <a href="#"><h4>Евгений</h4></a>
                        <p>Курс "UX/UI-дизайн"</p>
                    </div>
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="{{URL::asset('images/c-08.png')}}" alt="">
                        </div>
                        <a href="#"><h4>Михаил</h4></a>
                        <p>Курс "Вёрстка"</p>
                    </div>
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="{{URL::asset('images/c-09.png')}}" alt="">
                        </div>
                        <a href="#"><h4>Павел</h4></a>
                        <p>Курс "Колористика"</p>
                    </div>
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="{{URL::asset('images/c-10.png')}}" alt="">
                        </div>
                        <a href="#"><h4>Ольга</h4></a>
                        <p>Курс "Illustrator"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="footer_logo">
                            <a href="{{route('home')}}">
                                <img src="{{URL::asset('images/logo.png')}}" style="width: 78%;" alt="">
                            </a>
                        </div>
                        <p>
                            educato@support.com<br>
                            8 (800) 555-85-85<br>
                            д.78, стр.3, Проспект Вернадского,<br>
                            Москва, Россия

                        </p>
                        <div class="socail_links">
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".4s">
                        <h3 class="footer_title">
                            Обучение
                        </h3>
                        <ul>
                            <li><a href="{{route('tests')}}">Программы</a></li>
                            <li><a href="{{route('tests')}}">Курсы</a></li>
                            <li><a href="#">Акции</a></li>
                            <li><a href="{{route('contacts')}}">FAQ</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <h3 class="footer_title">
                            Информация
                        </h3>
                        <ul>
                            <li><a href="{{route('contacts')}}">Контакты</a></li>
                            <li><a href="{{route('home')}}">Отзывы</a></li>
                            <li><a href="#">Лицензия</a></li>
                            <li><a href="#">Договор-оферта</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                        <h3 class="footer_title">
                            Подписка
                        </h3>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Введите ваш E-mail">
                            <button type="submit">Подписаться</button>
                        </form>
                        <p class="newsletter_text">Подпишитесь и получайте актуальную информацию о новых программах и скидках.</p>
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
                        Copyright &copy; Educato, <script>document.write(new Date().getFullYear());</script>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end  -->

<!-- JS here -->
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
