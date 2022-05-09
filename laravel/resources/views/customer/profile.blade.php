@extends('adminlte::page')
@section('css')
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
@endsection
@section('body')
    <div class="headerAdmin">
        <div class="container">
            <div class="leftSide">
                <a href="/">
                    <div class="logoWrapper"><img src="https://unu.im/i/unu-logo1.svg" alt="#"></div>
                </a></div>
            <div class="rightSide">
                <ul class="list">
                    <a href="{{route('task.fastOrder')}}"><li class="item">Добавить заказ</li></a>
                    <a href="{{route('customer.orders', $user->id)}}"><li class="item">Мои заказы</li>
                    </a><a href="#">
                        <li class="item">Сообщения</li>
                    </a><a href="#">
                        <li class="item btn-item-header">Кабинет исполнителя</li>
                    </a></ul>
            </div>
        </div>
    </div>
    <div class="cabinet">
        <div class="container">
            <div class="content"><p class="title">Личный кабинет заказчика</p>
                <div class="flex">
                    <div class="leftSide">
                        <div class="personal-area-menu"><p class="name">Привет, {{$user->name}}</p>
                            <ul class="list">
                                <a href="{{route('task.fastOrder')}}">
                                    <li class="item">Добавить заказ</li>
                                </a>
                                <a href="{{route('customer.orders', $user->id)}}">
                                    <li class="item">Мои заказы</li>
                                </a>
                                <a href="#">
                                    <li class="item">Списки исполнителей</li>
                                </a><a href="#">
                                    <li class="item">Моя страница</li>
                                </a><a href="#">
                                    <li class="item">Сообщения</li>
                                </a><a href="#">
                                    <li class="item">Финансы</li>
                                </a><a href="#">
                                    <li class="item">Настройки</li>
                                </a><a href="#">
                                    <li class="item">Партнёрская программа</li>
                                </a><a href="#">
                                    <li class="item">Служба поддержки</li>
                                </a><a href="#">
                                    <li class="item">Кабинет исполнителя</li>
                                </a></ul>
                        </div>
                        <div class="personal-area-news"><p class="news-title">Новости проекта</p>
                            <ul class="list"><a href="#">
                                    <li class="item"><span>30.10</span> Задержки в выплатах на Payeer</li>
                                </a><a href="#">
                                    <li class="item"><span>30.10</span> Новость номер 2</li>
                                </a><a href="#">
                                    <li class="item"><span>30.10</span> Новость номер 3</li>
                                </a></ul>
                            <a href="#"><p class="other-news">Другие новости</p></a></div>
                    </div>
                    <div class="rightSide">
                        <div class="level"><p class="your-level">У вас 0 баллов, ваш уровень заказчика <span>Новичок</span>
                            </p></div>
                        <div class="personal-area__row">
                            <div class="balance"><p>Ваш баланс</p><span>0 рублей</span>
                                <ul class="list">
                                    <li class="item"><a href="#">
                                            <button>+ Поплнить</button>
                                        </a></li>
                                    <li class="item"><a href="#">
                                            <button>История</button>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="bonus"><p>У вас сейчас</p><span>0 печенек 🍪</span>
                                <ul class="list">
                                    <li class="item"><a href="#">
                                            <button>+ Получить печеньки</button>
                                        </a></li>
                                    <li class="item"><a href="#">
                                            <button>Что это?</button>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="personal-area__row">
                            <div class="invite"><p>Приглашайте друзей и получайте</p><span>25% комиссии</span>
                                <ul class="list">
                                    <li class="item"><a href="#">
                                            <button>Подробнее</button>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="pro"><p>Получите особый статус</p><span>PRO-аккаунт</span>
                                <ul class="list">
                                    <li class="item"><a href="#">
                                            <button>Подробнее</button>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    </footer>
@endsection
