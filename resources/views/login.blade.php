<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-form {
            max-width: 400px;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        }
        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 3px;
        }
        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }
        .login-form input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .login-form input[type="submit"]:hover {
            background-color: #111;
        }
        .login-form p {
            text-align: center;
            margin-top: 20px;
        }
        .login-form a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .log in-form a:hover {
            color: #111;
        }
    </style>
</head>
<body>
<div class="login-container">
    <form action='{{route('login')}}' method="post" class="login-form">
        @csrf
        <h2>ВХОД</h2>
        <input name="email" type="text" placeholder="Email" required>
        <input name="password" type="password" placeholder="Password" required />
        <div class="container">
            <div class="mt-5">
                @if($errors->any())
                    <div class="col-12">
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        <input type="submit" value="Войти" />
        <p>или <br> <a href="{{route('register')}}">Зарегестрироваться</a>
            <br><br> <a href="{{route('home')}}">Назад</a>
        </p>
    </form>
</div>
</body>
</html>
