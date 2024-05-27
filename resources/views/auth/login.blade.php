@extends('layouts.layout')
@section('title', 'Вход')
@section('content')
    <div class="container mb-5">
        <div class="container w-50 mt-2">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <form class="reg m-auto mb-5" method="post" action="{{ route('auth.login') }}">
            @csrf
            <h2 class="pt-4 form-h text-center mb-4">Вход</h2>
            <div class="form-inputs d-flex flex-column">
                <input type="email" name="email" placeholder="Почта" class="form-input mb-3 m-auto" required>
                <input type="password" name="password" id="password" placeholder="Пароль" class="form-input mb-3 m-auto" required>
                <p class="text-center">Нет аккаунта? <a href="/register">зарегистрироваться</a></p>
                <button class="m-auto" style="margin-bottom: 122px!important;" type="submit">Войти</button>
            </div>
        </form>
    </div>
@endsection

