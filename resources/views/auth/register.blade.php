@extends('layouts.layout')
@section('title', 'Регистрация')
@section('content')
<div class="container">
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
    <form class="reg m-auto pb-5" method="post" action="{{ route('auth.store') }}">
        @csrf
        <h2 class="pt-4 form-h text-center mb-4">Регистрация</h2>
        <div class="form-inputs d-flex flex-column">
            <input name="name" placeholder="Имя" class="form-input mb-3 m-auto" required>
            <input name="number" data-phone-pattern placeholder="+7 (999) 000-00-00" class="form-input mb-3 m-auto" data-phone-pattern required>
            <input type="email" name="email" placeholder="Почта" class="form-input mb-3 m-auto" required>
            <input type="password" name="password" id="password" placeholder="Пароль" class="form-input mb-3 m-auto" required>
            <input type="password" id="password-confirmation" name="password_confirmation" placeholder="Пароль" class="form-input mb-4 m-auto" required>
            <button class="m-auto mb-5" type="submit">Зарегистрироваться</button>
        </div>
    </form>
</div>
@endsection

