<?php
    $i=\App\Models\Test::all();
    foreach ($i as $ii) {
        if ($ii->id==$_GET['id'])
            $get=$ii->title;
    }
    ?>
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
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="#">программы <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="modules.html">конструктор курсов </a></li>
                                                <li><a href="courses.html">готовые курсы </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="learning.html">обучение </a></li>
                                        <li><a href="about.html">о нас </a></li>
                                        <li><a href="contact.html">контакты</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
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
</header>
<!-- header-end -->

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Веб-дизайн</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<div class="job_details_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="job_details_header">
                    <div class="single_jobs white-bg d-flex justify-content-between">
                        <div class="jobs_left d-flex align-items-center">
                            <div class="thumb">
                                <img src="img/svg_icon/htm.jpg" alt="">
                            </div>
                            <div class="jobs_conetent">
                                <h4>Вёрстка сайтов</h4>
                                <div class="links_locat d-flex align-items-center">
                                    <div class="location">
                                        <p> <i class="fa fa-money"></i> 2500 ₽</p>
                                    </div>
                                    <div class="location">
                                        <p> <i class="fa fa-clock-o"></i> 5 недель</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="descript_wrap white-bg">
                    <div class="single_wrap">
                        <h4>Описание модуля 2500 руб.</h4>
                        <p>На занятиях вы ознакомитесь с основными конструкциями и принципами использования базовых языков работы веб-сайтов – HTML5 и CSS3. Изучение этих языков является основой для обучения любого верстальщика и веб-разработчика.</p>
                        <p>Вы познакомитесь с тем, что такое HTML тэги и как их использовать, с особенностью того, как устроена структура любого сайта, что такое блоки, как формируется текст и отображаются картинки. Узнаете, как работать с таблицами и списками, их правила вложенности, узнаете правила размещения блоков и способы работы с путями для файлов.</p>
                    </div>
                    <div class="single_wrap">
                        <h4>Предварительные требования</h4>
                        <p>Курс подойдет любому новичку, который до этого ни разу не программировал и не был связан с IT.</p>
                    </div>
                    <div class="single_wrap">
                        <h4>Вы научитесь</h4>
                        <ul>
                            <li>Создавать простые HTML-страницы</li>
                            <li>Задавать различные стили элементам разметки</li>
                            <li>Верстать интернет-страницы, используя различные техники</li>
                            <li>Применять фреймворк Bootstrap 4 для верстки веб-страниц</li>
                            <li>Создавать формы с различными элементами</li>
                            <li>Публиковать созданные интернет-страницы на сервере</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="job_location_wrap">
                    <div class="job_lok_inner">
                        <img src="img/elements/html5.jpg" alt="" class="img-fluid">


                    </div>
                </div>


                <div class="job_sumary">
                    <div class="job_content">
                        <ul>
                            <li>Published on: <span>12 Nov, 2019</span></li>
                            <li>Vacancy: <span>2 Position</span></li>
                            <li>Salary: <span>50k - 120k/y</span></li>
                            <li>Location: <span>California, USA</span></li>
                            <li>Job Nature: <span> Full-time</span></li>
                        </ul>
                    </div>
                </div>
                <div class="share_wrap d-flex">
                    <span>Поделиться:</span>
                    <ul>
                        <li><a href="#"> <i class="fa fa-facebook"></i></a> </li>
                        <li><a href="#"> <i class="fa fa-google-plus"></i></a> </li>
                        <li><a href="#"> <i class="fa fa-twitter"></i></a> </li>
                        <li><a href="#"> <i class="fa fa-envelope"></i></a> </li>
                    </ul>
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
<!-- footer end  -->

<!-- link that opens popup -->
<!-- JS here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/gijgo.min.js"></script>



<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>


<script src="js/main.js"></script>
</body>

</html>

