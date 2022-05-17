@extends('adminlte::page')
@section('css')
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
@endsection
@section('body')
<div></div>
<div class="register auth">
    <div class="container">
        <div class="content">
            <div class="top"><p>Авторизация</p></div>
            <div class="bottom">
                <form method="post" action="{{ route('login') }}">
                    @csrf
 {{--                   @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible error">
                            <ul class="list-unstyled">
                                @foreach($errors->all() as $error)
                                    <div class="error"><li><i style="color:red"></i> {{$error}} </li></div>
                                @endforeach

                            </ul>
                        </div>
                    @endif--}}

                    <label for="email"><p class="email-txt">Введите имя или email</p>
                        <input type="text" name="email" id="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </label>
                    <label for="pass"><p class="email-txt">Введите свой пароль</p>
                        <input type="password" name="password" id="pass"></label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <button class="btn-next" type="submit"> {{ __('Log in') }}</button>
                    <p class="offer">Регистрируясь, вы принимаете Договор-оферту</p>
                    <a href="{{route('password.request')}}">Забыли пароль?</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
