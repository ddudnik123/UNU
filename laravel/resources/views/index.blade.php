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
                        <form action="{{ route('logout') }}" method="post" >
                            @csrf
                            <li>
                                <button class="" style="background:rgba(1,1,1,0);  cursor:pointer; color:white; font-size: 1em; border-color:rgba(1,1,1,0);"
                                type="submit">
                                <span >&nbsp&nbspвыход</span>
                                </button>
                            </li>
                        </form>
                    @endif
                </ul>
            </div>
            <div class="content">
                <div class="leftSide"><img class="logo" src="https://unu.im/i/unu_symbol.svg" alt="#">
                    <div class="bottom"><h1 class="title">Биржа<br>Микрозадач</h1>
                        <p class="txt">В области крауд-маркетинга и социального продвижения.</p>
                        <ul class="btn-list">
                            @if(!$user)
                                <a href="{{route('register')}}">
                                    <li class="btn-item-white">Заказчику</li>
                                </a>
                                <a href="{{route('register')}}">
                                    <li class="btn-item">Исполнителю</li>
                                </a></ul>
                            @else
                                <a href="{{route('customer.profile')}}">
                                    <li class="btn-item-white">Заказчику</li>
                                </a>
                                <a href="{{route('task.search')}}">
                                    <li class="btn-item">Исполнителю</li>
                                </a></ul>
                        @endif
                    </div>
                </div>
                <div class="rightSide">
                    <ul class="list"><a href="#">
                            <li class="item">Наполнение сайтов: комментарии, отзывы, форумы, доски объявлений</li>
                        </a><a href="#">
                            <li class="item">Продвижение в социальных сетях: подписчики в группы, лайки, репосты</li>
                        </a><a href="#">
                            <li class="item">Продвижение приложений: установки и действия</li>
                        </a><a href="#">
                            <li class="item">Любые произвольные задачи, которые нужно выполнять на регулярной основе
                            </li>
                        </a></ul>
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
                    <a href="{{route('register')}}">
                        <div class="btn">Регестрируемся?</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="info-block">
        <div class="container">
            <div class="content">
                <div class="rightSide"><p class="title">Заказчику</p>
                    <ul class="list"><a href="#">
                            <li class="item">Низкие цены — от 1 руб за выполнение самого простого задания</li>
                        </a><a href="#">
                            <li class="item">Только живые люди: наши исполнители не роботы, каждый из них прошёл верификацию
                            </li>
                        </a><a href="#">
                            <li class="item">Скорость: возможность получать сотни и даже тысячи выполнений в сутки</li>
                        </a><a href="#">
                            <li class="item">Гарантия: вы платите только за выполненную работу</li>
                        </a></ul>
                </div>
                <div class="leftSide"><p class="title">Исполнителю</p>
                    <ul class="list"><a href="#">
                            <li class="item">Делитесь постами, ставьте «лайки», вступайте в группы в социальных сетях</li>
                        </a><a href="#">
                            <li class="item">Зарабатывайте на заданиях биржи комментариев, комментируя материалы на сайтах и
                                публикуя контент
                            </li>
                        </a><a href="#">
                            <li class="item">Зарабатывайте, общаясь на форумах, просматривая видео или устанавливая приложения
                            </li>
                        </a><a href="#">
                            <li class="item">Работайте в любое удобное время</li>
                        </a></ul>
                </div>
            </div>
        </div>
    </div>
    <div class="services">
        <button>Начать работу</button>
        <a href="#"><p>Полный список услуг</p></a></div>
    <footer class="footer">
        <div class="container">
            <div class="top">
                <div class="leftSide">
                    <div class="logoWrapper"><img src="https://unu.im/i/unu-logo3-1.svg" alt="#"></div>
                    <div class="lists">
                        <ul class="list"><a href="#">
                                <li class="item">Мой кабинет</li>
                            </a><a href="#">
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
                <p>Используя сайт вы полностью и безоговорочно принимаете оферту и политику обработки персональных данных.
                    Точка №777: 0.002035</p></div>
        </div>
@endsection
