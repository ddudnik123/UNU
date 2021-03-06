@extends('layouts.front')
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
                    </a><a href="{{route('executor.dashboard', $user->id)}}">
                        <li class="item btn-item-header">Кабинет исполнителя</li>
                    </a></ul>
            </div>
        </div>
    </div>
    <form class="taskAdd" action="{{route('task.update')}}" method=post>
        @csrf
        {{method_field('put')}}
        <div class="container">

                <div class="content"><p class="main-title">Изменить задачу</p>
                    <div class="taskAdd-wrapper">
                        <div class="leftSide">
                            <ul class="list">
                                <li class="item"><p class="title">Название задачи</p>
                                    <p class="post-title">Например: «Написать комментарий про тигров»</p><label><input
                                            type="text" name="name" value="{{old('name')??$task->name}}">
                                        @error('name')
                                        <span class="invalid-feedback error" role="alert">
                                        <strong style="color:red !important;">{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </label></li>
                                <li class="item"><p class="title">Ссылка</p>
                                    <p class="post-title">Ссылка, необходимая для выполнения задания.</p><label><input
                                            type="text" placeholder="https://" name="link" value="{{old('link')??$task->link}}">
                                        @error('link')
                                        <span class="invalid-feedback" role="alert">
                                        <strong style="color:red !important;">{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </label>
                                    <!--                                <label for="task_no_show_link"
                                                                                                                               style="cursor: pointer;font-size: 14px;">
                                                                        <input
                                                                            type="checkbox" name="task_no_show_link" value="1" id="task_no_show_link"
                                                                            placeholder=""> Скрывать ссылку до взятия в работу исполнителем + запретить переход
                                                                        по клику</label></li>-->
                                <li class="item"><p class="title">Задание</p>
                                    <p class="post-title">Подробно и понятно опишите, что и где именно должен сделать
                                        исполнитель</p><label for="1"><textarea class="textarea" id="1"
                                                                                cols="30" rows="10" name="description" value="{{old('description')??$task->description}}">{{old('description')??$task->description}}
                                    </textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                        <strong style="color:red !important;">{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </label></li>

                                <li class="item"><p class="title">Что нужно для отчёта</p>
                                    <p class="post-title">Опишите, что нужно предоставить исполнителю в отчёте.<br>Если требуете
                                        скриншот, обязательно отметьте соответствующую галочку ниже.</p><label for="2"><textarea
                                            name="reportDescription" class="textarea" id="2" cols="30" rows="10" value="{{old('reportDescription')??$task->reportDescription}}">{{old('reportDescription')??$task->reportDescription}}</textarea>
                                        @error('reportDescription')
                                        <span class="invalid-feedback" role="alert">
                                        <strong style="color:red !important;">{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </label></li>
                                <li class="item"><p class="title">Тариф</p><label><select class="select">
                                            <option class="option">-Лайки- 1р</option>
                                        </select></label></li>
                                <li class="item"><p class="title">Тариф</p>
                                    <p class="post-title">Сколько вы готовы платить за 1 выполнение задания. Не может быть
                                        меньше значения по тарифу.</p><label><input type="text" name="rate" value="{{old('rate')??$task->rate}}">
                                        @error('rate')
                                        <span class="invalid-feedback" role="alert">
                                        <strong style="color:red !important;">{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </label> <label
                                        for="task_no_show_link2" style="cursor: pointer;font-size: 14px;">

                                        <input type="checkbox" name="task_no_show_link" value="1" id="task_no_show_link2"
                                               placeholder=""> Требовать от исполнителя скриншот (+1 руб)</label></li>
                            </ul>
                            <a href="#">
                                <button class="btn-create" type="submit">Изменить</button>
                            </a></div>
                        <input type="hidden" name="categorie_id" value="{{$task->categorie->id}}">
                        <input type="hidden" name="task_id" value="{{$task->id}}">
                    </div>
                </div>
        </div>
    </form>
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
    </body>

@endsection
