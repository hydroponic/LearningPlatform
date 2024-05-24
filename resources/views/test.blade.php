
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
                                                <li><a href="{{route('ready')}}">готовые курсы </a></li>
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
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_2">
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







<div class="job_listing_area plus_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="job_filter white-bg">
                    <div class="form_inner white-bg">
                        <h3>Поиск</h3>

                        <form method="post" action="{{route('tests')}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <input name="text" type="text" maxlength="12" placeholder="Search keyword">
                                        <input style="display:none" type="submit">
                                    </div>
                                </div>

                        </form>
                        <div class="col-lg-12">
                            <form action="{{route('tests')}}">
                                <button style="margin-top: 1vh;" class="boxed-btn3 w-100" type="submit">Сбросить</button>
                            </form>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>


        <div class="col-lg-9">
            <div class="recent_joblist_wrap">
                <div class="recent_joblist white-bg ">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h4>Модули</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="serch_cat d-flex justify-content-end">
                                <select disabled>
                                    @if(isset($_GET['theme']))
                                        <option>{{$themes[$_GET['theme']-1]->theme}}</option>
                                    @else <option>Все</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="job_lists m-0">
                <div class="row">
                    {{!!$i=0}}
                    @if(count($tests))
                        @foreach($tests as $test)

                                    <div class="col-lg-12 col-md-12">
                                        <div class="single_jobs white-bg d-flex justify-content-between">
                                            <div class="jobs_left d-flex align-items-center">
                                                <div class="thumb">
                                                    <img width="200%" height="160%" style="position: relative; top:-1.7vh; left:-1.1vw; border-radius: 5px" src="{{URL::asset('images/m-'.$test->id.'.jpg')}}"  alt="">
                                                </div>
                                                <div class="jobs_conetent">
                                                    <a href="{{route('item', ['id'=>$test->id])}}"><h4>{{$test->title}}</h4></a>
                                                    <div class="links_locat d-flex align-items-center">
                                                        <div class="location">
                                                            <p> <i class="fa fa-money"></i>{{$test->cost}} ₽</p>
                                                        </div>
                                                        <div class="location">
                                                            @if($test->theme_id==1)<p> <span>{{$test->theme_id}}</span> неделя</p>@endif
                                                            @if($test->theme_id<5 && $test->theme_id>1)<p> <span>{{$test->theme_id}}</span> недели</p>@endif
                                                            @if($test->theme_id>=5)<p> <span>{{$test->theme_id}}</span> недель</p>@endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jobs_right">
                                                <div class="apply_now">
                                                    <a href="{{route('cart', ['cart'=>$test->id])}}" class="boxed-btn3">В корзину</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            @endforeach
                    @else <h2 style="margin: auto;">Ничего не найдено.</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>


<!-- footer start -->
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
