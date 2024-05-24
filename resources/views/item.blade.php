<?php
    $i=\App\Models\Test::all();
    foreach ($i as $ii) {
        if ($ii->id==$_GET['id']) {
            $get = $ii->title;
            $get2 =$ii->cost;
            $get3 = $ii->theme_id;
        }
    }
    $a=$_GET['id'];
    $mas = [1 => ['a'=>'На занятиях вы ознакомитесь с основными конструкциями и принципами использования базовых языков работы веб-сайтов – HTML5 и CSS3. Изучение этих языков является основой для обучения любого верстальщика и веб-разработчика.',
                'b'=>'Вы познакомитесь с тем, что такое HTML тэги и как их использовать, с особенностью того, как устроена структура любого сайта, что такое блоки, как формируется текст и отображаются картинки. Узнаете, как работать с таблицами и списками, их правила вложенности, узнаете правила размещения блоков и способы работы с путями для файлов.',
                 'c'=> 'Курс подойдет любому новичку, который до этого ни разу не программировал и не был связан с IT.',
                'd'=>['Создавать простые HTML-страницы','Задавать различные стили элементам разметки','Верстать интернет-страницы, используя различные техники', 'Применять фреймворк Bootstrap 4 для верстки веб-страниц', 'Создавать формы с различными элементами', 'Публиковать созданные интернет-страницы на сервере' ]],
                2 => ['a'=>'Лендинг - это любая страница, которая призывает пользователя что-то сделать. Например, подписаться на рассылку, купить билет на конференцию, запросить смету или просто скачать презентацию.',
                    'b'=>'Наш курс научит Вас проектировать, оформлять и запускать конверсионные лендинги и увеличивать количество клиентов. Вы сможете создать свой лендинг, даже если до курса не знали, что это такое.',
                    'c'=>'Курс подойдет любому новичку, который до этого ни разу не программировал и не был связан с IT.',
                    'd'=>['Создавать дизайн посадочной страницы.','Придумывать структуру.', 'Писать текст для лендинга.', 'Находить свою целевую аудиторию.','Выбирать шрифт и цвет для сайта.','Следить за статистикой.', 'Оптимизировать сайт для SEO.']],
        3=> ['a'=>'Figma – это один из лучших дизайнерских инструментов для создания интерактивных прототипов приложений или веб-сайтов. Возможности Figma позволяют удобно работать с проектом как одному дизайнеру, так и целой команде.'
            , 'b'=>'Курс «Figma» научит вас использовать этот удобный инструмент, проведя на практике через все этапы создания готового прототипа интернет-магазина, определяя его архитектуру, элементы дизайна и логику работы с пользователем. Значительная часть курса затрагивает рассмотрение особенностей дизайна сайтов, нюансы прототипирования и адаптации его под различные устройства.',
            'c'=>'Курс рассчитан на новичков, желающих разобраться в веб-дизайне, закрепить теоретические знания на практике.',
            'd'=>['Создавать в программе Figma готовый дизайн и кликабельный прототип сайта, который можно показать заказчику.','Понимать особенности структуры различных сайтов и архитектуру интернет-магазина.','Осуществлять выбор цветовой гаммы для сайта и его элементов, понимать особенности главной страницы, композиции элементов, уметь расставлять акценты в дизайне.','Реализовывать дизайн карточки товара, списка характеристик, страницы регистрации, личного кабинета и корзины - как решающей страницы.','Реализовывать анимацию с помощью плагина Figmotion.','Понимать особенности и уметь осуществлять адаптацию дизайна сайта под различные устройства.']],
        4=> ['a'=>'Tilda — самый популярный конструктор сайтов в мире. В нём можно быстро создавать различные цифровые продукты: лендинги, многостраничные сайты, интернет-магазины. Для работы с конструктором Tilda не требуются специальные знания, поэтому начать зарабатывать в этой сфере могут даже новички, не имеющие опыта в дизайне.',
            'b'=>'Вы научитесь делать красивые и функциональные сайты, которые решают вопросы бизнеса, даже если никогда не занимались дизайном. Добавите 4 проекта в портфолио и сможете брать первые заказы.',
            'c'=>'Курс подойдет любому новичку, который до этого ни разу не программировал и не был связан с IT.',
            'd'=>['Разрабатывать структуру основных смысловых блоков.','Работать с конструктором Tilda на уверенном уровне.','Настраивать платёжные системы, мессенджеры, формы приёма данных.','Использовать на практике принципы композиции и типографики.','Работать с модульными сетками.','Проектировать адаптивный дизайн.','Готовить сайт к запуску.','Оформлять проект для портфолио.']],
        5=> ['a'=>'Наш кус научит Вас проектировать удобные, понятные и эстетичные пользовательские интерфейсы. По окончании учёбы Вы сможете анализировать конкурентов и тренды, проводить исследования поведения пользователей, создавать структуру и навигацию продукта, делать дизайн сайтов и приложений, готовить макеты для разработчиков, адаптировать дизайн под мобильные устройства, анализировать удобство дизайна для аудитории.'
            , 'b'=>'', 'c'=>'Курс подойдет любому новичку, который до этого ни разу не программировал и не был связан с IT.',
            'd'=>['Исследовать конкурентов, целевую аудиторию и её привычки.','Формулировать и проверять гипотезы с помощью разных типов исследований.','Продумывать пользовательские сценарии, делать интерфейс интуитивно понятным.','Проектировать визуальную часть интерфейсов для разных устройств и операционных систем.','Делать анимированные прототипы и тестировать с пользователями свои решения.','Презентовать идеи заказчику, передавать проекты в разработку.']],
        6=> ['a'=>'Photoshop – самый востребованный графический редактор для дизайна и обработки цифровых изображений.',
            'b'=>'Вы освоите работу с ключевыми инструментами Photoshop (Cлоями, Режимами наложения Кривой Безье, Масками и кистями, Инструментом «Текст», Фильтрами, Анимированными GIF, Сетками и направляющими, Smart-объектами, Цветом и градиентами). Вы научитесь визуализировать идеи с помощью популярного софта. Сможете создавать фотореалистичные коллажи, обрабатывать рендеры и эффектно презентовать проекты заказчикам, чтобы перейти на новый уровень в карьере.',
            'c'=>'Курс подойдет любому новичку, который до этого ни разу не работал с графическими редакторами.',
            'd'=>['Уверенно работать в Photoshop.','Обрабатывать и улучшать изображения.','Составлять коллажи.','Ретушировать рендеры.','Создавать трёхмерные планировки помещений.','Оформлять проекты.']],
        7=> ['a'=>'Blender – это бесплатный и открытый 3D-пакет, включающий в себя инструменты для моделирования, скульптинга, анимации, монтажа и рендера. Это хороший старт для тех, кто хочет попробовать себя в 3D, но не знает, с чего начать.',
            'b'=>'На данном курсе Вы освоите популярную программу для компьютерной графики. Научитесь создавать детализированные сцены, визуализации и работать со сложными эффектами. Сможете делать графику для кино, игр и начать зарабатывать на 3D.',
            'c'=>'Курс подойдет любому новичку, который до этого ни разу не работал с графическими редакторами.',
            'd'=>['Работать в Blender.','Моделировать 3D-объекты.','Создавать анимацию и симуляцию.','Работать с текстурами и материалами.','Выстраивать освещение сцены.','Рендерить проекты.']],
        8=> ['a'=>'After Effects – профессиональная программа для создания анимации и визуальных эффектов. С её помощью дизайнеры создают яркие рекламные ролики, титры и заставки. Функционал программы позволяет реализовать любую творческую задумку. Именно поэтому она так востребована у motion-дизайнеров и у всех, кто работает с видео и компьютерной графикой.',
            'b'=>'На курсе вы изучите основы After Effects и научитесь создавать креативные анимационные проекты: заставки, рекламные ролики, титры.',
            'c'=>'Курс подойдет любому новичку в области motion-дизайна.',
            'd'=>['Разбираться в motion-дизайне.','Работать в After Effects.','Анимировать объекты.','Создавать спецэффекты.','Редактировать видео.','Решать сложные задачи.']],


]
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
<div class="bradcam_area bradcam_bg_2">
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
                                <img width="100%" height="100%" style="position: relative;  border-radius: 5px" src="{{URL::asset('images/m-'.$_GET['id'].'.jpg')}}" alt="">
                            </div>
                            <div class="jobs_conetent">
                                <h4>{{$get}}</h4>
                                <div class="links_locat d-flex align-items-center">
                                    <div class="location">
                                        <p> <i class="fa fa-money"></i> {{$get2}} ₽</p>
                                    </div>
                                    <div class="location">
                                        <p> <i class="fa fa-clock-o"></i> {{$get3}} недель</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="descript_wrap white-bg">
                    <div class="single_wrap">
                        <h4>Описание модуля</h4>
                        <p>{{$mas[$a]['a']}}</p>
                        <p>{{$mas[$a]['b']}}</p>
                    </div>
                    <div class="single_wrap">
                        <h4>Предварительные требования</h4>
                        <p>{{$mas[$a]['c']}}</p>
                    </div>
                    <div class="single_wrap">
                        <h4>Вы научитесь</h4>
                        <ul>
                            @foreach($mas[$a]['d'] as $el)
                            <li>{{$el}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="job_location_wrap">
                    <div class="job_lok_inner">
                        <img width="110%" style="position: relative; top:-1.7vh; left:-1.1vw; border-radius: 5px" src="{{URL::asset('images/m-'.$_GET['id'].'.jpg')}}" alt="">


                    </div>
                </div>


                <div class="job_sumary">
                    <div class=" pod">
                        <a style="margin-top: 5%;" href="{{route('cart', ['cart'=>$_GET['id']])}}" class="boxed-btn3"><i class="fa fa-shopping-basket"></i> В корзину</a>
                        <h3 style="margin-top: 5%;margin-bottom: 5%;">{{$get2}} ₽</h3>
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

