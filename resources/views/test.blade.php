
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
    <title>Oprosnik.com</title>
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
                                    <img src="{{asset('images/logotm.png')}}" style="width: 78%;" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{route('home')}}">Главная</a></li>
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

<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3> Найдено тестов: {{count($tests)}} </h3>
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
                            <div class="single_field">
                                <h3>Темы</h3>
                                @foreach($themes as $th)
                                    <button disabled style="background: white; " class="boxed-btn3 w-100" type="submit"><a href="{{route('tests',['theme'=>$th->id])}}">{{$th->theme}}</a></button>
                                @endforeach
                            </div>
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
                            <h4>Тесты</h4>
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
                {{!$i=$test->theme_id}}
                @foreach($themes as $th)
                    {{!$tmp1=$test->theme_id}}
                    {{!($tmp2=$th->id)}}
                    @if($tmp1==$tmp2)
                                <div class="col-lg-12 col-md-12">
                                    <div class="single_jobs white-bg d-flex justify-content-between">
                                        <div class="jobs_left d-flex align-items-center">
                                            <div class="thumb">
                                                <img width="185%" style="position: relative; top:-1.95vh; left:-1.1vw; border-radius: 5px" src="{{asset('images/'.$th->theme.'.png')}}"  alt="">
                                            </div>
                                            <div class="jobs_conetent">
                                                <a href="{{route('quiz', ['id'=>$test->id])}}"><h4>{{$test->title}}</h4></a>
                                                <div class="links_locat d-flex align-items-center">
                                                    <div class="location">
                                                        <p> <i class="fa fa-map-marker"></i>{{$th->theme}}</p>
                                                    </div>
                                                    <div class="location">
                                                        {{!!$q=0}}
                                                        @foreach($questions as $question)
                                                            @if($question->test_id==$test->id)
                                                                {{!($q=$q+1)}}
                                                            @endif
                                                        @endforeach
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
