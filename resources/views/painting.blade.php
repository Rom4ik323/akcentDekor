@extends('layouts.layout')
@section('title', 'Картины')
@section('content')
    <div class="painting-banner" style="background-image: url({{ asset('/img/bg3.png') }});">
        <h2>Картины под заказ и обучение</h2>
    </div>
    <div style="background-color: #252525" class="w-100 learning">
        <h2>Обучение рисунку</h2>
        <div class="row justify-content-center m-auto pb-5" style="width: 80%">
            <div class="card m-4" style="width: 28rem;">
                <img src="{{ asset('/img/scatching.jpg') }}" class="card-img-top" style="width: 100%!important; height: 18vw;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Скетчинг</h5>
                    <p class="card-text">Техника быстрого создания простых рисунков и визуальных заметок.</p>
                    <a href="/picture/order"><button class="card-btn">перейти</button></a>
                </div>
            </div>
            <div class="card m-4" style="width: 28rem;">
                <img src="{{ asset('/img/laern.jpg') }}" class="card-img-top" style="width: 100%!important; height: 18vw;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Личные уроки</h5>
                    <p class="card-text">Обучение академическому рисунку и живописи с нуля за 3, 4, 5 месяцев.</p>
                    <a href="/picture/order"><button class="card-btn">перейти</button></a>
                </div>
            </div>
            <div class="card m-4" style="width: 28rem;">
                <img src="{{ asset('/img/master.jpg') }}" class="card-img-top" style="width: 100%!important; height: 18vw;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Мастер класс</h5>
                    <p class="card-text">Бесплатный мастер-класс по живописи акрилом «Картина в интерьер»</p>
                    <a href="/picture/order"><button class="card-btn">перейти</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 learning">
        <h2 style="color: #252525">Картины в наличии</h2>
        <div class="row justify-content-center m-auto" style="width: 80%">
            @foreach($pictures as $picture)
                <div class="card m-4 text-light text-center" style="width: 18rem;background-color: #252525!important;">
                    <img src="{{ $picture->img_path }}" class="card-img-top" style="width: 100%!important;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title   ">{{ $picture->title }}</h5>
                        <p class="card-title">{{ $picture->price }}₽</p>
                        <a href="/picture/order"><button class="card-btn">перейти</button></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="form" style="background-image: url({{ asset('/img/bg4.jpg') }}); margin-bottom: 175px">
        <div class="form-help">
            <form action="{{route('app.store')}}" method="POST">
                @csrf
                <h2 class="pt-4 form-h">картина под заказ</h2>
                <div class="form-inputs">
                    <input name="name" placeholder="Имя" class="form-input mb-2">
                    <input name="number" placeholder="+7 (999) 000-00-00" class="form-input mb-2">
                    <input name="comment" placeholder="Комментарий" class="form-input mb-2">
                    <input style="display: none!important;" name="service" value="Картина под заказ">
                    <button type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </div>

@endsection
