<?php
$config = [
    'host' => '127.0.0.1',
    'name' => 'laravel',
    'user' => 'root',
    'password' => '',

];
$db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['name'], $config['user'], $config['password']);



        $title = trim($_POST['title']);

        $res = $db->prepare("INSERT IGNORE INTO tests (`title`, `theme_id`) VALUES (:title, :theme_id)");
        $res->execute([
            ':title' => $title,
            ':theme_id' => $_GET['id'],
        ]);
        $testId = $db->lastInsertId();

        $questionNum = 1;
        while (isset($_POST['question_' . $questionNum])) {
            $question = trim($_POST['question_' . $questionNum]);
            if (empty($question)) {
                continue;
            }

            $res = $db->prepare("INSERT IGNORE INTO questions (`test_id`, `question`) VALUES (:test_id, :question)");
            $res->execute([
                ':test_id' => $testId,
                ':question' => $question,
            ]);
            $questionId = $db->lastInsertId();

            $answerNum = 1;
            while (isset($_POST['answer_text_' . $questionNum . '_' . $answerNum])) {
                $answer = trim($_POST['answer_text_' . $questionNum . '_' . $answerNum]);
                $score = trim($_POST['answer_score_' . $questionNum . '_' . $answerNum]);
                if (empty($answer)) {
                    continue;
                }

                $res = $db->prepare("INSERT IGNORE INTO answers (`question_id`, `answer`, `score`)
                                    VALUES (:question_id, :answer, :score)");
                $res->execute([
                    ':question_id' => $questionId,
                    ':answer' => $answer,
                    ':score' => $score,
                ]);

                $answerNum++;
            }
            $questionNum++;
        }

        $resultNum = 1;
        while (isset($_POST['result_' . $resultNum])) {
            $result = trim($_POST['result_' . $resultNum]);
            $scoreMin = trim($_POST['result_score_min_' . $resultNum]);
            $scoreMax = trim($_POST['result_score_max_' . $resultNum]);

            $res = $db->prepare("INSERT IGNORE INTO results (`test_id`, `score_min`, `score_max`, `result`)
                                    VALUES (:test_id, :score_min, :score_max, :result)");
            $res->execute([
                ':test_id' => $testId,
                ':score_min' => $scoreMin,
                ':score_max' => $scoreMax,
                ':result' => $result,
            ]);

            $resultNum++;

    }

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Система тестирования</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oprosnik.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/short.ico')}}">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

</head>

<body class="slider_bg_1" style="height:100vh; display: flex; flex-direction: column; align-items: center; justify-content: center;">

    <!-- header-end -->

    <div class="col-md-6 cll">
            <div class="card mt-4">
                <div class="card-header">
                    <h2 class="text-center">Вы успешно добавили тест!</h2>
                </div>

                <div class="card-body" style="display: flex; justify-content: center; align-items: center;">
                    <div>
                        <a href="{{route('home')}}" class="boxed-btn3">
                            На главную
                        </a>
                    </div>
                </div>
            </div>
    </div>



</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
