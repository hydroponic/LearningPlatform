
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/short.png')}}">
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
        .cll {
            margin-left:25%;
            margin-top:8%;
        }
    </style>


    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oprosnik.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
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

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body class="slider_bg_1">
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
<!-- header-end -->

<div class="col-md-6 cll">
    <form action="{{route('admin', ['id'=>$_GET['id']])}}" method="post">
        @csrf
        <div class="card mt-4">
            <div class="card-header">
                <h2 class="text-center">Добавление теста</h2>
            </div>

            <div class="card-body">
                <div>
                    <label for="title" class="form-label">Название теста</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mt-5 text-center">
                    <h4>Добавление вопросов</h4>
                </div>
                <div class="questions">
                    <div class="question-items">
                        <div class="mt-4">
                            <label for="question_1" class="form-label">Вопрос #1</label>
                            <input type="text" name="question_1" id="question_1" class="form-control">
                            <div class="answers">
                                <div class="answer-items">
                                    <div>
                                        <label for="answer_text_1_1" class="form-label">Ответ #1</label>
                                        <input type="text" name="answer_text_1_1" id="answer_text_1_1" class="form-control">
                                    </div>
                                    <div class="mt-2">
                                        <label for="answer_score_1_1" class="form-label">Балл за ответ #1</label>
                                        <input type="text" name="answer_score_1_1" id="answer_score_1_1" class="form-control">
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="button" class="btn btn-light border addAnswer" data-question="1" data-answer="1">Добавить вариант ответа</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-primary addQuestion">Добавить вопрос</button>
                    </div>
                </div>

                <div class="mt-5 text-center">
                    <h4>Добавление результатов</h4>
                </div>
                <div class="results">
                    <div class="result-items">
                        <div class="mt-4">
                            <div class="">
                                <label for="result_1" class="form-label">Результат #1</label>
                                <textarea name="result_1" id="result_1" class="form-control"></textarea>
                            </div>
                            <div class="mt-2">
                                <label for="result_score_min_1" class="form-label">Балл (от) #1</label>
                                <input type="text" name="result_score_min_1" id="result_score_min_1" class="form-control">
                            </div>
                            <div class="mt-2">
                                <label for="result_score_max_1" class="form-label">Балл (до) #1</label>
                                <input type="text" name="result_score_max_1" id="result_score_max_1" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-primary addResult" >Добавить результат</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4 mb-4">
            <div class="card-body text-center">
                <button type="submit" class="btn btn-success">Сохранить</button>
            </div>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/add.js"></script>
<script>
    $(function() {

        // Get the form.
        var form = $('#contact-form');

        // Get the messages div.
        var formMessages = $('.ajax-response');

        // Set up an event listener for the contact form.
        $(form).submit(function(e) {
            // Stop the browser from submitting the form.
            e.preventDefault();

            // Serialize the form data.
            var formData = $(form).serialize();

            // Submit the form using AJAX.
            $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
                .done(function(response) {
                    // Make sure that the formMessages div has the 'success' class.
                    $(formMessages).removeClass('error');
                    $(formMessages).addClass('success');

                    // Set the message text.
                    $(formMessages).text(response);

                    // Clear the form.
                    $('#contact-form input,#contact-form textarea').val('');
                })
                .fail(function(data) {
                    // Make sure that the formMessages div has the 'error' class.
                    $(formMessages).removeClass('success');
                    $(formMessages).addClass('error');

                    // Set the message text.
                    if (data.responseText !== '') {
                        $(formMessages).text(data.responseText);
                    } else {
                        $(formMessages).text('Oops! An error occured and your message could not be sent.');
                    }
                });
        });

    });
    let questionNum = 1;
    let resultNum = 1;

    $(document).on('click', '.addAnswer', function() {
        let question = $(this).data('question');
        let answer = $(this).data('answer');
        let answerBlock = $(this).parents('.answers').find('.answer-items');
        answer++;
        $(this).data('answer', answer);

        answerBlock.append(`<div class="divider">
                            <label for="answer_text_${question}_${answer}" class="form-label">Ответ #${answer}</label>
                            <input type="text" name="answer_text_${question}_${answer}" id="answer_text_${question}_${answer}" class="form-control">
                        </div>
                        <div class="mt-2">
                            <label for="answer_score_${question}_${answer}" class="form-label">Балл за ответ #${answer}</label>
                            <input type="text" name="answer_score_${question}_${answer}" id="answer_score_${question}_${answer}" class="form-control">
                        </div>`);
    });
    $('.addQuestion').on('click', function() {
        questionNum++;
        let questionBlock = $('.question-items');

        questionBlock.append(`
                <div class="mt-4">
                    <label for="question_${questionNum}" class="form-label">Вопрос #${questionNum}</label>
                    <input type="text" name="question_${questionNum}" id="question_${questionNum}" class="form-control">
                    <div class="answers">
                        <div class="answer-items">
                        </div>
                        <div class="text-center mt-4">
                            <button type="button" class="btn btn-light border addAnswer" data-question="${questionNum}" data-answer="0">Добавить вариант ответа</button>
                        </div>
                    </div>
                </div>`);
    });
    $(document).on('click', '.addResult', function() {
        resultNum++;
        let resultBlock = $('.result-items');

        resultBlock.append(`
                    <div class="mt-4 divider">
                        <div class="">
                            <label for="result_${resultNum}" class="form-label">Результат #${resultNum}</label>
                            <textarea name="result_${resultNum}" id="result_1" class="form-control"></textarea>
                        </div>
                        <div class="mt-2">
                            <label for="result_score_min_${resultNum}" class="form-label">Балл (от) #${resultNum}</label>
                            <input type="text" name="result_score_min_${resultNum}" id="result_score_min_${resultNum}" class="form-control">
                        </div>
                        <div class="mt-2">
                            <label for="result_score_max_${resultNum}" class="form-label">Балл (до) #${resultNum}</label>
                            <input type="text" name="result_score_max_${resultNum}" id="result_score_max_${resultNum}" class="form-control">
                        </div>
                    </div>`);
    });

</script>
</body>
</html>
