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
                    </a><a href="{{route('customer.orders', $user->id)}}">
                        <li class="item">Мои заказы</li>
                    </a><a href="#">
                        <li class="item">Сообщения</li>
                    </a><a href="#">
                        <li class="item btn-item-header">Кабинет исполнителя</li>
                    </a></ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="search">
            <div class="content">
                <div class="top"><p class="title">Поиск задач</p>
                    <p class="post-title">На этой странице отображаются все доступные вам задания для работы. Чтобы узнать
                        подробности задания, нажмите на заголовок.</p></div>
                <div class="bottom">
                    <ul class="jobs-list">
                        <div class="top">
                            <div class="cell">Название</div>
                            <div class="cell">Тип</div>
                            <div class="cell">Оплата</div>
                            <div class="cell">Заказчик</div>
                        </div>
                        @foreach($tasks as $task)
                            <li class="item">
                                <div class="cell"><a href="{{route('task.show', $task->id)}}">{{$task->name}}</a></div>
                                <div class="cell">{{$task->categorie->name}}</div>
                                <div class="cell">{{$task->rate}}</div>
                                <div class="cell"><a href="#">{{$task->customer->name}}</a></div>
                            </li>
                        @endforeach
                    </ul>
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
                        <ul class="list">
                            <a href="{{route('customer.profile')}}">
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

