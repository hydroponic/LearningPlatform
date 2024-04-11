
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <style>
        .answers {
            padding:15px;
            background:#f7f7f7;
            margin-top:15px;
        }
        textarea {
            height:150px;
        }
        .divider {
            margin-top:10px;
            padding-top:5px;
            border-top:#ddd 1px solid;
        }
        .result-print {
            text-align: center;
            font-size:30px;
            font-weight:700;
        }
        .container
        {
            margin-bottom: 20vh;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Learner.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/short.ico')}}">

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
                                    <img src="{{URL::asset('images/logo.png')}}" style="width: 78%;" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="#">программы <i class="ti-angle-down"></i></a>
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






<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>веб-дизайн</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->


<!-- popular_catagory_area_start  -->
<div class="popular_catagory_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title mb-40">
                    <h3>Готовые курсы</h3>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach(\App\Models\Cources::all() as $cource)
            <div class="col-lg-4 col-xl-4 col-md-6">
                <div class="single_catagory">
                    <img src="{{URL::asset('images/k-1.jpg')}}" alt="" class="img-fluid">
                    <a href="jobs.html"><h4><br>{{$cource->name}}</h4></a>
                    <p>– Насмотренность в дизайне
                        <br>– Основы Adobe Photoshop и Illustrator
                        <br>– Figma: от основ до дизайн-макета
                        <br>– Визуальный дизайн
                        <br>– UX-копирайтинг
                        <br>– Основы UX-проектирования в вебе
                    </p>
                    <p>&nbsp;</p>
                    <div class="jobs_right">
                        <div class="apply_now">
                            <a href="{{route('cart', ['cart'=>$cource->modules])}}" class="boxed-btn3"><i class="fa fa-shopping-basket"></i> В корзину</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- popular_catagory_area_end  -->









<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="img/logo.png" alt="">
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
                            <li><a href="#">Программы</a></li>
                            <li><a href="#">Курсы</a></li>
                            <li><a href="#">Акции</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <h3 class="footer_title">
                            Информация
                        </h3>
                        <ul>
                            <li><a href="#">Контакты</a></li>
                            <li><a href="#">Отзывы</a></li>
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







</body>

</html>
