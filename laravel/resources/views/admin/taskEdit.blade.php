@extends('adminlte::page')
@section('css')
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
@endsection
@section('content')

<form class="taskAdd" action="{{route('admin.taskUpdate')}}" method="post">
    @csrf
    {{method_field('put')}}
    <div class="container">

        <div class="content"><p class="main-title">Изменить заказ</p>
            <div class="taskAdd-wrapper">
                <div class="leftSide">
                    <ul class="list">
                        <li class="item"><p class="title">Название задачи</p>
                          <label><input
                                    type="text" name="name" value="{{old('name')??$task->name}}">
                                @error('name')
                                <span class="invalid-feedback error" role="alert">
                                        <strong style="color:red !important;">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label></li>
                        <li class="item"><p class="title">Ссылка</p>
                         <label><input
                                    type="text" placeholder="https://" name="link" value="{{old('link')??$task->link}}">
                                @error('link')
                                <span class="invalid-feedback" role="alert">
                                        <strong style="color:red !important;">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>
                           <li class="item"><p class="title">Задание</p>
                   <label for="1">
                       <textarea class="textarea" id="1" cols="30" rows="10" name="description" value="{{old('description')??$task->description}}">{{old('description')??$task->description}}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong style="color:red !important;">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label></li>

                        <li class="item"><p class="title">Что нужно для отчёта</p>
                         <label for="2"><textarea
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
                       <label><input type="text" name="rate" value="{{old('rate')??$task->rate}}">
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
                        <button class="btn-create" type="submit" onclick="history.go(-2);">Изменить</button>
                    </a></div>
                <input type="hidden" name="categorie_id" value="{{$task->categorie->id}}">
                <input type="hidden" name="task_id" value="{{$task->id}}">
            </div>
        </div>
    </div>
</form>

@endsection
