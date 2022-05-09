<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/app.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.min.css">
    <title>unu.im</title></head>
<body>
<div></div>
<div class="register auth">
    <div class="container">
        <div class="content">
            <div class="top"><p>Авторизация</p></div>
            <div class="bottom">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <label for="email"><p class="email-txt">Введите имя или email</p>
                        <input type="text" name="email" id="email">
                    </label>
                    <label for="pass"><p class="email-txt">Введите свой пароль</p>
                        <input type="password" name="password" id="pass"></label>
                    <button class="btn-next" type="submit"> {{ __('Log in') }}</button>
                    <p class="offer">Регистрируясь, вы принимаете Договор-оферту</p>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
