@extends('adminlte::page')
@section('css')
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
@endsection
@section('body')
    <div class="headerAdmin">
        <div class="container">
            <div class="leftSide"><a href="/">
                    <div class="logoWrapper"><img src="https://unu.im/i/unu-logo1.svg" alt="#"></div>
                </a></div>
            <div class="rightSide">
                <ul class="list"><a href="{{route('task.fastOrder')}}">
                        <li class="item">Добавить заказ</li>
                    </a><a href="#">
                        <li class="item">Мои заказы</li>
                    </a><a href="#">
                        <li class="item">Сообщения</li>
                    </a><a href="#">
                        <li class="item btn-item-header">Кабинет исполнителя</li>
                    </a></ul>
            </div>
        </div>
    </div>
    <div class="fastOrderC">
        <div class="container">
            <div class="content"><p class="title">Что хотите заказать?</p>
                <div class="navigation">Мои заказы > Добавить заказ</div>
                <ul class="list"><a href="#">
                        <li class="item">
                            <div class="leftSide"><img src="https://unu.im/i/conversation.svg" alt="#"></div>
                            <div class="rightSide"><span>Комментарии</span>, отзывы, наполнение форумов</div>
                        </li>
                    </a><a href="#">
                        <li class="item">
                            <div class="leftSide"><img src="https://unu.im/i/rotation.svg" alt="#"></div>
                            <div class="rightSide"><span>Подписчики / фолловеры</span> в социальных сетях</div>
                        </li>
                    </a><a href="#">
                        <li class="item">
                            <div class="leftSide"><img src="https://unu.im/i/like2.svg" alt="#"></div>
                            <div class="rightSide"><span>Лайки, репосты,</span> голосование, активность</div>
                        </li>
                    </a><a href="#">
                        <li class="item">
                            <div class="leftSide"><img src="https://unu.im/i/like2.svg" alt="#"></div>
                            <div class="rightSide"><span>Лайки, репосты,</span> голосование, активность</div>
                        </li>
                    </a><a href="#">
                        <li class="item">
                            <div class="leftSide"><img src="https://unu.im/i/like2.svg" alt="#"></div>
                            <div class="rightSide"><span>Лайки, репосты,</span> голосование, активность</div>
                        </li>
                    </a></ul>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="top">
                <div class="leftSide">
                    <div class="logoWrapper"><img src="https://unu.im/i/unu-logo3-1.svg" alt="#"></div>
                    <div class="lists">
                        <ul class="list"><a href="{{route('customer.profile')}}">
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
