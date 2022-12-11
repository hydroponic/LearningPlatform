
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oprosnik.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('images/short.ico')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style>
        * {
            box-sizing: border-box;
        }
        .item {
            width: 250px;
            border: 1px solid rgba(0, 0, 0, .08);
            padding: 15px 0;
            margin: 0 auto;
            background: white;
            margin-bottom: 2vh;
        }
        .item a {
            text-decoration: none;
            outline: 0;
        }
        .product {
            padding: 0 15px;
            position: relative;
        }
        .thumb-img {
            position: relative;
            overflow: hidden;
        }
        .thumb-img img {
            width: 100%;
            display: block;
        }
        .thumb-img:after {
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, .5);
            opacity: 0;
            transition: .3s ease-in-out;
        }
        .product:hover .thumb-img:after {
            opacity: 1;
        }
        .actions {
            position: absolute;
            z-index: 2;
            top: 100%;
            left: 0;
            right: 0;
            padding: 0 15px;
            text-align: center;
            opacity: 0;
            transition: .3s ease-in-out;
        }
        .product:hover .actions {
            top: 45%;
            opacity: 1;
        }
        .actions a {
            margin: 7px 6px;
            color: white;
            height: 30px;
            line-height: 26px;
            display: inline-block;
            border-radius: 30px;
            font-size: 12px;
            text-transform: uppercase;
            text-align: center;
            border: 2px solid white;
            background: transparent;
            transition: .3s ease-in-out;
        }
        .share-button {
            width: 30px;
        }
        .add-to-cart:hover {
            background: #A2927F;
        }
        .actions a:hover {
            border-color: #A2927F;
            background: #A2927F;
        }
        .share-wrap {
            display: inline-block;
            height: 30px;
            position: relative;
            margin: 7px 6px;
        }
        .share-item {
            width: 200px;
            margin-left: -100px;
            position: absolute;
            z-index: 3;
            bottom: 38px;
            left: 50%;
            opacity: 0;
            visibility: hidden;
            text-align: center;
            transition: .3s ease-in-out;
        }
        .share-wrap:hover .share-item {
            opacity: 1;
            visibility: visible;
        }
        .add-to-cart {
            padding: 0 20px;
        }
        .product-about {
            padding: 20px 0 0;
            text-align: center;
        }
        .product-title {
            font-family: 'Open Sans', sans-serif;
            line-height: 1.1;
            font-size: 16px;
            margin: 5px 0 15px;
            font-weight: normal;
        }
        .product-title a {
            color: #373737;
        }
        .price {
            font-family: 'Open Sans', sans-serif;
            font-size: 1.25em;
            font-weight: bold;
            color: #F2453E;
        }
        .cnt {
            width:80%;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: flex-start;
            margin-left: 10%;
            margin-top: 5vh;
            margin-bottom: 5vh;
        }
    </style>
</head>

<body>
<header>
    <div class="header-area " style="background: #0f2137">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="{{route('home')}}">
                                    <img src="{{URL::asset('images/logotm.png')}}" style="width: 78%;" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{route('home')}}">Главная</a></li>
                                        <li><a href="{{route('tests')}}">Найти тест</a></li>
                                        <li><a href="{{route('contacts')}}">Контакты</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="d-none d-lg-block">
                                    <a class="boxed-btn3" href="{{route('home')}}">Отмена</a>
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
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<div class="container" style="margin-top: 15vh;">
    <div class="row align-items-center">
        <div class="col-lg-6"  style="margin-left: 35%">
            <div class="section_title">
                <h3>Выберите тему</h3>
            </div>
        </div></div></div>
<div class = "cnt">


    @foreach($themes as $theme)
        <div class="item">
            <div class="product">
                <div class="thumb-img">
                    <img style="width: 105%; !important; position: relative; bottom:0.2vh; right:0.2vw" src="{{URL::asset('images/'.$theme->theme.'.png')}}">
                        <div class="actions">
                            <a href="{{route('add', ['id'=>$theme->id])}}" class="add-to-cart">{{$theme->theme}}</a>
                        </div>
                </div>
            </div>
        </div>
    @endforeach

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
                                <img src="{{URL::asset('images/logotm.png')}}" style="width: 95%;" alt="">
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
                            <li><a href="contact.blade.php">Контакты </a></li>

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
