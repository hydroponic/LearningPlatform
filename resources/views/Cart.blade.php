
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Learner.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('images/short.ico')}}">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->


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
                                    <a style='color:red' class="fa fa-sign-out fa-2x fa-stack" href="{{route('logout')}}"></a>
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

<div class="job_listing_area plus_padding">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section_title mb-40">
                    <h3>Личный кабинет</h3>
                    <p>Добро пожаловать, {{$user->name}}!</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="section_title mb-40">
                <h4>Корзина</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="job_lists m-0">
                    <div class="row">




                        <?php
                        if(isset($_GET['cartm'])) {
                            $key = array_search($_GET['cartm'], session('cart'));
                            $cp=session('cart');
                            unset($cp[$key]);
                            session(['cart'=>$cp]);}
                        if(isset($_GET['cart']))
                            if (!session('cart'))
                            { $flag=0;
                                $i=0;
                                foreach($cources as $crs) {
                                    foreach (\App\Models\Test::all() as $tmp)
                                    {
                                        if($tmp->id==$_GET['cart'])
                                            $i=$tmp->title;
                                    }
                                    if ($crs==$i)
                                        $flag=1;}
                                if (!$flag)
                                    session()->push('cart', $_GET['cart']);}
                            else
                                if(!in_array($_GET['cart'], session('cart')))
                                { $flag=0;
                                    $i=0;
                                    foreach($cources as $crs) {
                                        foreach (\App\Models\Test::all() as $tmp)
                                        {
                                            if($tmp->id==$_GET['cart'])
                                                $i=$tmp->title;
                                        }
                                        if ($crs==$i)
                                            $flag=1;}
                                    if (!$flag)
                                        session()->push('cart', $_GET['cart']);} ?>

                        @if(session('cart'))
                            @foreach(session('cart') as $cr)
                                @foreach($cour as $c)
                                    @if ($c->id==$cr)

                        <div class="col-lg-12 col-md-12">
                            <div class="single_jobs white-bg d-flex justify-content-between">
                                <div class="jobs_left d-flex align-items-center">
                                    <div class="thumb">
                                        <img width="200%" height="160%" style="position: relative; top:-1.7vh; left:-1.1vw; border-radius: 5px" src="{{URL::asset('images/m-'.$c->id.'.jpg')}}"  alt="">
                                    </div>
                                    <div class="jobs_conetent">
                                        <a href="job_details.html"><h4>{{$c->title}}</h4> </a>
                                        <div class="svo"><h4>{{$c->cost}} ₽ </h4></div>
                                        <div class="links_locat d-flex align-items-center">

                                            <div class="location">
                                                @if($c->theme_id==1)<p> <span>{{$c->theme_id}}</span> неделя</p>@endif
                                                @if($c->theme_id<5 && $c->theme_id>1)<p> <span>{{$c->theme_id}}</span> недели</p>@endif
                                                @if($c->theme_id>=5)<p> <span>{{$c->theme_id}}</span> недель</p>@endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="sprr jobs_right">
                                    <div class="apply_now">


                                        <a class ='delete boxed-btn3' href="{{route('cart', ['cartm'=>$c->id])}}">✖</a>

                                    </div>

                                    <div class="date">
                                        <p></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                                @endif
                                @endforeach
                                @endforeach
                                <a href='{{route('purchase')}}' class="boxed-btn3 m-5">Оплатить</a>
                        @else <div style="margin-bottom: 10%";>Здесь пока ничего нет :(</div>
                                @endif








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
<script src="{{URL::asset('js/range.js')}}"></script>
<script src="{{URL::asset('js/contact.js')}}"></script>
<script src="{{URL::asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.form.js')}}"></script>
<script src="{{URL::asset('js/jquery.validate.min.js')}}"></script>
<script src="{{URL::asset('js/mail-script.js')}}"></script>



</body>

</html>
