
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oprosnik.com</title>
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



    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Связаться с нами</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4" >
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2250.1684992488968!2d37.481537!3d55.66867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54da6a2c35e67%3A0x451d5833015f4940!2z0L_RgC4g0JLQtdGA0L3QsNC00YHQutC-0LPQviwgNzgg0YHRgtGA0L7QtdC90LjQtSAzLCDQnNC-0YHQutCy0LAsIDExOTQ1NA!5e0!3m2!1sru!2sru!4v1665360067699!5m2!1sru!2sru" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>


      <div class="row" id="iddd">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
            @if($model)
          <form class="form-contact contact_form" method="post" action="{{route('contacts')}}">
              @csrf
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea required class="form-control w-100" name="message" id="message" cols="30" rows="9"  placeholder = 'Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input required class="form-control" name="name" id="name" type="text"  placeholder = 'Enter your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input required class="form-control" name="email" type="email" placeholder = 'Enter email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input required class="form-control" name="subject" id="subject" type="text"  placeholder = 'Enter Subject'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <input required type="submit" class="button button-contactForm btn_4 boxed-btn"></input>
            </div>
          </form>
            @else <h1>Спасибо за сообщение!</h1>
            @endif
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Москва, Россия.</h3>
              <p>Проспект вернадского д.78, строение 3</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>8 (800) 555-35-35</h3>
              <p>Пн - Пт, 9:00 - 18:00</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>support@oprosnik.com</h3>
              <p>Служба поддержки работает 24/7</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================ contact section end ================= -->
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
    <!--/ footer end  -->
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
