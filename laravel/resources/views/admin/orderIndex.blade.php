@extends('adminlte::page')
@section('css')
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
@endsection
@section('content')


    <div class="taskAdd">
        <div class="container">
            <div class="content">
                <div class="taskAdd-wrapper">
                    <div class="leftSide">
                        <ul class="list">

                            <li class="item"><p class="title">Название задачи</p>
                                <div class="card-header">
                                    <h5> {{$task->name}}</h5>
                                </div>
                            </li>

                            <li class="item"><p class="title">Ссылка</p>
                                <div class="card-header">
                                    <h5> {{$task->link}}</h5>
                                </div>
                            </li>

                            <li class="item"><p class="title">Задание</p>
                                <div class="card-header">
                                    <h5> {{$task->description}}</h5>
                                </div>
                            </li>

                            <li class="item"><p class="title">Что нужно для отчёта</p>
                                <div class="card-header">
                                    <h5> {{$task->reportDescription}}</h5>
                                </div>
                            </li>

                            <li class="item"><p class="title">Цена</p>
                                <div class="card-header">
                                    <h5> {{$task->rate}}</h5>
                                </div>
                            </li>
                        </ul>
                    <form action="{{route("admin.taskApprove", $task->id)}}" method="post">
                        @csrf
                        <button type="submit" class="btn-create btn-primary" >Одобрить</button>
                    </form>

                    <form action="{{route("admin.taskEdit", $task->id)}}">
                        <button type="submit" class="btn-create btn-primary">Изменить</button>
                    </form>

                    <form action="{{route("admin.taskBlock", $task->id)}}" method="post">
                        @csrf
                        <button type="submit" class="btn-create btn-primary">Блокировать</button>
                    </form>
                    </div>

                </div>
            </div>
        </div>

@endsection
