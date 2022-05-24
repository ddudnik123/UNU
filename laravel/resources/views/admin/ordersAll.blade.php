@extends('adminlte::page')
@section('css')
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th style="width: 10%">id</th>
            <th style="width: 20%">Заказчик</th>
            <th style="width: 30%">Описание</th>
            <th style="width: 10%">Цена</th>
            <th style="width: 20%">Статус</th>
            <th style="width: 10%">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->customer->name}}</td>
                <td>{{$task->name}}</td>
                <td>{{$task->rate}}</td>
                <td>{{$task->status->name}}</td>
                <td>
                    <form class='card-title' method=get
                          action="{{route('admin.orderShow', $task->id)}}" style="margin:2px;">
                        @csrf
                        <button class="btn btn-info btn-xs" type="submit">
                            <i class="fas fa-eye"></i>
                        </button>
                    </form>

                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
@endsection
