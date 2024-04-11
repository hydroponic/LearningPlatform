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



<div width='100%' style=" margin-top:15vh; margin-bottom:10%; display: flex; justify-content: center; align-items: center;flex-direction: column">

<h1>Спасибо за покупку!</h1>
<a href="{{route('home')}}"><button style="margin-top: 1vh;" class="boxed-btn3 w-100 " type="submit">Домой</button></a>
</div>
<!-- footer start -->
<footer class="footer" style="height: 100vh; !important;">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="footer_logo">
                            <a href="{{route('home')}}">
                                <img src="{{asset('images/logotm4.png')}}" style="width: 95%;" alt="">
                            </a>
                        </div>
                        <p>
                            learner@support.com <br>
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
