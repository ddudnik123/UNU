@extends('layouts.front')
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
                    </a><a href="{{route('executor.dashboard', $user->id)}}">
                        <li class="item btn-item-header">Кабинет исполнителя</li>
                    </a></ul>
            </div>
        </div>
    </div>

    <div class="usr">
        <div class="container"><p class="title">Профиль {{$user->name}}</p>
            <div class="content">
                <div class="leftSide">
                    <div class="usrCard">
                        <div class="leftSide">
                            <div class="imgWrapp"><img src="https://unu.im/i/avatar-male.svg" alt="#"></div>
                            @if(Auth::user()->id == $user->id)
                            <div class="bottom"><a href="#"><p>Настройки аккаунта</p></a></div>
                            @endif
                        </div>
                        <div class="rightSide">
                            <ul class="table">
                                <li class="item">
                                    <div class="leftSide">На сайте:</div>
                                    <div class="rightSide">c {{$user->created_at}}</div>
                                </li>
                                <li class="item">
                                    <div class="leftSide">Был онлайн:</div>
                                    <div class="rightSide">Сейчас на сайте</div>
                                </li>
                                <li class="item">
                                    <div class="leftSide">Выполнено заданий:</div>
                                    <div class="rightSide">0</div>
                                </li>
                                <li class="item">
                                    <div class="leftSide">Заданий в работе:</div>
                                    <div class="rightSide">0</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="rightSide">
                    <div class="emailNot">Email
                        @if($user->email_verified_at)
                            подтверждён
                        @else
                            не подтверждён
                        @endif
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
