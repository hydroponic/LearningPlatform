<?php
$config = [
    'host' => '127.0.0.1',
    'name' => 'laravel',
    'user' => 'root',
    'password' => '',
];

$db = new PDO ('mysql:host=' . $config['host'] . ';dbname=' . $config['name'], $config['user'], $config['password']);


session_start();

$id = (int) $_GET['id'];
if ($id < 1) {
    header ('location: admin.php');
}

$testId = $id;
if (!isset($_SESSION['test_id']) || $_SESSION['test_id'] != $testId) {
    $_SESSION['test_id'] = $testId;
    $_SESSION['test_score'] = 0;
}

$res = $db->query("SELECT * FROM tests WHERE id = {$testId}");
$row = $res->fetch();
$testTitle = $row['title'];

if (isset($_POST['q']))
$questionNum = (int) $_POST['q'];
if (empty($questionNum)) {
    $questionNum = 0;
}
$questionNum++;
$questionStart = $questionNum - 1;

$res = $db->query("SELECT count(*) AS count FROM questions WHERE test_id = {$testId}");
$row = $res->fetch();
$questionCount = $row['count'];
if (isset($_POST['answer_id']))
$answerId = (int) $_POST['answer_id'];
if (!empty($answerId)) {
    $res = $db->query("SELECT * FROM answers WHERE id = {$answerId}");
    $row = $res->fetch();
    $score = 0;
    $score = $row['score'];
    $_SESSION['test_score'] += $score;
}

$showForm = 0;
if ($questionCount >= $questionNum) {
    $showForm = 1;

    $res = $db->query("SELECT * FROM questions WHERE test_id = {$testId} LIMIT {$questionStart}, 1");
    $row = $res->fetch();
    $question = $row['question'];
    $questionId = $row['id'];

    $res = $db->query("SELECT * FROM answers WHERE question_id = {$questionId}");
    $answers = $res->fetchAll();
} else {
    $score = $_SESSION['test_score'];

    $res = $db->query("SELECT * FROM results WHERE test_id = {$testId} AND score_min <= {$score} AND score_max >= {$score}");
    $row = $res->fetch();
    $result = $row['result'];
}
?>
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

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/short.ico')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->

<!-- header-end -->

<!-- slider_area_start -->

<!-- slider_area_end -->
<div class="container">
    <?php if ($showForm) { ?>


        <form action="{{route('quiz', ['id'=>$testId])}}" method="post">
            @csrf
            <input type="hidden" name="q" value="<?php echo $questionNum; ?>">

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center mt-5">
                        <p>Вопрос <?php echo $questionNum . ' из ' . $questionCount; ?></p>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header">
                            <h3><?php echo $question;?></h3>
                        </div>
                        <div class="card-body">
                            <?php foreach ($answers AS $answer) { ?>
                                <div>
                                    <input type="radio" name="answer_id" required value="<?php echo $answer['id']; ?>"> <?php echo $answer['answer']; ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <?php if ($questionCount == $questionNum) { ?>
                            <button type="submit" class="btn btn-success">Получить результат</button>
                        <?php } else { ?>
                            <button type="submit" class="btn btn-primary">Дальше</button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </form>
    <?php } else { ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3>Ваш результат</h3>
                    </div>
                    <div class="card-body">
                        <div class="result-print">
                            <?php echo 'Оценка: ', $result; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><div class="text-center mt-3">
            <a href="{{route('home')}}"><button type="submit" class="btn btn-primary">На главную</button></a></div>
       <?php session_destroy() ?>
    <?php } ?>
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
                            <li><a href="contact.php">Контакты </a></li>

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
