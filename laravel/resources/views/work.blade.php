@extends('adminlte::page')
@section('css')
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
@endsection
@section('body')
    <div class="header">
        <div class="container">
            <div class="main-menu">
                <ul class="list">
                    @if(!$user)
                        <a href="/login">
                            <li class="item">Вход</li>
                        </a>
                        <a href="{{ route('register') }}">
                            <li class="item">Регистрация</li>
                        </a>
                    @else
                        <li> {{$user->name}}</li>
                        <li id="logout" style="cursor: pointer">выход</li>
                        <form action="{{ route('logout') }}" method="post" id="logoutForm">
                            @csrf
                        </form>
                    @endif
                </ul>
            </div>
            <div class="content">
                <div class="leftSide"><img class="logo" src="https://unu.im/i/unu_symbol.svg" alt="#">
                    <div class="bottom"><h1 class="title">
                            Заработок на выполнении<br>заданий в интернете</h1>
                        <p class="txt">Зарабатывайте, выполняя простые задания: написание комментариев, общение на форумах, продвижение в соц. сетях.</p>
                        <ul class="btn-list">
                            <a href="{{route('task.search')}}">
                                <li class="btn-item-white">Поиск заказов</li>
                            </a></ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="progress">
        <div class="container">
            <ul class="list">
                <li class="item">
                    <div class="leftSide"><img src="https://unu.im/i/iconfinder_choose.svg" alt="#"></div>
                    <div class="rightSide">
                        <div class="title">433,158</div>
                        активных пользователей
                    </div>
                </li>
                <li class="item">
                    <div class="leftSide"><img src="https://unu.im/i/iconfinder_checklist.svg" alt="#"></div>
                    <div class="rightSide">
                        <div class="title">11,867,917</div>
                        выполнено заданий
                    </div>
                </li>
                <li class="item">
                    <div class="leftSide"><img src="https://unu.im/i/iconfinder_rating.svg" alt="#"></div>
                    <div class="rightSide">
                        <div class="title">719,646</div>
                        положительных отзывов
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="process">
        <div class="container">
            <div class="content">
                <div class="leftSide"><img src="https://unu.im/files/image.svg" alt="#"></div>
                <div class="rightSide"><p class="title">Как работает UNU?</p>
                    <ul class="list">
                        <li class="item">Регистрируетесь на сайте за 30 секунд</li>
                        <li class="item">Добавляете задание и оплачиваете необходимое количество работ</li>
                        <li class="item">Получаете результат и проверяете выполненные работы</li>
                    </ul>
                    <a href="{{route('task.fastOrder')}}">
                        <div class="btn">Начнем?</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="services">
        @if(!$user)
            <button><a style="color:white;" href="{{route('register')}}">Начать работу</a></button>
        @else
            <button><a style="color:white;" href="{{route('task.search')}}">Начать работу</a></button>
        @endif
        <a href="#"><p>Полный список услуг</p></a></div>
    <footer class="footer">
        <div class="container">
            <div class="top">
                <div class="leftSide">
                    <div class="logoWrapper"><img src="https://unu.im/i/unu-logo3-1.svg" alt="#"></div>
                    <div class="lists">
                        <ul class="list">
                            @if(!$user)
                                <a href="{{route('login')}}"><li class="item">Мой кабинет</li></a>
                            @else
                                <a href="{{route('customer.profile')}}"><li class="item">Мой кабинет</li></a>
                            @endif

                            <a href="#">
                                <li class="item">Контакты</li>
                            </a><a href="#">
                                <li class="item">Служба поддержки</li>
                            </a></ul>
                        <ul class="list"><a href="#">
                                <li class="item">Партнёрская программа</li>
                            </a><a href="#">
                                <li class="item">Инфо</li>
                            </a><a href="#">
                                <li class="item">API</li>
                            </a></ul>
                    </div>
                </div>
                <div class="rightSide">
                    <ul class="list"><a href="#">
                            <li class="item">Vk</li>
                        </a><a href="#">
                            <li class="item">Telegram</li>
                        </a><a href="#">
                            <li class="item">Instagram</li>
                        </a></ul>
                </div>
            </div>
            <div class="bottom"><p>© unu.im. Сайт может содержать материалы для лиц старше 18 лет.</p>
                <p>Используя сайт вы полностью и безоговорочно принимаете оферту и политику обработки персональных
                    данных.
                    Точка №777: 0.002035</p></div>
        </div>
@endsection
        @section('js')
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
            <script>
                $( "#logout" ).click(function() {
                    $( "#logoutForm" ).submit();
                });
            </script>
@endsection
