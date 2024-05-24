<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Educato</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <link rel="stylesheet" href="css/style.css">
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
    <!--/ bradcam_area  -->
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">

<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A83d1288cbac3ec159123e1d7996bee9937ed083e2482f8274a54c318ca63e3d5&amp;width=1110&amp;height=480&amp;lang=ru_RU&amp;scroll=true"></script>
<p></p><p></p>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Обратная связь</h2>
        </div>
          <div class="col-lg-8">
              @if($model)
                  <form class="form-contact contact_form" method="post" action="{{route('contacts')}}">
                      @csrf
                      <div class="row">
                          <div class="col-12">
                              <div class="form-group">
                                  <textarea required class="form-control w-100" name="message" id="message" cols="30" rows="9"  placeholder = 'Сообщение'></textarea>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                  <input required class="form-control" name="name" id="name" type="text"  placeholder = 'Имя'>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                  <input required class="form-control" name="email" type="email" placeholder = 'E-mail'>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <input required class="form-control" name="subject" id="subject" type="text"  placeholder = 'Тема'>
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
              <h3>Проспект Вернадского, д.78</h3>
              <p>Москва, Россия</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>8 (800) 555-85-85</h3>
              <p>Пн-Пт, 9:00-18:00</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>educato@support.com</h3>
              <p>Служба поддержки работает 24/7</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

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
    <!-- footer end  -->


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
